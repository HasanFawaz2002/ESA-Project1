<?php
session_start();
if(isset($_SESSION['userID'])){
$userid = $_SESSION['userID'];
};
// Check if the postid parameter is present
if (isset($_POST['postid'])) {
    // Perform necessary actions to add a report to the post in the database
    // Connect to your database using appropriate credentials
    $host = 'localhost';
    $db   = 'hangout';
    $user = 'root';
    $pass = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Get the postid from the AJAX request data
        $postid = $_POST['postid'];

        // Check if the user has already reported the post
        // Assuming you have a users table with a unique user ID, adjust the query accordingly
         // Replace with the actual user ID or retrieve it from the current user's session

        $selectSql = "SELECT COUNT(*) FROM reports WHERE PostID = :postid AND UserID = :userid";
        $selectStmt = $pdo->prepare($selectSql);
        $selectStmt->bindValue(':postid', $postid, PDO::PARAM_INT);
        $selectStmt->bindValue(':userid', $userid, PDO::PARAM_INT);
        $selectStmt->execute();

        $hasReported = $selectStmt->fetchColumn();
        if ($hasReported) {
            // User has already reported the post, return a 'duplicate' response
            echo 'duplicate'; // Return a 'duplicate' response
        } else {
            // Insert a new report record
            $insertSql = "INSERT INTO reports (PostID, UserID) VALUES (:postid, :userid)";
            $insertStmt = $pdo->prepare($insertSql);
            $insertStmt->bindValue(':postid', $postid, PDO::PARAM_INT);
            $insertStmt->bindValue(':userid', $userid, PDO::PARAM_INT);
            $insertStmt->execute();

            // Update the report column in the post table
            $updateSql = "UPDATE reports SET reports = reports + 1 WHERE PostID = :postid";
            $updateStmt = $pdo->prepare($updateSql);
            $updateStmt->bindValue(':postid', $postid, PDO::PARAM_INT);
            $updateStmt->execute();

            echo 'success'; // Return a success message
        }
    } catch (PDOException $e) {
        // Handle any database connection or query errors
        echo 'error: ' . $e->getMessage(); // Return an error message
    }
} else {
    echo 'error: Post ID not provided'; // Return an error message
}
?>