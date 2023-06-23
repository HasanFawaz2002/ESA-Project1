<?php
    require 'connect.php';

    // Assuming you have already established a database connection

    // Get the post ID and user ID from the POST request
    $postID = $_POST['postID'];
    $userID = $_POST['userID'];

    // Validate and sanitize the input
    $postID = mysqli_real_escape_string($con, $postID);
    $userID = mysqli_real_escape_string($con, $userID);
    $postID = filter_var($postID, FILTER_VALIDATE_INT);
    $userID = filter_var($userID, FILTER_VALIDATE_INT);

    if ($postID === false || $userID === false) {
        // Invalid post ID or user ID
        echo "Invalid data.";
        exit;
    }

    // Insert the report into the reports table
    $insertQuery = "INSERT INTO reports (postID, userID) VALUES ($postID, $userID)";
    mysqli_query($con, $insertQuery);

    // Update the report count for the post in the post table
    $updateQuery = "UPDATE post SET report = report + 1 WHERE postID = $postID";
    mysqli_query($con, $updateQuery);

    // Close the database connection
    mysqli_close($con);
?>
