<?php
include("../actions/connect.php");
session_start();
$sql1="TRUNCATE TABLE contestant_data";
$result1=mysqli_query($conn,$sql1);


$sql2="SELECT * FROM contestant_data";
$result2=mysqli_query($conn,$sql2);
$c_info=mysqli_fetch_all($result2,MYSQLI_ASSOC);

$_SESSION["c_info"]=$c_info;
$_SESSION["publish_result"]=false;
if($result1 and $result2){
    echo "<script>alert('New poll has been started');window.location='../partials/admin_panel.php';</script>";
}


?>