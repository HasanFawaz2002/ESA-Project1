<?php include("conn.php")?>
<?php

session_start();
if(isset($_SESSION['role'])){
    $role = $_SESSION['role'];
}
if(isset($_SESSION['userID'])){
    $id = $_SESSION['userID'];
}
echo @$role;
echo $id;

?>