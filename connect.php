<?php

$con =new  mysqli('localhost', 'root', '' , 'hangout');

if(!$con){
    die(mysqli_error($con));

}


/*if($con){
    echo("connection succesfully");

}
else {
die(mysqli_error($con));
} */ 
?>