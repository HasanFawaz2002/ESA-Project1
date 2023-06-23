<?php
require 'connect.php';
// Retrieve the current bio, profile photo, and cover photo from the database
$userID = 13; // Replace with the actual user ID
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
  // Update the bio
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
  $userID = 13; // Replace with the actual user ID

  // Update the bio
  if (isset($_POST['bio'])) {
    $bio = mysqli_real_escape_string($con, $_POST['bio']);
    $sqlUpdateBio = "UPDATE user SET bio = '$bio' WHERE userID = $userID";
    if (!mysqli_query($con, $sqlUpdateBio)) {
      echo "<script>alert('Error updating bio: " . mysqli_error($con) . "');</script>";
      header("Location: profile.php");
      exit;
    }
  }

  // Handle the uploaded profile photo
  if (isset($_FILES['userprofile']) && $_FILES['userprofile']['error'] === UPLOAD_ERR_OK) {
    $profileDirectory = 'profileuser/'; // Specify the directory where you want to store the uploaded profile photos
    $profileFile = $profileDirectory . basename($_FILES['userprofile']['name']);
    if (move_uploaded_file($_FILES['userprofile']['tmp_name'], $profileFile)) {
      $sqlUpdateProfilePhoto = "UPDATE user SET userprofile = '$profileFile' WHERE userID = $userID";
      if (!mysqli_query($con, $sqlUpdateProfilePhoto)) {
        echo "<script>alert('Error updating profile photo: " . mysqli_error($con) . "');</script>";
        header("Location: profile.php");
        exit;
      }
    } else {
      echo "<script>alert('Error uploading profile photo');</script>";
      header("Location: profile.php");
      exit;
    }
  }

  // Handle the uploaded cover photo
  if (isset($_FILES['usercoverphoto']) && $_FILES['usercoverphoto']['error'] === UPLOAD_ERR_OK) {
    $coverDirectory = 'coverphoto/'; // Specify the directory where you want to store the uploaded cover photos
    $coverFile = $coverDirectory . basename($_FILES['usercoverphoto']['name']);
    if (move_uploaded_file($_FILES['usercoverphoto']['tmp_name'], $coverFile)) {
      $sqlUpdateCoverPhoto = "UPDATE user SET usercoverphoto = '$coverFile' WHERE userID = $userID";
      if (!mysqli_query($con, $sqlUpdateCoverPhoto)) {
        echo "<script>alert('Error updating cover photo: " . mysqli_error($con) . "');</script>";
        header("Location: profile.php");
        exit;
      }
    } else {
      echo "<script>alert('Error uploading cover photo');</script>";
      header("Location: profile.php");
      exit;
    }
  }

  // Redirect to profile.php after successful updates
  header("Location: profile.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="profile.css" />
</head>
<body>
  <div class="update_post">
    <form action="" method="POST" enctype="multipart/form-data" class="formupdatepost">
      <h1 class="h1updatepost">My profile</h1>
      <div>
        <label for="postImage">Profile Photo</label>
        <div class="input-container">
          <?php if (!empty($currentProfilePhoto)): ?>
            <div class="current-photo">
              <img src="<?php echo $currentProfilePhoto; ?>" alt="Current Profile Photo">
            </div>
          <?php endif; ?>
          <input type="file" name="userprofile" id="postImage">
        </div>
      </div>
      <div>
        <label for="image">Cover Photo</label>
        <div class="input-container">
          <?php if (!empty($currentCoverPhoto)): ?>
            <div class="current-photo">
              <img src="<?php echo $currentCoverPhoto; ?>" alt="Current Cover Photo">
            </div>
          <?php endif; ?>
          <input type="file" name="usercoverphoto" id="image">
        </div>
      </div>
      <div>
        <label for="Text">Bio</label>
        <textarea name="bio" id="Text"><?php echo $currentBio; ?></textarea>
      </div>
      <div>
        <button type="submit" name="up">Update profile</button>
        <button type="button" onclick="location.href='profile.php'">Cancel</button>
      </div>
    </form>
  </div>
</body>
</html>
