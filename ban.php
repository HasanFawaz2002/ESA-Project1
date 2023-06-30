<?php
include('conn.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$q = "UPDATE `user` SET `status` = 'ban' WHERE `user`.`userID` = $id";
$result = mysqli_query($conn,$q);
if(!$result){
    die ("Query Faild");
}else{
    header('location:http://localhost/ESA/Admin/admin.php?ban=Record Banned');
}
?>