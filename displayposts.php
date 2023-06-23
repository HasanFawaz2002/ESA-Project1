<?php
    require 'connect.php';

    // Assuming you have already established a database connection

    // Selecting data from the "user" and "post" tables for user ID 13
    $query = "SELECT post.postID, user.Firstname, user.userprofile, post.time, post.postImage, post.Text 
              FROM user
              INNER JOIN post ON user.userID = post.userID
              WHERE user.userID = 13";
    $result = mysqli_query($con, $query);

    if ($result) {
        // Fetching the data from the result set
        $posts = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $posts[] = $row;
        }

        // Free the result set
        mysqli_free_result($result);

        // Reverse the order of posts
        $posts = array_reverse($posts);

    
    } else {
        // Handle the error if the query fails
        echo "Error: " . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);

    // Include the HTML file
    // include 'profile.php';
?>
