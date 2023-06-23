<?php
include 'connect.php';
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

  <link rel="stylesheet" href="profile.css" />


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


  <!--Setting main (container of set posts )------------------------------------------------------------------------------------------>
  <div id="Settings-main">

    <!--Qr code button ....-------------------------------------------------------------------------------------------------------------------------------->
    <div class="cover-container">
      <?php
      $userID = 13; // Replace with the actual user ID
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
          $userID = 13; // Replace with the actual user ID
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

    </div>
    <div class="qr-pen">


      <?php
      require 'connect.php';
      require_once 'phpqr/phpqrcode/qrlib.php';

      $path = 'qrcodes/';
      $userID = 13; // The user ID for which you want to generate the QR code
      $qrcode = $path . $userID . '.png';

      // Use MySQLi to retrieve the user's first name and last name
      $query = "SELECT Firstname, Lastname FROM user WHERE UserID = ?";
      $stmt = $con->prepare($query);
      $stmt->bind_param("i", $userID);
      $stmt->execute();
      $result = $stmt->get_result();
      $user = $result->fetch_assoc();
      $stmt->close();

      // Generate the QR code with the user's full name
      $fullName = $user['Firstname'] . ' ' . $user['Lastname'];
      QRcode::png($fullName, $qrcode, 'H', 4, 4);
      ?>


      <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
          <div>
            <nav style="justify-content: center">
              <h1 style="margin-left: 35%">My QR Code</h1>
            </nav>

            <img id="qrImage" src="<?php echo $qrcode; ?>" style="width: fit-content; height: 330px; margin-left: 30%" />
            <h4 style="margin-left: 33%; margin-top: 0%; padding-bottom: 2%">
              Scan me to access my profile easily!
            </h4>
          </div>
        </div>
      </div>

      <div class="qr">
        <button id="qrcode" onclick="document.getElementById('modal01').style.display='block'">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="#05f" d="M4 4h6v6H4V4m16 0v6h-6V4h6m-6 11h2v-2h-2v-2h2v2h2v-2h2v2h-2v2h2v3h-2v2h-2v-2h-3v2h-2v-4h3v-1m2 0v3h2v-3h-2M4 20v-6h6v6H4M6 6v2h2V6H6m10 0v2h2V6h-2M6 16v2h2v-2H6m-2-5h2v2H4v-2m5 0h4v4h-2v-2H9v-2m2-5h2v4h-2V6M2 2v4H0V2a2 2 0 0 1 2-2h4v2H2m20-2a2 2 0 0 1 2 2v4h-2V2h-4V0h4M2 18v4h4v2H2a2 2 0 0 1-2-2v-4h2m20 4v-4h2v4a2 2 0 0 1-2 2h-4v-2h4Z" />
          </svg>
        </button>
      </div>



      <form action="cover-profile.php" method="POST" enctype="multipart/form-data">
        <button class="update-button"><i class="fas fa-pen"></i></button>
        <input type="file" id="cover-photo-input" name="cover_photo" style="display: none;">
        <input type="submit" value="Upload" style="display: none;">
      </form>

      <?php
      include 'connect.php';
      $userId = 13; // Replace with the actual user ID

      // Query to count reports for the specified user
      $sql = "SELECT COUNT(*) AS reportCount FROM reports WHERE userID = $userId";

      $result = $con->query($sql);

      if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $reportCount = $row["reportCount"];
      } else {
        $reportCount = 0;
      }



      // Determine the color class based on the report count
      $colorClass = "";
      if ($reportCount < 2) {
        $colorClass = "green";
      } else if ($reportCount >= 3 && $reportCount <= 4) {
        $colorClass = "yellow";
      } else {
        $colorClass = "red";
      }
      ?>

      <form action="" class="rate">
        <span class="circle <?php echo $colorClass; ?>"></span>
        <span class="circle <?php echo $colorClass; ?>"></span>
        <span class="circle <?php echo $colorClass; ?>"></span>
      </form>

    </div>



    <!--profile /username / button friend list -------------------------------------------------------------------------------------------------------------------->






    <div class="first">
      <h1 id="h1">
        <?php
        $userID = 13; // Replace with the actual user ID
        $sqlSelectUser = "SELECT firstname, lastname FROM user WHERE userID = $userID";
        $result = mysqli_query($con, $sqlSelectUser);
        if ($row = mysqli_fetch_assoc($result)) {
          echo $row['firstname'] . ' ' . $row['lastname'];
        } else {
          echo "User not found";
        }
        ?>
      </h1>



      <!--Rating -------------------------------------------------------------------------------------------------------------------->









      <button id="buttp">Friend List</button>

      <!--Friend List-------------------------------------------------------------------------------------------------------------------->
      <!-- Some HTML code in profile.php -->

      <!-- Some HTML code in profile.php -->
      <?php
      require 'connect.php';
      include 'friends.php';
      ?>

      <div id="modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>

          <ul class="tab-navigation">
            <li class="tab active">Following</li>
            <li class="tab">Followers</li>
          </ul>

          <div class="tab-pane active">
            <?php
            foreach ($followingUsers as $followingUser) {
              $userID = $followingUser['userID'];
              $categoryID = $followingUser['categoryID'];

              // Retrieve user data from the "user" table based on userID
              $userQuery = "SELECT * FROM user WHERE userID = $userID";
              $userResult = mysqli_query($con, $userQuery);
              $userProfile = mysqli_fetch_assoc($userResult);

              // Output the user information
              echo '<div class="user">';
              echo '<div><img class="usericon" src="' . $userProfile['userprofile'] . '"></div>';
              echo '<div class="username">' . $userProfile['Firstname'] . ' ' . $userProfile['Lastname'] . '</div>';
              echo '</div>';
            }
            ?>
          </div>
          <div class="tab-pane">
            <?php
            foreach ($followerUsers as $followerUser) {
              $userID = $followerUser['userID'];

              // Retrieve user data from the "user" table based on userID
              $userQuery = "SELECT * FROM user WHERE userID = $userID";
              $userResult = mysqli_query($con, $userQuery);
              $userProfile = mysqli_fetch_assoc($userResult);

              // Output the user information
              echo '<div class="user">';
              echo '<div ><img class="usericon" src="' . $userProfile['userprofile'] . '"></div>';
              echo '<div class="username">' . $userProfile['Firstname'] . ' ' . $userProfile['Lastname'] . '</div>';
              echo '</div>';
            }
            ?>
          </div>


        </div>
      </div>
    </div>

    <!-- More HTML code in profile.php -->



    <!--bio------------------------------------------------------------------------------------------------------------------->
    <div class="second">
      <?php
      // Assuming you have already established a database connection

      // Retrieve data from the "following" table
      $followingQuery = "SELECT * FROM following";
      $followingResult = mysqli_query($con, $followingQuery);

      // Retrieve data from the "follower" table
      $followerQuery = "SELECT * FROM follower";
      $followerResult = mysqli_query($con, $followerQuery);

      // Retrieve data from the "post" table
      $postQuery = "SELECT * FROM post";
      $postResult = mysqli_query($con, $postQuery);

      // Process the retrieved data
      $followingCount = mysqli_num_rows($followingResult);
      $followerCount = mysqli_num_rows($followerResult);
      $postCount = mysqli_num_rows($postResult);
      ?>

      <p id="follow"><strong id="number"><?php echo $postCount; ?></strong> Posts</p>
      <p id="follow"><strong id="number"><?php echo $followerCount; ?></strong> Followers</p>
      <p id="follow"><strong id="number"><?php echo $followingCount; ?></strong> Following</p>
      <br />


    </div>

    <p id="Bio">
      <?php
      $userID = 13; // Replace with the actual user ID
      $sqlSelectBio = "SELECT bio FROM user WHERE userID = $userID";
      $result = mysqli_query($con, $sqlSelectBio);
      if ($row = mysqli_fetch_assoc($result)) {
        echo $row['bio'];
      } else {
        echo "Bio not available";
      }
      ?>
    </p>


    <div class="tool">
      <div class="leftside">
        <!--lintroooo-------------------------------------------------------------------------------------------------------------------->


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


      <!--1st Post------------------------------------------------------------------------------------------------------------------------------>
      <?php
      include 'displayposts.php';
      echo '<div class="main-posts">';
      foreach ($posts as $post) :
      ?>
        <div class="imgpo" style="display: grid !important;">
          <div class="post-actions">
            <div class="fade-container">
              <button onclick="toggleFade(<?php echo $post['postID']; ?>)" class="fade-button">
                <i class="fas fa-ellipsis-h"></i> <!-- Font Awesome icon for the ellipsis horizontal -->
              </button>
              <div id="fade-options-<?php echo $post['postID']; ?>" class="fade-options">
                <a href="update_post.php?updateid=<?php echo $post['postID']; ?>" class="option-link">
                  <i class="fas fa-edit"></i> <!-- Font Awesome icon for the edit pencil -->
                  Update
                </a>
                <a href="delete_post.php?deleteid=<?php echo $post['postID']; ?>" class="option-link">
                  <i class="fas fa-trash-alt"></i> <!-- Font Awesome icon for the trash bin -->
                  Delete
                </a>
                <a href="report_post.php?reportid=<?php echo $post['postID']; ?>" class="option-link">
                  <i class="fas fa-exclamation-triangle"></i> <!-- Font Awesome icon for the exclamation triangle -->
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
            <div>
              <button id="myButton">
                <svg width="48" height="30" viewBox="0 0 33 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <!-- SVG content -->
                </svg>
                2,1K likes
              </button>
            </div>
            <div>
              <button onclick="openModal()" class="post-custom">
                <svg width="48" height="30" viewBox="0 0 48 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <!-- SVG content -->
                </svg>
                22 comments
              </button>
            </div>
            <div>
              <button>
                <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <!-- SVG content -->
                </svg>
                10 shares
              </button>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <script>
      function toggleFade(postID) {
        var fadeOptions = document.getElementById('fade-options-' + postID);
        fadeOptions.classList.toggle('fade-in');
      }

      function openModal(postID) {
        // Implement your code to open the modal for the specific post
      }
    </script>

    <div id="myModal" class="modal-custom">
      <!-- Modal content -->
      <div class="modal-content-custom">
        <span class="close-custom" onclick="closeModal()">&times;</span>

        <div class="select-container-custom">
          <select id="commentFilter" onchange="filterComments()">
            <option value="all">All Comments</option>
            <option value="latest">Latest Comments</option>
          </select>
        </div>

        <div id="commentsContainer-custom"></div> <!-- Container for comments -->

        <form onsubmit="addComment(event)">
          <div class="user-profile-custom">
            <img src="" alt="User Profile Picture" class="profile-picture-custom">

            <textarea id="commentInput-custom" placeholder="What's on your mind..." required></textarea>

            <button class="emoji-button-custom" type="button" onclick="addEmoji('😃')">😃</button>
            <button class="emoji-button-custom" type="button" onclick="addEmoji('👍')">👍</button>
            <button class="emoji-button-custom" type="button" onclick="addEmoji('❤️')">❤️</button>
            <button class="emoji-button-custom" type="button" onclick="addEmoji('😠')">😠</button> <!-- Angry emoji button -->
          </div>
        </form>
      </div>
    </div>
  </div>


  <script src="profile.js"></script>

</body>

</html>