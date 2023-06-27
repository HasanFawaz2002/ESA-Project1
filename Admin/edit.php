<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>

<?php include('conn.php'); ?>

<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];

    
                
                
                $q = "SELECT * FROM user WHERE `userID` = '$id' ";

                $result = mysqli_query($conn,$q);

                if(!$result){
                    die("Query Failed");
                }else{
                        $row = mysqli_fetch_assoc($result);
}
}

?>


<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
if(isset($_POST['update'])){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];

    $q1 = "UPDATE `user` SET `Firstname`='$fname',`Lastname`='$lname',`Email`='$email' WHERE `userID` = '$id' ";

    $result1 = mysqli_query($conn,$q1);

                if(!$result1){
                    die("Query Failed");
                }else{
                    header("location:http://localhost/ESA/Admin/admin.php?updatemsg=Your Record Has Been Updated");
                }
}
}

?>

<form action="http://localhost/ESA/Admin/edit.php?id=<?php echo $id ?>" method="post" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
<div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" style="width: 300px;margin:20px 20px 20px 20px;height:30px;padding:20px;border:1px solid black;" class="form-control" value="<?php echo $row['Firstname']?>">
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" style="width: 300px;margin:20px 20px 20px 20px;height:30px;padding:20px;border:1px solid black;" class="form-control" value="<?php echo $row['Lastname']?>">
            </div>
            <div class="form-group">
                <label for="age">email</label>
                <input type="text" name="email" style="width: 300px;margin:20px 20px 20px 20px;height:30px;padding:20px;border:1px solid black;" class="form-control" value="<?php echo $row['Email']?>">
            </div>
            <button type="submit" class="btn btn-success" name="update">Update</button>
</form>
<?php $conn->close();?>

</html>


