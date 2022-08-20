<?php

session_start();
$_SESSION["pause"]=false;
echo "<script>alert('Poll got resumed successfully!');window.location='../partials/admin_panel.php';</script>";




?>