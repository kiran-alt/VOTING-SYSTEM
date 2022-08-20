<?php
session_start();
if(count($_SESSION["c_info"])>0){
    $_SESSION["publish_result"]=true;
    echo "<script>alert('Result got Published successfully in home page!'); window.location='../partials/admin_panel.php';</script>";
}else{
    echo "<script>alert('To publish result atleast one party should get registered!'); window.location='../partials/admin_panel.php';</script>";
}

?>