<?php
require('conn.php');
require('signupQ.php');

        // if ($_POST['firstname'] == "" || $_POST['lastname'] == "") {
        //     echo '<div class="alert alert-danger" role="alert">
        //                 FILL ALL INPUTS!
        //             </div>';}
        // echo isset($errorMessage)?$errorMessage:'' ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">
</head>
<body>

   
    <div id="alert-container" style="top:0%">
        <?php  
    
        echo $lastNameErr;
        echo $passErr;
        echo $emailErr;
        echo $ageErr;
        echo $genderErr; 
        echo $msgErr; 

        ?>
        
    </div>
    <div class="container">
     
        <div class="left-container">
         
            <img src="Connected world.gif" alt="">
        </div>
       
        <div class="middle-container" id="middle">
            <a href="/guest.html"><img src="Property 1=Default.jpg"  class="logo" alt=""></a>
            <form action="signupQ.php" id="signup" method="POST" >
            <h1>Sign Up</h1>
                <table>
                    <tr>
                        <td>
                            <div class="input-box">   
                                <input type="text" name="firstname"  id="fname" Required>
                                <span>First Name</span>
                                <!-- <span class="error">* <php echo $firstNameErr;?></span> -->
                            </div> 
                        </td>
                        
                        <td>
                            <div class="input-box">
                                <input type="text" name="lastname"   id="lname" Required>
                                <span>Last Name</span>
                                <!-- <span class="error">* <php echo $lastNameErr;?></span> -->
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="input-box">
                                <input type="text" name="email"  id="email" Required>
                                <span>Email</span>
                                <!-- <span class="error">* <php echo $emailErr;?></span> -->
                            </td>
                        <td>
                            <div class="input-box">
                                <input type="password" name="password"  id="password" Required>
                                <span>Password</span>
                                <!-- <span class="error">* <php echo $passErr;?></span> -->
                            </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="input-box">
                                <input type="number" name="age" min="1" max="99"    style="width: 40%;" id="age" Required>
                                <span>Age</span>
                                <!-- <span class="error">* <php echo $ageErr;?></span> -->
                            </td>
                        <td>
                            <div class="input-box">
                                <select name="gender" placeholder="Choose Your Gender" id="gender" style="border:1px solid #7a7a7a; color: #7a7a7a;" require>
                                    <option disabled selected>Choose Your Gender</option>                                    
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <!-- <span class="error">* <php echo $genderErr;?></span> -->
                                
                            </div>
                        </td>
                    </tr>
                </table>
                <button type="submit" name="signup" class="signup"  >Sign Up</button>
            </form>
            <div class="bottom-container" style=" margin-top: 2rem;">
                <p style="color:#7a7a7a;">Already have an account  <a href="C:\xampp\htdocs\Project1\NEW LOG IN\login.html" id="login"> Log in</a>
</p>
            </div>
        </div>
      
    </div>
   


    
    <script src="signup.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>