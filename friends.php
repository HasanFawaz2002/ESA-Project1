<?php
require 'connect.php';

// User ID
$userID = 13;

// Retrieve data from the "following" table for the specific user
$followingQuery = "SELECT * FROM following WHERE userID = $userID";
$followingResult = mysqli_query($con, $followingQuery);

// Retrieve data from the "follower" table for the specific user
$followerQuery = "SELECT * FROM follower WHERE userID = $userID";
$followerResult = mysqli_query($con, $followerQuery);

// Process the retrieved data
$followingUsers = array();
if (mysqli_num_rows($followingResult) > 0) {
    // Loop through the "following" table records
    while ($followingRow = mysqli_fetch_assoc($followingResult)) {
        // Access the data for each row
        $followingID = $followingRow['followingID'];
        $userID = $followingRow['userID'];
        $categoryID = $followingRow['categoryID'];

        // Perform desired operations with the data
        // For example, add the following user to the array
        $followingUsers[] = array(
            'userID' => $userID,
            'categoryID' => $categoryID
        );
    }
}

$followerUsers = array();
if (mysqli_num_rows($followerResult) > 0) {
    // Loop through the "follower" table records
    while ($followerRow = mysqli_fetch_assoc($followerResult)) {
        // Access the data for each row
        $followerID = $followerRow['followerID'];
        $userID = $followerRow['userID'];

        // Perform desired operations with the data
        // For example, add the follower user to the array
        $followerUsers[] = array(
            'userID' => $userID
        );
    }
}
?>
