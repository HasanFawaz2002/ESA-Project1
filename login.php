<?php include("conn.php");?>
<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<?php
$emailerror = "";
$passorderror = "";
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    // Retrieve the submitted email and password
    $email = $_POST["email"];
    $password = $_POST["password"];
    

    // Validate the email and password fields
    
    if (empty($email)) {
        $emailerror = "Email is required.";
    }
    if (empty($password)) {
        $passorderror = "Password is required.";
    } 
    if(!empty($email) && !empty($password)){
        $query = "SELECT * FROM `user` WHERE `Email`='$email' AND `Password`='$password'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) === 1 && $row['role'] == 0) {
            $_SESSION['role']=$row['role'];
            $_SESSION['name']=$row['Firstname'];
            header("location:http://localhost/ESA/Admin/admin.php");
        } else if(mysqli_num_rows($result) === 1 && $row['role'] == 1){
            $_SESSION['role']=$row['role'];
            $_SESSION['userID']=$row['userID'];
            header("location:user.php");
        }else{
            $error = 'Invalid Email or Password';
        }
    }
}
?>
<body>
    <a href="/guest.html"><img src="/images/Property_1_Default-removebg-preview.png" class="logo" alt=""></a>
    <div class="container">
        <div class="left-container">
            <img src="images/Connected world.gif" alt="">
        </div>
        
        <div class="right-container" id="right">
            <form action="" method="post">
                <h1>Log in</h1>
                <?php echo "<span style='color:red'>$error</span>" ?>
                <table>
                    <tr>
                        <td style="display:grid ;">
                            <input type="email" name="email" placeholder="Email" style="width:200px ;">
                            <?php echo "<span style='color:red'>$emailerror</span>" ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="display:grid ;">
                            <input type="password" name="password" placeholder="Password" style="width:200px ;">
                            <?php echo "<span style='color:red'>$passorderror</span>" ?>
                        </td>
                    </tr>
                </table>
                <button type="submit" name="login" class="login" id="loginbtn">Log in</button>
            </form>
            <div class="bottom-container" style="margin-top: 2rem;">
                <p style="color: #0055FF;">Don't have an account?</p>
                <a href="signup.php" style="text-decoration: none;"><button id="signupbtn" class="bottom-button">Sign up</button></a>
            </div>
        </div>
    </div>

    <div id="alert-container"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
