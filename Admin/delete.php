<?php include('conn.php'); ?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
?>

<?php 
$q = "DELETE FROM `user` WHERE `userID` = '$id' ";
$result = mysqli_query($conn,$q);


if(!$result){
    die ("Query Faild");
}else{
    header('location:http://localhost/ESA/Admin/admin.php?del=Record Deleted');
}
?>
<?php $conn->close();?>