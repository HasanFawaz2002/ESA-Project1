<?php
session_start();
require('conn.php');

if (isset($_POST['submit'])) {
    $userinput = $_POST['userinput'];
    $catid = $_POST['selectcategory'];
    $userid = $_SESSION['userID'];

    // Check if an image file is selected
    if ($_FILES['postImage']['error'] === UPLOAD_ERR_OK) {
        $tempFilePath = $_FILES['postImage']['tmp_name'];
        $fileName = $_FILES['postImage']['name'];
        $uploadPath = 'uploads/' . $fileName;

        // Move the uploaded file to the desired location
        if (move_uploaded_file($tempFilePath, $uploadPath)) {
            // Insert the post data into the database
            $sql = "INSERT INTO post (Text, categoryid, userID, postImage) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("siss", $userinput, $catid, $userid, $uploadPath);

            if ($stmt->execute()) {
                echo "Data inserted successfully";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error uploading image";
        }
    } else {
        // Insert the post data into the database without an image
        $sql = "INSERT INTO post (Text, categoryid, userID) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sii", $userinput, $catid, $userid);

        if ($stmt->execute()) {
            echo "Data inserted successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();

    header('Location: user.php');
    exit();
}
?>
