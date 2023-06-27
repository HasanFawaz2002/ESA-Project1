<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .form-control{
            margin:20px 20px 20px 20px;height:20px;padding:20px;
            width: 700px;
        }
        @media screen and (max-width:700px) {

            .form-control{
                width: 400px;
            }
        }
    </style>
    
</head>

<?php include('conn.php'); ?>

<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];

    
                
                
                $q = "SELECT * FROM post WHERE `postID` = '$id' ";

                $result = mysqli_query($conn,$q);

                if(!$result){
                    die("Query Failed");
                }else{
                        $row = mysqli_fetch_assoc($result);
                        $currentPhoto = $row['postImage'];
                        $directory = '../images/';

}
}

?>


<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
if(isset($_POST['update'])){
    
    $postimage = $_POST['postimage'];
    $text = $_POST['text'];

    $q1 = "UPDATE `post` SET `postImage`='../images/$postimage',`Text`='$text' WHERE `postID` = '$id' ";

    $result1 = mysqli_query($conn,$q1);

                if(!$result1){
                    die("Query Failed");
                }else{
                    header("location:http://localhost/ESA/Admin/admin.php?updatemsg= Post Has Been Updated");
                }
                
}
}

?>

<form action="http://localhost/ESA/Admin/editpost.php?id=<?php echo $id ?>" method="post" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
            <center><img style="width:200px ;" src="<?php echo "../images/".$currentPhoto;?>" alt=""></center>
            <div class="form-group">
                <label for="postimage">Post Image</label>
                <input type="file" style="border: transparent;"  name="postimage"  class="form-control">
            </div>
            <div class="form-group">
                <label for="text">Description</label>
                <input type="text" name="text"  class="form-control" value="<?php echo $row['Text']?>">
            </div>
            <center><button type="submit" class="btn btn-success" name="update">Update</button></center>
</form>
<?php $conn->close();?>

<script src=""></script>
</html>

