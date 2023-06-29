<?php
require 'connect.php';


$postID = $_POST['postID'];
$userID = $_POST['userID'];


$postID = mysqli_real_escape_string($con, $postID);
$userID = mysqli_real_escape_string($con, $userID);
$postID = filter_var($postID, FILTER_VALIDATE_INT);
$userID = filter_var($userID, FILTER_VALIDATE_INT);

if ($postID === false || $userID === false) {
    
    echo "Invalid data.";
    exit;
}


$insertQuery = "INSERT INTO reports (postID, userID) VALUES ($postID, $userID)";
mysqli_query($con, $insertQuery);


$updateQuery = "UPDATE post SET report = report + 1 WHERE postID = $postID";
mysqli_query($con, $updateQuery);

mysqli_close($con);
