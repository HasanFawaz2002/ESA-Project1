<?php
require 'connect.php';

if (isset($_GET['postID'])) {
    $postID = $_GET['postID'];

    $query = "SELECT c.comment, u.Firstname, u.Lastname, u.userprofile, c.timestamp
              FROM comments c
              INNER JOIN user u ON c.userID = u.userID
              WHERE c.postID = $postID";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $comment = $row['comment'];
            $firstName = $row['Firstname'];
            $lastName = $row['Lastname'];
            $userProfile = $row['userprofile'];
            $timestamp = $row['timestamp'];

            $commentTime = strtotime($timestamp);
            $timeElapsed = time() - $commentTime;

            $timeDisplay = '';

            if ($timeElapsed < 60) {
                $timeDisplay = 'Just now';
            } elseif ($timeElapsed < 3600) {
                $minutes = floor($timeElapsed / 60);
                $timeDisplay = $minutes . ' minute(s) ago';
            } elseif ($timeElapsed < 86400) {
                $hours = floor($timeElapsed / 3600);
                $timeDisplay = $hours . ' hour(s) ago';
            } else {
                $days = floor($timeElapsed / 86400);
                $timeDisplay = $days . ' day(s) ago';
            }

            echo "<div class='comment'>";
            echo "  <div class='profile'>";
            echo "    <div class='profile-picture'>";
            echo "      <img src='$userProfile' alt='User Profile'>";
            echo "    </div>";
            echo "    <div class='user-details'>";
            echo "      <p><span class='profile-name'>$firstName $lastName</span> - $timeDisplay</p>";
            echo "      <p>$comment</p>"; 
            echo "    </div>";
            echo "  </div>";
            echo "</div>";
        }
    } else {
        echo "No comments.";
    }

    mysqli_close($con);
} else {
    echo "No post ID provided.";
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .comment {
  display: flex;
  margin-bottom: 10px;
}

.profile {
  display: flex;
  align-items: center;
  margin-right: 10px;
}

.profile-picture img {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  object-fit: cover;
}

.user-details {
  margin-left: 10px;
}

.profile-name {
  font-weight: bold;
}

.comment-time {
  margin-left: 5px; 
  color: #888; 
}

    </style>
</head>
<body>
    
</body>
</html>