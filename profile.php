<?php
require 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <link rel="stylesheet" href="profiles.css" />

</head>

<body style="background-color: #e8f1fa">
  <!--navbar starts here-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4" style="position: fixed; width: 100%; z-index: 1; ">
    <div class="container-fluid">
      <h3 class="animate-charcter">
        <a class="navbar-brand" href="#"><img src="images/Logo.jpg" alt="" /> Hangout</a>
      </h3>
      <form class="d-flex" role="search" style="width: 35%">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
      </form>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="console.log('hello')">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-lg-start" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto  mb-lg-0 d-flex justify-content-end" style="width: 655px">
          <div class="ul-main">
            <div class="firstitem">
              <li class="nav-item"></li>
              <li class="nav-item" style="transform: translateY(-3px)">
                <svg width="24" height="24" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.625 19.4857H6.5625V11.9429H14.4375V19.4857H18.375V8.17143L10.5 2.51429L2.625 8.17143V19.4857ZM2.625 22C1.90313 22 1.28494 21.7536 0.770439 21.2608C0.255939 20.768 -0.000872771 20.1763 2.22835e-06 19.4857V8.17143C2.22835e-06 7.77333 0.0931894 7.39619 0.279564 7.04C0.465939 6.68381 0.722752 6.39048 1.05 6.16L8.925 0.502857C9.16562 0.335238 9.41719 0.209524 9.67969 0.125714C9.94219 0.0419046 10.2156 0 10.5 0C10.7844 0 11.0578 0.0419046 11.3203 0.125714C11.5828 0.209524 11.8344 0.335238 12.075 0.502857L19.95 6.16C20.2781 6.39048 20.5354 6.68381 20.7217 7.04C20.9081 7.39619 21.0009 7.77333 21 8.17143V19.4857C21 20.1771 20.7427 20.7693 20.2282 21.2621C19.7137 21.7549 19.096 22.0008 18.375 22H11.8125V14.4571H9.1875V22H2.625Z" fill="#0055FF" />
                </svg>
              </li>
              <a href="user.html" class="nav-a"> <span>Home</span></a>
            </div>

            <div class="seconditem">
              <li class="nav-item"></li>
              <li class="nav-item">
                <a href="setting.html" class="nav-a"> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.52 10.146C21.3034 10.1028 21.1011 10.0059 20.9316 9.86419C20.7621 9.7225 20.6309 9.54055 20.55 9.335L20.547 9.326L19.938 7.844C19.8446 7.64147 19.805 7.41828 19.8231 7.19599C19.8411 6.9737 19.9162 6.75982 20.041 6.575L20.038 6.58L21.026 5.262C21.1466 5.08945 21.2071 4.88204 21.1983 4.67172C21.1894 4.46139 21.1117 4.25981 20.977 4.098L20.978 4.1L19.896 3.015C19.733 2.88099 19.5306 2.80419 19.3198 2.79642C19.1089 2.78866 18.9014 2.85034 18.729 2.972L18.732 2.97L17.416 3.958C17.2305 4.08274 17.0158 4.15733 16.7929 4.1745C16.57 4.19168 16.3464 4.15085 16.144 4.056L16.152 4.059L14.67 3.45C14.4632 3.37178 14.2797 3.24242 14.1364 3.07401C13.9932 2.90561 13.895 2.70365 13.851 2.487L13.85 2.479L13.621 0.848C13.5832 0.640758 13.482 0.450364 13.3314 0.303117C13.1807 0.155871 12.9881 0.0590398 12.78 0.026L12.774 0.025C12.774 0.025 12.514 0 11.998 0C11.482 0 11.229 0.026 11.229 0.026C11.0197 0.0563154 10.8251 0.151102 10.6722 0.297173C10.5194 0.443245 10.4158 0.633336 10.376 0.841L10.375 0.847L10.142 2.476C10.0989 2.69244 10.002 2.89456 9.8603 3.06372C9.71857 3.23289 9.53655 3.36366 9.331 3.444L9.322 3.447L7.84 4.056C7.63736 4.14914 7.41415 4.1885 7.19187 4.17029C6.9696 4.15207 6.75577 4.07689 6.571 3.952L6.576 3.955L5.258 2.967C5.08549 2.84624 4.87816 2.78535 4.66775 2.79366C4.45734 2.80197 4.25545 2.87901 4.093 3.013L4.095 3.012L3.016 4.099C2.88153 4.2613 2.80434 4.46342 2.79639 4.67404C2.78843 4.88465 2.85016 5.09202 2.972 5.264L2.97 5.261L3.958 6.579C4.08163 6.76497 4.15563 6.97948 4.17296 7.20212C4.19029 7.42477 4.15037 7.64814 4.057 7.851L4.06 7.843L3.449 9.325C3.287 9.744 2.927 10.055 2.486 10.144L2.478 10.145L0.847 10.375C0.63954 10.4142 0.449423 10.517 0.303025 10.6691C0.156627 10.8213 0.0612059 11.0152 0.03 11.224L0.029 11.23C0.029 11.23 0 11.486 0 11.999C0 12.512 0.027 12.769 0.027 12.769C0.091 13.201 0.42 13.542 0.841 13.621L0.847 13.622L2.476 13.854C2.925 13.945 3.286 14.254 3.446 14.665L3.449 14.674L4.06 16.156C4.15367 16.3586 4.19324 16.5819 4.17484 16.8043C4.15643 17.0268 4.08069 17.2406 3.955 17.425L3.958 17.42L2.97 18.738C2.84956 18.8717 2.77263 19.0388 2.74941 19.2173C2.72619 19.3957 2.75779 19.5769 2.84 19.737L2.838 19.732C3.013 19.949 3.515 20.484 3.516 20.486L3.891 20.83C4.095 21.018 4.933 21.279 5.263 21.033L6.58 20.045C6.76542 19.92 6.98017 19.8453 7.20317 19.8283C7.42617 19.8113 7.64976 19.8525 7.852 19.948L7.844 19.945L9.326 20.554C9.746 20.715 10.057 21.076 10.145 21.517L10.146 21.525L10.375 23.151C10.455 23.579 10.795 23.908 11.221 23.973L11.227 23.974C11.227 23.974 11.484 23.999 11.999 23.999C12.514 23.999 12.769 23.972 12.769 23.972C13.199 23.905 13.537 23.576 13.615 23.156L13.616 23.15L13.85 21.521C13.94 21.072 14.25 20.711 14.661 20.553L14.67 20.55L16.152 19.939C16.3546 19.8453 16.5779 19.8058 16.8003 19.8242C17.0228 19.8426 17.2366 19.9183 17.421 20.044L17.416 20.041L18.734 21.029C18.9069 21.1497 19.1146 21.2104 19.3253 21.2015C19.536 21.1926 19.7379 21.1148 19.9 20.98L19.898 20.981L20.98 19.897C21.1138 19.7341 21.1907 19.5318 21.1988 19.3211C21.2069 19.1104 21.1459 18.9028 21.025 18.73L21.027 18.733L20.039 17.415C19.896 17.2014 19.8201 16.95 19.821 16.693C19.821 16.496 19.864 16.31 19.942 16.143L19.939 16.151L20.548 14.669C20.711 14.249 21.072 13.939 21.513 13.85L21.521 13.849L23.148 13.617C23.576 13.537 23.906 13.197 23.97 12.771L23.971 12.765C23.971 12.765 23.998 12.516 23.998 12C23.998 11.484 23.971 11.23 23.971 11.23C23.9402 11.0206 23.8448 10.8259 23.6982 10.6732C23.5516 10.5205 23.361 10.4173 23.153 10.378L23.147 10.377L21.52 10.146ZM11.997 15.001C11.4038 15.0008 10.8239 14.8247 10.3308 14.4951C9.8376 14.1654 9.45323 13.6969 9.22627 13.1488C8.9993 12.6007 8.93991 11.9977 9.05562 11.4159C9.17133 10.834 9.45693 10.2996 9.87633 9.88003C10.2957 9.4605 10.8301 9.17472 11.4119 9.05882C11.9937 8.94292 12.5967 9.0021 13.1449 9.22888C13.6931 9.45567 14.1617 9.83988 14.4915 10.3329C14.8213 10.826 14.9976 11.4058 14.998 11.999C14.9981 12.3931 14.9206 12.7844 14.7698 13.1486C14.6191 13.5127 14.398 13.8436 14.1193 14.1223C13.8406 14.401 13.5097 14.6221 13.1456 14.7728C12.7814 14.9236 12.3911 15.0011 11.997 15.001Z" fill="#1E74FD" />
                  </svg>
              </li>

              <span>settings</span></a>
            </div>

            <div class="thirditem">
              <li class="nav-item"></li>
              <li class="nav-item">
                <a href="profilyy.html" class="nav-a"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#1E74FD" class="bi bi-person-square" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
                  </svg>
              </li>
              <span> Profile</span></a>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <!--navbar ends here-->


  <!--Setting main of all page content ------------------------------------------------------------------------------------------>
  <div id="Settings-main">

    <!--coverphoto  ....-------------------------------------------------------------------------------------------------------------------------------->
    <div class="cover-container">
      <?php
      if (isset($_SESSION['userID'])) {
        $userID = $_SESSION['userID'];
      }
      $sqlSelectCoverPhoto = "SELECT usercoverphoto FROM user WHERE userID = $userID";
      $result = mysqli_query($con, $sqlSelectCoverPhoto);
      if ($row = mysqli_fetch_assoc($result)) {
        echo '<img class="coverPhoto" src="' . $row['usercoverphoto'] . '" alt="Cover Photo" />';
      } else {
        echo '<img class="coverPhoto" src="default-cover-photo.jpg" alt="Cover Photo" />';
      }
      ?>
      <div>
        <a href="cover-profile.php">
          <?php
          $sqlSelectProfilePhoto = "SELECT userprofile FROM user WHERE userID = $userID";
          $result = mysqli_query($con, $sqlSelectProfilePhoto);
          if ($row = mysqli_fetch_assoc($result)) {
            echo '<img class="div2" src="' . $row['userprofile'] . '" id="img" alt="Profile" style="width: 150px" />';
          } else {
            echo '<img class="div2" src="default-profile-image.jpg" id="img" alt="Profile" style="width: 150px" />';
          }
          ?>
        </a>
      </div>
       <!--qrcode button - pen update button -count colors  ....-------------------------------------------------------------------------------------------------------------------------------->
         <div class="qr-pen">
         
          <h1 id="h1">
            <?php

            $sqlSelectUser = "SELECT firstname, lastname FROM user WHERE userID = $userID";
            $result = mysqli_query($con, $sqlSelectUser);
            if ($row = mysqli_fetch_assoc($result)) {
              echo $row['firstname'] . ' ' . $row['lastname'];
            } else {
              echo "User not found";
            }
            ?>
          </h1>
       
          <?php
          require_once 'phpqr/phpqrcode/qrlib.php';
          $baseUrl = 'http://localhost/hangoutt/profile.php';
          $path = 'qrcodes/';

          if (isset($_SESSION['userID'])) {
            $userID = $_SESSION['userID'];
            $query = "SELECT Firstname, Lastname FROM user WHERE UserID = ?";
            $stmt = $con->prepare($query);
            $stmt->bind_param("i", $userID);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            $stmt->close();

            $fullName = $user['Firstname'] . ' ' . $user['Lastname'];
            $profileUrl = $baseUrl . '?user=' . $userID;
            $text = $fullName . ' - ' . $profileUrl;
            $qrcode = $path . $userID . '.png';
            QRcode::png($text, $qrcode, 'H', 4, 4); //$fullname in i need name 

            $qrcodePath = $path . $userID . '.png';
            $query = "UPDATE user SET qrcode = ?, profile_url = ? WHERE UserID = ?";
            $stmt = $con->prepare($query);
            $stmt->bind_param("ssi", $qrcodePath, $profileUrl, $userID);
            $stmt->execute();
            $stmt->close();
          }
          ?>




          <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
            <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
            <div class="w3-modal-content w3-animate-zoom">
              <div class="divqr">
                <nav style="justify-content: center">
                  <h1 style="margin-left: 35%">My QR Code</h1>
                </nav>

                <img id="qrImage" src="<?php echo $qrcode; ?>" style="width: fit-content; height: 330px; margin-left: 30%" />
                <h4 style="margin-left: 33%; margin-top: 0%; padding-bottom: 2%">
                  Scan me to access my profile easily!
                </h4>
                <div style="display: flex; align-items: center; justify-content: center; margin-top: 20px;">
                  <input type="text" id="profileUrlInput" value="<?php echo $profileUrl; ?>" readonly style="width: 300px; margin-right: 10px;" />
                  <button onclick="copyProfileUrl()" style="padding: 8px 16px;">Copy URL</button>
                </div>

                <!-- Download button -->
                <a href="<?php echo $qrcode; ?>" download="qr_code_image.png" style="display: block; text-align: center; margin-top: 20px;">
                  Download QR Code
                </a>
              </div>
            </div>
          </div>
          <script>
            function copyProfileUrl() {
              var profileUrlInput = document.getElementById("profileUrlInput");
              profileUrlInput.select();
              profileUrlInput.setSelectionRange(0, 99999);
              document.execCommand("copy");
              alert("Profile URL copied to clipboard!");
            }
          </script>

          <div class="qr">
            <button id="qrcode" onclick="document.getElementById('modal01').style.display='block'">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="#05f" d="M4 4h6v6H4V4m16 0v6h-6V4h6m-6 11h2v-2h-2v-2h2v2h2v-2h2v2h-2v2h2v3h-2v2h-2v-2h-3v2h-2v-4h3v-1m2 0v3h2v-3h-2M4 20v-6h6v6H4M6 6v2h2V6H6m10 0v2h2V6h-2M6 16v2h2v-2H6m-2-5h2v2H4v-2m5 0h4v4h-2v-2H9v-2m2-5h2v4h-2V6M2 2v4H0V2a2 2 0 0 1 2-2h4v2H2m20-2a2 2 0 0 1 2 2v4h-2V2h-4V0h4M2 18v4h4v2H2a2 2 0 0 1-2-2v-4h2m20 4v-4h2v4a2 2 0 0 1-2 2h-4v-2h4Z" />
              </svg>
            </button>
          </div>

          <div class="penupdate">
            <form action="cover-profile.php" method="POST" enctype="multipart/form-data">
              <button class="update-button"><i class="fas fa-pen"></i></button>
              <input type="file" id="cover-photo-input" name="cover_photo" style="display: none;">
              <input type="submit" value="Upload" style="display: none;">
            </form>
          </div>
          <!-- span counts colors   ....-------------------------------------------------------------------------------------------------------------------------------->

          <?php
          $sql = "SELECT COUNT(*) AS reportCount, lastReportTime FROM reports WHERE userID = $userID";
          $result = $con->query($sql);

          if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $reportCount = $row["reportCount"];
            $lastReportTime = $row["lastReportTime"];
          } else {
            $reportCount = 0;
            $lastReportTime = null;
          }

          $colorClass = "";
          if ($reportCount < 3) {
            $colorClass = "green";
          } else if ($reportCount >= 3 && $reportCount <= 4) {
            $colorClass = "yellow";
          } else {
            $colorClass = "red";

            $maxReports = 4;
            $blockDuration = 60;

            if ($lastReportTime !== null) {
              $blockTime = strtotime($lastReportTime) + $blockDuration;
              $remainingTime = $blockTime - time();

              if ($remainingTime > 0) {
                echo "<script>alert('Profile blocked. Please try again after " . gmdate("i:s", $remainingTime) . " minutes.');</script>";
                exit;
              } else {

                $deleteSql = "DELETE FROM reports WHERE userID = $userID";
                $con->query($deleteSql);
              }
            }
          }

          $currentTime = date("Y-m-d H:i:s");
          $updateSql = "UPDATE reports SET lastReportTime = '$currentTime' WHERE userID = $userID";
          $con->query($updateSql);
          ?>

          <form action="" class="rate">
            <span class="circle <?php echo $colorClass; ?>"></span>
            <span class="circle <?php echo $colorClass; ?>"></span>
            <span class="circle <?php echo $colorClass; ?>"></span>
          </form>



        </div>
    </div>

        <div class="second">
          <!--count of post  bio  ------------------------------------------------------------------------------------------------------------------->
          <?php

          $postQuery = "SELECT * FROM post WHERE userID = $userID";
          $postResult = mysqli_query($con, $postQuery);

          $postCount = mysqli_num_rows($postResult);
          ?>
          <div class="countsfollows">
            <p id="follow"><strong id="number"><?php echo $postCount; ?></strong> Posts</p>
          </div>
        
        
        <p id="Bio">
          <?php
          if (isset($_SESSION['userID'])) {
            $userID = $_SESSION['userID'];
          }

          $sqlSelectBio = "SELECT bio FROM user WHERE userID = $userID";
          $result = mysqli_query($con, $sqlSelectBio);
          if ($row = mysqli_fetch_assoc($result)) {
            echo $row['bio'];
          } else {
            echo "Bio not available";
          }
          ?>
        </p>
        
        </div>
 


    <!--lintroooo of ads -------------------------------------------------------------------------------------------------------------------->

    <div class="tool">
  <div class="leftside">
    <div id="adss">
      <div id="imageContainer">
        <img src="images/ad0.gif" alt="Image 1" />
        <img src="images/ad1.jpeg" alt="Image 2" />
        <img src="images/ad2.jpeg" alt="Image 3" />
      </div>
      <div id="ads2">
        <a href="https://www.tours.com/"><img src="images/7693fa55740535.599192309c08d.gif" alt="ads 1" /></a>
      </div>
    </div>
  </div>

      <!--set of postss ------------------------------------------------------------------------------------------------------------------>
      <?php
