<?php
require 'connect.php';
session_start();

if (isset($_SESSION['userID'])) {
  $userID = $_SESSION['userID'];
}
$sqlSelectData = "SELECT bio, userprofile, usercoverphoto FROM user WHERE userID = $userID";
$result = mysqli_query($con, $sqlSelectData);
if ($row = mysqli_fetch_assoc($result)) {
  $currentBio = $row['bio'];
  $currentProfilePhoto = $row['userprofile'];
  $currentCoverPhoto = $row['usercoverphoto'];
} else {
  $currentBio = '';
  $currentProfilePhoto = '';
  $currentCoverPhoto = '';
}
if (isset($_POST['up'])) {
  if (isset($_POST['bio'])) {
    $bio = mysqli_real_escape_string($con, $_POST['bio']);
    $sqlUpdateBio = "UPDATE user SET bio = '$bio' WHERE userID = $userID";
    if (!mysqli_query($con, $sqlUpdateBio)) {
      echo "<script>alert('Error updating bio: " . mysqli_error($con) . "');</script>";
      header("Location: profile.php");
      exit;
    }
  }
}

if (isset($_POST['up'])) {
  if (isset($_POST['bio'])) {
    $bio = mysqli_real_escape_string($con, $_POST['bio']);
    $sqlUpdateBio = "UPDATE user SET bio = '$bio' WHERE userID = $userID";
    if (!mysqli_query($con, $sqlUpdateBio)) {
      echo "<script>alert('Error updating bio: " . mysqli_error($con) . "');</script>";
      header("Location: profile.php");
      exit;
    }
  }

  
  if (isset($_FILES['userprofile']) && $_FILES['userprofile']['error'] === UPLOAD_ERR_OK) {
    $profileDirectory = 'profileuser/'; 
    $profileFile = $profileDirectory . basename($_FILES['userprofile']['name']);
    if (move_uploaded_file($_FILES['userprofile']['tmp_name'], $profileFile)) {
      $sqlUpdateProfilePhoto = "UPDATE user SET userprofile = '$profileFile' WHERE userID = $userID";
      if (!mysqli_query($con, $sqlUpdateProfilePhoto)) {
        echo "<script>alert('Error updating profile photo: " . mysqli_error($con) . "');</script>";
        header("Location: profile.php");
        exit;
      }
    } else {
      echo "<div style='background-color: #ffcccc; padding: 10px; border: 1px solid #ff0000;'>
      Error uploading profile photo
              </div>
              <script>
                setTimeout(function() {
                    window.location.href = 'profile.php';
                }, 2000);
              </script>";
        exit;
    }
  }


  if (isset($_FILES['usercoverphoto']) && $_FILES['usercoverphoto']['error'] === UPLOAD_ERR_OK) {
    $coverDirectory = 'coverphoto/';
    $coverFile = $coverDirectory . basename($_FILES['usercoverphoto']['name']);
    if (move_uploaded_file($_FILES['usercoverphoto']['tmp_name'], $coverFile)) {
      $sqlUpdateCoverPhoto = "UPDATE user SET usercoverphoto = '$coverFile' WHERE userID = $userID";
      if (!mysqli_query($con, $sqlUpdateCoverPhoto)) {
        echo "<script>alert('Error updating cover photo: " . mysqli_error($con) . "');</script>";
        header("Location: profile.php");
        exit;
      }
    } else {
      echo "<div style='background-color: #ffcccc; padding: 10px; border: 1px solid #ff0000;'>
      Error uploading cover photo
              </div>
              <script>
                setTimeout(function() {
                    window.location.href = 'profile.php';
                }, 2000);
              </script>";
        exit;
    }
  }


  header("Location: profile.php");
  exit;
}
?>


<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="profiles.css" />
</head>

<body>
  <div class="update_post">
    <form action="" method="POST" enctype="multipart/form-data" class="formupdatepost">
      <h1 class="h1updatepost">Edit My profile</h1>
      <div class="profile-section">
        <div>
          <div class="input-container">
            <label>Current cover photo </label>
            <?php if (!empty($currentCoverPhoto)) : ?>
              <div class="current-photo">
                <img src="<?php echo $currentCoverPhoto; ?>" alt="Current Cover Photo">
              </div>
            <?php endif; ?>
            <label for="image" class="file-upload-label">
              <input type="file" name="usercoverphoto" id="image">
              upload new cover
            </label>
          </div>
        </div>
        <div>
          <div class="input-container">
            <label>Current profile photo </label>
            <?php if (!empty($currentProfilePhoto)) : ?>
              <div class="current-photo">
                <img src="<?php echo $currentProfilePhoto; ?>" alt="Current Profile Photo">
              </div>
            <?php endif; ?>
            <label for="postImage" class="file-upload-label">
              <input type="file" name="userprofile" id="postImage">
              upload new profile
            </label>
          </div>
        </div>
      </div>
      <div class="bio-section">
        <label for="Text">Bio</label>
        <textarea name="bio" id="Text"><?php echo $currentBio; ?></textarea>
      </div>
      <div class="button-section">
        <button type="submit" name="up">Update profile</button>
        <button type="button" onclick="location.href='profile.php'">Cancel</button>
      </div>
    </form>
</body>

</html>