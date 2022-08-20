<?php
include("connect.php");
session_start();


$cid=$_POST["cid"];
$cvotes=$_POST["cvotes"];
$cvotes=$cvotes+1;


$v=$_SESSION["voter_info"];
$vid=$_SESSION["voter_info"]["Id"];


$sql="UPDATE voter_data SET status=1 WHERE Id='$vid'";
$result=mysqli_query($conn,$sql);


$sql1="UPDATE contestant_data SET votes=$cvotes WHERE Id='$cid'";
$result1=mysqli_query($conn,$sql1);


if($result and $result1){

    $sql2="SELECT * FROM contestant_data";
    $result2=mysqli_query($conn,$sql2);
    $updated_c_info=mysqli_fetch_all($result2,MYSQLI_ASSOC);

    $sql3="SELECT * FROM voter_data WHERE Id='$vid'";
    $result3=mysqli_query($conn,$sql3);
    $updated_voter_info=mysqli_fetch_array($result3,MYSQLI_ASSOC);

    $_SESSION['voter_info']=$updated_voter_info;
    $_SESSION['c_info']=$updated_c_info;

    echo "<script>alert('Voted successfully!');window.location='../partials/vote.php';</script>";

}else{
    echo "<script>alert('Facing technical issue!! try after some time!');window.location='../partials/vote.php';</script>";

}



?>