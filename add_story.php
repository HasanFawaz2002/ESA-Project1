<?php
session_start();
require('conn.php');

if (isset($_POST['submit'])) {
    $userid = $_SESSION['userID'];
    $storyTime = date('Y-m-d H:i:s');

    // Check if an image file is selected
    if ($_FILES['storyImage']['error'] === UPLOAD_ERR_OK) {
        $tempFilePath = $_FILES['storyImage']['tmp_name'];
        $fileName = $_FILES['storyImage']['name'];
        $uploadPath = 'uploads/' . $fileName;

        // Move the uploaded file to the desired location
        if (move_uploaded_file($tempFilePath, $uploadPath)) {
            // Insert the story data into the database
            $sql = "INSERT INTO story (storyID, userID, storyTime, storyImage) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("iiss", $userid, $userid, $storyTime, $uploadPath);

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
        // Insert the story data into the database without an image
        $sql = "INSERT INTO story (storyID, userID, storyTime) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iis", $userid, $userid, $storyTime);

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
