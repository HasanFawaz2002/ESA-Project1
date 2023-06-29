<?php
include('conn.php');
// Assuming you have a database connection established

if (isset($_GET['postid'])) {
    $postID = $_GET['postid'];

    // Query the database to get the like count
    $query = "SELECT COUNT(*) AS likeCount FROM likes WHERE PostID = $postID";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    // Return the like count as the response
    echo $row['likeCount'];
} else {
    // Handle the case when postid is not provided
    echo 'Error: Post ID is not provided.';
}
?>
