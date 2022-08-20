<?php
include("../actions/connect.php");
session_start();
$sql="UPDATE voter_data SET status=0 WHERE id>0";
$result=mysqli_query($conn,$sql);
$sql1="UPDATE contestant_data SET votes=0 WHERE id>0";
$result1=mysqli_query($conn,$sql1);
$sql2="SELECT * FROM contestant_data";
$result2=mysqli_query($conn,$sql2);
$c_info=mysqli_fetch_all($result2,MYSQLI_ASSOC);
$_SESSION["c_info"]=$c_info;
echo "<script>alert('Repoll has been started!'); window.location='../partials/admin_panel.php';</script>";
?>