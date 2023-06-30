<?php include("conn.php")?>
<?php session_start() ?>
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
    <link rel="stylesheet" href="signup.css">
</head>
<body>

<?php

$firstnameerror="";
$lastnameerror="";
$emailerror="";
$passworderror="";
$ageerror="";
$gendererror="";
// Check if the form is submitted
if (isset($_POST['signup'])) {
    
    if (empty($_POST["firstname"])) {
        $firstnameerror = "First Name is required.";
    }
    if (empty($_POST["lastname"])) {
        $lastnameerror = "Last Name is required.";
    } 
    if (empty($_POST["email"])) {
        $emailerror = "Email is required.";
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailerror = "Invalid email format.";
    }
    if (empty($_POST["password"])) {
        $passworderror = "Password is required.";
    } 
    if (empty($_POST["age"])) {
        $ageerror = "Age is required.";
    } elseif (!is_numeric($_POST["age"])) {
        $ageerror = "Age must be a number.";
    } 
    if ($_POST["gender"] == "Choose Your Gender") {
        $gendererror = "Please select your gender.";
    } else {
        // Check if the email already exists in the database
        $email = $_POST['email'];
        $query = "SELECT * FROM user WHERE Email = '$email'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $emailerror = "Email already exists.";
        }
    } 
    if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["age"]) && $_POST["gender"] != "Choose Your Gender" && mysqli_num_rows($result) === 0){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $q = "INSERT INTO user ( `Firstname`, `Lastname`, `Email`, `Password`, `Age`,`Gender`) VALUES ( '$firstname', '$lastname', '$email', '$password', $age, '$gender')";
    $result=mysqli_query($conn,$q);
    if($result){
        $q1 = "SELECT `userID` FROM `user` WHERE `Email`='$email' ";
        $result1=mysqli_query($conn,$q1);
        $row = mysqli_fetch_assoc($result1);
        $_SESSION['userID'] = $row['userID'];
        header("location:user.php");
    }
    }
}
?>

    <div id="alert-container" style="top:0%; "></div> 
    <div class="container">
        <div class="left-container">
            <img src="images/Connected world.gif" alt="">
        </div>
        <div class="middle-container" id="middle">
            <a href="/guest.html"><img src="images/Property 1=Default.jpg"  class="logo" alt=""></a>
            <form action="" method="post">
                <h1>Sign Up</h1>
                <table>
                    <tr>
                        <td>
                            <?php echo "<span style='color:red'>$firstnameerror</span>" ?>
                            <input type="text" name="firstname"  placeholder="First Name" id="fname">
                        </td>
                        <td>
                            <?php echo "<span style='color:red'>$lastnameerror</span>" ?>
                            <input type="text" name="lastname"  placeholder="Last Name" id="lname">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo "<span style='color:red'>$emailerror</span>"  ?>
                            <input type="email" name="email"  placeholder="Email" id="email">
                        </td>
                        <td>
                            <?php echo "<span style='color:red'>$passworderror</span>" ?>
                            <input type="password" name="password"  placeholder="Password" id="password">
                        </td>
                    </tr>
                    <tr>
                        <td style="display:grid ;">
                            <?php echo "<span style='color:red'>$ageerror</span>" ?>
                            <input type="number" name="age"   placeholder="Age" style="width: 20%;" id="age">
                        </td>
                        <td>
                            <?php echo "<span style='color:red'>$gendererror</span>" ?>
                            <select name="gender" id="gender">
                                <option>Choose Your Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <button type="submit" class="signup" name="signup" id="signupbtn">Sign Up</button>
            </form>
            <div class="bottom-container" style=" margin-top: 2rem;">
                <p style="color: #0055FF;">Already have an account</p>
                <a href="login.php"><button class="bottom-button" id="login">Log in</button></a>
            </div>
        </div>
    </div>
    

    


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
