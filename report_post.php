<?php
    require 'connect.php';

    // Assuming you have already established a database connection

    // Get the post ID from the query parameter
    $postID = $_GET['reportid'];

    // Validate and sanitize the input
    $postID = mysqli_real_escape_string($con, $postID);
    $postID = filter_var($postID, FILTER_VALIDATE_INT);

    if ($postID === false) {
        // Invalid post ID
        echo "Invalid post ID.";
        exit;
    }

    // Get the user ID for the report (assuming it's stored in a session or obtained from the authentication system)
    $userID = 13; // Replace with the actual user ID

    // Check if the user has already reported the post
    $checkQuery = "SELECT COUNT(*) FROM reports WHERE postID = $postID AND userID = $userID";
    $checkResult = mysqli_query($con, $checkQuery);
    $count = mysqli_fetch_array($checkResult)[0];

    if ($count > 0) {
        // User has already reported the post
        echo "<script>alert('You have already reported this post.');</script>";
        echo "<script>window.location.href = 'profile.php';</script>";
        exit;
    } else {
        // Ask for confirmation before reporting
        echo "<script>if (confirm('Are you sure you want to report this post?')) {
                // Insert the report into the reports table
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'report.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        alert('Report submitted successfully.');
                        window.location.href = 'profile.php';
                    }
                };
                xhr.send('postID=$postID&userID=$userID');
            }</script>";
    }

    // Close the database connection
    mysqli_close($con);
?>
