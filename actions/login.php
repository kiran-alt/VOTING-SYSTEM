<?php
session_start();
if(!isset($_SESSION["pause"]) or !$_SESSION["pause"]){
include("connect.php");
$username=$_POST["username"];
$password=$_POST["password"];
$sql="SELECT * FROM voter_data WHERE username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    $voter_info=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $_SESSION["voter_info"]=$voter_info;
    $sql1="SELECT * FROM contestant_data";
    $result1=mysqli_query($conn,$sql1);
    $contestent_info=mysqli_fetch_all($result1,MYSQLI_ASSOC);
    $_SESSION["c_info"]=$contestent_info;



    echo "<script>alert('logged in successfully');window.location='./partials/vote.php';</script>";
}
}else if(isset($_SESSION["pause"])){
    echo "<script>alert('Poll has been paused!'); window.location='../'</script>";
}


?>