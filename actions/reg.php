<?php
include("connect.php");

$username=$_POST["username"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$photo=$_FILES["photo"];
$target="../uploads/".$photo["name"];
$tmp_name=$photo["tmp_name"];

if($password==$cpassword){
    //if(mysqli_num_rows($result)==1){
        $name=$photo['name'];
        $sql1="INSERT INTO voter_data(username,password,photo,status) VALUES('$username','$password','$name',0)";
        $result1=mysqli_query($conn,$sql1);
        move_uploaded_file($tmp_name,$target);
        if($result1){
            echo "<script>alert('Registation successfull!');window.location='../';</script>";
        }
        else{
            echo "<script>alert('Registation failed!');window.location='../partials/register.php';</script>";
        }
    //}
}else{
    echo "<script>alert('password does not match');window.location='../partials/register.php';</script>";
}





?>