include 'displayposts.php';

echo '<div class="main-posts">';
foreach ($posts as $post) {
    $postID = $post['postID'];
?>
  <div class="imgpo" style="display: grid !important;">
    <div class="post-actions">
      <div class="fade-container">
        <button onclick="toggleFade(<?php echo $post['postID']; ?>)" class="fade-button">
          <i class="fas fa-ellipsis-h"></i>
        </button>
        <div id="fade-options-<?php echo $post['postID']; ?>" class="fade-options">
          <a href="update_post.php?updateid=<?php echo $post['postID']; ?>" class="option-link">
            <i class="fas fa-edit"></i>
            Update
          </a>
          <a href="delete_post.php?deleteid=<?php echo $post['postID']; ?>" class="option-link">
            <i class="fas fa-trash-alt"></i>
            Delete
          </a>
          <a href="report_post.php?reportid=<?php echo $post['postID']; ?>" class="option-link">
            <i class="fas fa-exclamation-triangle"></i>
            Report
          </a>
        </div>
      </div>
    </div>
    <div class="cardhead">
      <div class="cardicon">
        <img src="<?php echo $post['userprofile']; ?>" alt="User Profile" />
      </div>
      <div class="carduser">
        <div class="cardname">
          <p><?php echo $post['Firstname']; ?></p>
        </div>
        <div class="cardtime">
          <p><?php echo $post['time']; ?></p>
        </div>
      </div>
    </div>
    <?php if (!empty($post['postImage'])) : ?>
      <div class="postimage">
        <img src="<?php echo $post['postImage']; ?>" alt="Post Image" />
        <p id="desc"><?php echo $post['Text']; ?></p>
      </div>
    <?php else : ?>
      <div>
        <p id="desc"><?php echo $post['Text']; ?></p>
      </div>
    <?php endif; ?>
    <div class="buttonimg">
      
      
        <button id="myButton" class="post-custom show-comments-button" data-postid="<?php echo $postID; ?>">
        <svg
                    width="48"
                    height="30"
                    viewBox="0 0 48 30"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect
                      width="48"
                      height="30"
                      fill="url(#paint0_linear_396_832)"
                    />
                    <path
                      d="M22.7412 26C26.3013 26 29.7814 25.3402 32.7415 24.104C35.7016 22.8679 38.0087 21.1109 39.371 19.0552C40.7334 16.9995 41.0899 14.7375 40.3953 12.5552C39.7008 10.373 37.9865 8.36839 35.4691 6.79505C32.9518 5.22171 29.7445 4.15025 26.2528 3.71617C22.7612 3.28209 19.142 3.50487 15.8529 4.35636C12.5638 5.20785 9.75262 6.64979 7.77476 8.49984C5.79689 10.3499 4.74121 12.525 4.74121 14.75C4.74121 16.61 5.46121 18.3638 6.74121 19.9088L4.74121 26L14.4872 24.75C16.9592 25.55 19.7672 26 22.7412 26Z"
                      stroke="url(#paint1_linear_396_832)"
                      stroke-width="3"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M32.0007 17.4999L27.0001 17.5003L21.5004 17.5001L16.5004 17.4999L12.5 17.5"
                      stroke="url(#paint2_linear_396_832)"
                      stroke-width="2"
                    />
                    <path
                      d="M24 12H26H29.5"
                      stroke="url(#paint3_linear_396_832)"
                      stroke-width="2"
                    />
                    <path
                      d="M15 12.5L18 11L21 12.5"
                      stroke="url(#paint4_linear_396_832)"
                      stroke-width="2"
                    />
                    <defs>
                      <linearGradient
                        id="paint0_linear_396_832"
                        x1="24"
                        y1="0"
                        x2="24"
                        y2="30"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop stop-color="white" />
                        <stop offset="1" stop-color="white" stop-opacity="0" />
                      </linearGradient>
                      <linearGradient
                        id="paint1_linear_396_832"
                        x1="5"
                        y1="15"
                        x2="41"
                        y2="15"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop stop-color="#30CFD0" stop-opacity="0.77" />
                        <stop offset="1" stop-color="#330867" />
                      </linearGradient>
                      <linearGradient
                        id="paint2_linear_396_832"
                        x1="22.3935"
                        y1="19.744"
                        x2="22.4917"
                        y2="15.9953"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop stop-color="#30CFD0" />
                        <stop
                          offset="1"
                          stop-color="#330867"
                          stop-opacity="0.99"
                        />
                      </linearGradient>
                      <linearGradient
                        id="paint3_linear_396_832"
                        x1="26.5"
                        y1="10"
                        x2="26.5"
                        y2="12"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop stop-color="#30CFD0" />
                        <stop
                          offset="1"
                          stop-color="#330867"
                          stop-opacity="0.99"
                        />
                      </linearGradient>
                      <linearGradient
                        id="paint4_linear_396_832"
                        x1="18"
                        y1="10.5"
                        x2="18"
                        y2="12.5"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop stop-color="#30CFD0" />
                        <stop
                          offset="1"
                          stop-color="#330867"
                          stop-opacity="0.99"
                        />
                      </linearGradient>
                    </defs>
                  </svg> My comments
        </button>

    </div>
  </div>
<?php }
echo '</div>';
?>

</div>
<!-- Modal -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <div id="commentsContainer"></div>
    <button class="close-modal-button">Close</button>
  </div>
</div>

<!--end of posts   ....-------------------------------------------------------------------------------------------------------------------------------->
   
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
  $('.show-comments-button').on('click', function() {
    var postID = $(this).data('postid');
    openModal(postID);
  });

  function openModal(postID) {
    $.ajax({
      url: 'comments.php',
      type: 'GET',
      data: { postID: postID }, 
      success: function(response) {
        $('#commentsContainer').html(response);
        $('#myModal').css('display', 'block');
      },
      error: function(xhr, status, error) {
        console.log('Error:', error);
      }
    });
  }

  $('.close-modal-button').on('click', function() {
    closeModal();
  });

  function closeModal() {
    $('#myModal').css('display', 'none');
  }
});

</script>
<script src="profile.js"></script>

</body>
</html>