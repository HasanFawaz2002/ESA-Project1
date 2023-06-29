<?php
require 'connect.php';

$updateID = isset($_GET['updateid']) ? $_GET['updateid'] : null;

if ($updateID) {
  $sql = "SELECT * FROM post WHERE postID = $updateID";
  $result = mysqli_query($con, $sql);

  if ($result && mysqli_num_rows($result) > 0) {
    $post = mysqli_fetch_assoc($result);
  } else {
    echo "<div style='background-color: #ffcccc; padding: 10px; border: 1px solid #ff0000;'>
               Post not found.
              </div>
              <script>
                setTimeout(function() {
                    window.location.href = 'profile.php';
                }, 2000);
              </script>";
        exit;
  }

  if (isset($_POST['up'])) {
    $postImage = $_POST['postImage'];
    $Text = $_POST['Text'];

    if (empty($postImage) && empty($_FILES['image']['name']) && empty($Text)) {
      echo "<div style='background-color: #ffcccc; padding: 10px; border: 1px solid #ff0000;'>
      Please provide a new image or specify a post image URL, or enter the post text.
              </div>
              <script>
                setTimeout(function() {
                    window.location.href = 'update_post.php';
                }, 2000);
              </script>";
        exit;
    }

    
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
          echo "<div style='background-color: #ffcccc; padding: 10px; border: 1px solid #ff0000;'>
          Failed to upload image.
              </div>
              <script>
                setTimeout(function() {
                    window.location.href = 'update_post.php';
                }, 2000);
              </script>";
        exit;
        }
      } else {
        echo "<div style='background-color: #ffcccc; padding: 10px; border: 1px solid #ff0000;'>
        Only JPG, JPEG, PNG, and GIF files are allowed.
            </div>
            <script>
              setTimeout(function() {
                  window.location.href = 'update_post.php';
              }, 2000);
            </script>";
      exit;
      }
    } else {
      
      $postImage = null;
    }

  
    $sql = "UPDATE post SET postImage='$postImage', Text='$Text' WHERE postID=$updateID";
    $result = mysqli_query($con, $sql);

    if ($result) {
      echo "<div style='background-color: #ffcccc; padding: 10px; border: 1px solid #ff0000;'>
      Post updated successfully.
          </div>
          <script>
            setTimeout(function() {
                window.location.href = 'profile.php';
            }, 2000);
          </script>";
    exit;
    } else {
      die(mysqli_error($con));
    }
  }
} else {
  echo "<div style='background-color: #ffcccc; padding: 10px; border: 1px solid #ff0000;'>
  Invalid parameters.
      </div>
      <script>
        setTimeout(function() {
            window.location.href = 'profile.php';
        }, 2000);
      </script>";
exit;
}
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="profiles.css" />
</head>

<body>
  <div class="containereditpost">
    <form action="" method="POST" enctype="multipart/form-data" class="editposts">
      <h1>Edit Post</h1>
      <div>
        <label for="postImage">Post Image URL:</label>
        <input type="text" name="postImage" id="postImage" value="<?php echo isset($post['postImage']) ? $post['postImage'] : ''; ?>">
      </div>
      <div>
        <label for="image">New Post Image:</label>
        <input type="file" name="image" id="image">
      </div>
      <div>
        <label for="Text">Post Text:</label>
        <textarea name="Text" id="Text"><?php echo isset($post['Text']) ? $post['Text'] : ''; ?></textarea>
      </div>
      <div>
        <button type="submit" name="up">Update Post</button>
        <button type="button" onclick="location.href='profile.php'">Cancel</button>
      </div>
    </form>
  </div>
</body>

</html>
