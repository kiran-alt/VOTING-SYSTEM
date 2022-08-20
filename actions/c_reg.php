<?php

include("connect.php");

$username=$_POST["username"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$photo=$_FILES["photo"];
$tmp_name=$photo["tmp_name"];
$target="../uploads/".$photo["name"];


if($password==$cpassword){
    $pic=$photo["name"];
    $sql="INSERT INTO contestant_data(username,password,photo,votes) VALUES('$username','$password','$pic',0)";
    $result=mysqli_query($conn,$sql);
    move_uploaded_file($tmp_name,$target);
    if($result){
        echo "<script>alert('Registation successfull!');window.location='../';</script>";
    }
    else{
        echo "<script>alert('registation unsuccessfull!');window.location='../';</script>";
    }
}else{
    echo "<script>alert('passwords does not match!');window.location='../'</script>";
}





?>