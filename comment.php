<?php
session_start();
if(isset($_SESSION['userID'])){
$userid = $_SESSION['userID'];
};
// Check if the postid and comment parameters are present
if (isset($_POST['postid'], $_POST['comment'])) {
    // Connect to your database using appropriate credentials
    $host = 'localhost';
    $db   = 'hangout';
    $user = 'root';
    $pass = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Get the post ID and comment text from the AJAX request data
        $postid = $_POST['postid'];
        $comment = $_POST['comment'];
        

        // Insert the comment into the database
        $insertSql = "INSERT INTO comments (userID, postID, comment) VALUES (:userid, :postid, :comment)";
        $insertStmt = $pdo->prepare($insertSql);
        $insertStmt->bindValue(':userid', $userid, PDO::PARAM_INT); // Replace with the actual user ID
        $insertStmt->bindValue(':postid', $postid, PDO::PARAM_INT);
        $insertStmt->bindValue(':comment', $comment, PDO::PARAM_STR);
        $insertStmt->execute();

        echo 'success'; // Return a success message
    } catch (PDOException $e) {
        // Handle any database connection or query errors
        echo 'error: ' . $e->getMessage(); // Return an error message
    }
} else {
    echo 'error: Invalid parameters'; // Return an error message
}
?>