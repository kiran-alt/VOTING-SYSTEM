<?php

$username=$_POST['username'];
$password=$_POST['password'];
if($username=="admin" and $password=="admin"){
    session_start();
    $_SESSION["admin_log"]=true;
    echo "<script>window.location='../partials/admin_panel.php';</script>";
}
else{
    echo "<script>alert('wrong crediantials!');window.location='../partials/admin.php';</script>";
}



?>