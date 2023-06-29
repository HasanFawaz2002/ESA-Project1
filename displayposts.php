<?php
    require 'connect.php';
    if(isset($_SESSION['userID'])){
        $userID = $_SESSION['userID'];
      } ;

    $query = "SELECT post.postID, user.Firstname, user.userprofile, post.time, post.postImage, post.Text 
              FROM user
              INNER JOIN post ON user.userID = post.userID
              WHERE user.userID = $userID";
    $result = mysqli_query($con, $query);

    if ($result) {
      
        $posts = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $posts[] = $row;
        }

       
        mysqli_free_result($result);

       
        $posts = array_reverse($posts);

    
    } else {
       
        echo "Error: " . mysqli_error($con);
    }
    mysqli_close($con);
?>
