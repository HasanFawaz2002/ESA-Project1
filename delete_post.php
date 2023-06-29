<?php
require 'connect.php';

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

    echo "User ID or post ID not provided.";
}
?>
