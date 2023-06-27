<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="admin.css">
    <style>
    
        @media screen and (max-width:567px) {
    
    .user-list-items{
        padding-left: 0;
    }
    }
    </style>
</head>
<?php include("conn.php");
session_start();
if(isset($_SESSION['role'])){
    $role = $_SESSION['role'];
}else{
    header("location:http://localhost/ESA/login.php");
}
if($role == 0){

}else{
    header("location:http://localhost/ESA/login.php");
}
if(isset($_SESSION['name'])){
    $name = $_SESSION['name'];
}
?>
<body>
    <div class="grid-container">
        <!--Header-->
        <div class="header">
            <div class="menu-icon" onclick="openSidebar()">
                <i class='bx bx-menu'></i>
            </div>
            <div class="header-left">
                <h2>Hello <?php echo $name ?></h2>
            </div>
            
        </div>
        <!--End Of Header-->

        <!--Sidebar-->
        <aside id="sidebar" style="z-index: 1;">
            <div class="sidebar-title">
                <img src="Property_1_Default-removebg-preview.png" alt="" style="width: 80px;border-radius:50%"><h1>Hangout</h1>
                <i class='bx bx-x' onclick="closeSidebar()"></i>
            </div>
            <ul class="sidebar-list">
                <li class="sidebar-list-item" id="1">
                    <a href="#" style="color:white ;"><i class='bx bxs-dashboard' ></i>Dashboard</a>
                </li>
                <li class="sidebar-list-item" id="2">
                    <a href="#" style="color:white ;"><i class='bx bxs-dashboard' ></i>User List</a>
                </li>
                <li class="sidebar-list-item" id="3">
                    <a href="#" style="color:white ;"><i class='bx bxs-dashboard' ></i>Post List</a>
                </li>
                <a style="text-decoration: none;color:white" href="http://localhost/ESA/logout.php"> <li class="sidebar-list-item" id="4">
                   <i class='bx bxs-dashboard' ></i>Log Out
                </li></a>
                <!--
                <li class="sidebar-list-item">
                    <div class="dropdown">
                        <button onclick="toggleDropdown()" class="dropbtn"><i class='bx bxs-dashboard' ></i>Causes</button>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="#">Option 1</a>
                            <a href="#">Option 2</a>
                            <a href="#">Option 3</a>
                        </div>
                    </div>
                </li>
                -->
                
            </ul>
        </aside>
        <!--End Of Sidebar-->

        <!--Main-->
        <main class="main-container" id="main">
            <div class="main-title">
                <h2>DASHBOARD</h2>
            </div>
            <div class="main-cards">
                <div class="card">
                    <div class="card-inner">
                        <h2>LIKES</h2>
                        <i class='bx bx-like'></i>
                    </div>
                    <h1>4,021</h1>
                </div>

                <div class="card">
                    <?php
                    $q3 = 'SELECT COUNT(*) AS users FROM user';
                    $result3 = mysqli_query($conn, $q3);
                    $row3 = mysqli_fetch_assoc($result3);
                    ?>
                    <div class="card-inner">
                        <h2>Users</h2>
                        <i class='bx bx-user'></i>
                    </div>
                    <h1><?php echo $row3['users']?></h1>
                </div>
                
                <div class="card">
                <?php
                    $q4 = 'SELECT COUNT(*) AS posts FROM post';
                    $result4 = mysqli_query($conn, $q4);
                    $row4 = mysqli_fetch_assoc($result4);
                    ?>
                    <div class="card-inner">
                        <h2>Posts</h2>
                        <i class='bx bx-book-content'></i>
                    </div>
                    <h1><?php echo $row4['posts'] ?></h1>
                </div>

                <div class="card">
                <?php
                    $q5 = 'SELECT COUNT(*) AS comments FROM comments';
                    $result5 = mysqli_query($conn, $q5);
                    $row5 = mysqli_fetch_assoc($result5);
                    ?>
                    <div class="card-inner">
                        <h2>Comments</h2>
                        <i class='bx bx-chat'></i>
                    </div>
                    <h1><?php echo $row5['comments'] ?></h1>
                </div>
            </div>
            <?php 
            if(isset($_GET['del'])){
                echo ("<h3 style='text-align: center;color: red;'>".$_GET['del']."</h3>");
            }
            ?>
            <?php 
            if(isset($_GET['updatemsg'])){
                echo ("<h3 style='text-align: center;color: red;'>".$_GET['updatemsg']."</h3>");
            }
            ?>
        </main>
        
        <!--End Of Main-->

        <!-- User List-->
        <div class="user-list" id="user">
            <div class="user-list-title">
                <h2>USERS</h2>
                <div>
                    <i class='bx bx-search'></i>
                    <input type="text" name="" id="search" placeholder="Search By Name">
                </div>
            </div>
            <ul class="user-list-items">
                <?php
                $q = "select * from user where role = 1";
                $result = mysqli_query($conn,$q);
                if(!$result){
                    die("Query Failed");
                }else{
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <li class="user-list-item">
                            <div class="user-profile">
                            <img src='<?php echo "../images/".$row['userprofile']?>' style="width:70px ;object-fit: cover;" border="0">
                            <div class="user-id">
                                <p>User-id:<?php echo $row['userID'];?></p>
                                <p>Name:<?php echo $row['Firstname']." ".$row['Lastname'];?></p>
                                <p>email:<?php echo $row['Email'];?></p>
                            </div>
                            </div>
                            <div>
                                <a href="http://localhost/ESA/Admin/edit.php?id=<?php echo$row['userID']; ?>"><button class="editBtn" name="edit">Edit</button></a>
                                <a href="http://localhost/ESA/Admin/delete.php?id=<?php echo$row['userID']; ?>"><button class="deleteBtn">Delete</button></a>
                            </div>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
        <!--END OF USER LIST-->

        <!--POST LIST-->
        <div class="post-list" id="post">
            <h2>POSTS</h2>
            <div class="post-list-items">
                <?php
                $q = "SELECT p.`postID`, p.`userID`, p.`Text`, u.`Firstname`,u.`Lastname`,p.`postImage`,p.`report`\n"
                . "FROM `post` p\n"
                . "JOIN `user` u ON u.`userID` = p.`userID`";
                $result = mysqli_query($conn,$q);
                
                if(!$result){
                    die("Query Failed");
                }else{
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                <div class="post-list-item">
                    <div class="post-details">
                    <img style="object-fit: cover;" src='<?php echo "../images/".$row['postImage']?>'  border="0">
                        <p>Post-iD: <?php echo $row['postID'];?></p>
                        <h3>User: <?php echo $row['Firstname']." ".$row['Lastname']?></h3>
                        <p>Description: <?php echo $row['Text'];?></p>
                        <p>Reports: <?php echo $row['report'];?></p>
                    </div>
                    <div class="post-btn">
                        <a href="http://localhost/ESA/Admin/editpost.php?id=<?php echo$row['postID']; ?>"><button class="btn btn-success">EDIT</button></a>
                        <a href="http://localhost/ESA/Admin/deletepost.php?id=<?php echo$row['postID']; ?>"><button class="btn btn-danger">DELETE</button></a>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
        <!--END OF POST LIST-->

    </div>

    <?php $conn->close();?>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="admin5.js"></script>
</body>
</html>