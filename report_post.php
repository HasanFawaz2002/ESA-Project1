<?php
require 'connect.php';
session_start();
if (isset($_SESSION['userID'])) {
    $userID = $_SESSION['userID'];
}

$postID = $_GET['reportid'];

$postID = mysqli_real_escape_string($con, $postID);
$postID = filter_var($postID, FILTER_VALIDATE_INT);

if ($postID === false) {
    echo "<div style='background-color: #ffcccc; padding: 10px; border: 1px solid #ff0000;'>
    Invalid post ID.
   </div>
   <script>
     setTimeout(function() {
         window.location.href = 'profile.php';
     }, 2000);
   </script>";
exit;
}

$checkQuery = "SELECT COUNT(*) FROM reports WHERE postID = $postID AND userID = $userID";
$checkResult = mysqli_query($con, $checkQuery);

if (!$checkResult) {
   
    echo "Error: " . mysqli_error($con);
    exit;
}

$count = mysqli_fetch_array($checkResult)[0];

if ($count > 0) {
    echo "<div style='background-color: #ffcccc; padding: 10px; border: 1px solid #ff0000;'>
               You have already reported this post
              </div>
              <script>
                setTimeout(function() {
                    window.location.href = 'profile.php';
                }, 2000);
              </script>";
        exit;
} else {
    
    $checkPostQuery = "SELECT userID FROM post WHERE postID = $postID";
    $checkPostResult = mysqli_query($con, $checkPostQuery);

    if (!$checkPostResult) {
        
        echo "Error: " . mysqli_error($con);
        exit;
    }

    $postUserID = mysqli_fetch_array($checkPostResult)[0];

    if ($postUserID == $userID) {
        echo "<div style='background-color: #ffcccc; padding: 10px; border: 1px solid #ff0000;'>
                You cannot report your own post.
              </div>
              <script>
                setTimeout(function() {
                    window.location.href = 'profile.php';
                }, 2000);
              </script>";
        exit;
    }
    
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

mysqli_close($con);
?>
