<?php
require 'connect.php';
// Assuming you have established a database connection

if (isset($_GET['deleteid']) ) {
    $deleteid = $_GET['deleteid'];
    

    $sql = "DELETE FROM `post` WHERE   postID = $deleteid";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location: profile.php');
        exit;
    } else {
        die(mysqli_error($con));
    }
} else {
    // Parameters not provided
    echo "User ID or post ID not provided.";
}
?>
