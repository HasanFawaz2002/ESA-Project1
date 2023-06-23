<?php
require 'connect.php';

$updateID = isset($_GET['updateid']) ? $_GET['updateid'] : null;

if ($updateID) {
  // Retrieve the post from the database
  $sql = "SELECT * FROM post WHERE postID = $updateID";
  $result = mysqli_query($con, $sql);

  if ($result && mysqli_num_rows($result) > 0) {
    $post = mysqli_fetch_assoc($result);

    if (isset($_POST['up'])) {
      $postImage = $_POST['postImage'];
      $Text = $_POST['Text'];

      // Handle file upload only if a new image is selected
      if ($_FILES['image']['size'] > 0) {
        $newImage = $_FILES['image']['name'];
        $imageFileType = strtolower(pathinfo($newImage, PATHINFO_EXTENSION));
        $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

        if (in_array($imageFileType, $allowedExtensions)) {
          $targetDirectory = "images/";
          $targetFile = $targetDirectory . basename($newImage);

          if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $postImage = $targetFile;
          } else {
            echo "Failed to upload image.";
          }
        } else {
          echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
        }
      } else {
        // Set postImage to null if no new image is selected
        $postImage = null;
      }

      // Update the data in the database
      $sql = "UPDATE post SET postImage='$postImage', Text='$Text' WHERE postID=$updateID";
      $result = mysqli_query($con, $sql);

      if ($result) {
        header('Location: profile.php');
        exit;
      } else {
        die(mysqli_error($con));
      }
    }
  } else {
    echo "Post not found";
    exit;
  }
} else {
  echo "Invalid parameters";
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>update Post</title>
  <link rel="stylesheet" href="profile.css" />
</head>
<body>
<div class="update_post">
    <form action="" method="POST" enctype="multipart/form-data" class="formupdatepost">
      <h1 class="h1updatepost">Edit Post</h1>
      <div>
        <label for="postImage">Post Image URL:</label>
        <input type="text" name="postImage" id="postImage" value="<?php echo $post['postImage']; ?>">
      </div>
      <div>
        <label for="image">New Post Image:</label>
        <input type="file" name="image" id="image">
      </div>
      <div>
        <label for="Text">Post Text:</label>
        <textarea name="Text" id="Text"><?php echo $post['Text']; ?></textarea>
      </div>
      <div>
        <button type="submit" name="up">Update Post</button>
        <button type="button" onclick="location.href='profile.php'">Cancel</button>
      </div>
    </form>
  </div>
</body>
</html>
