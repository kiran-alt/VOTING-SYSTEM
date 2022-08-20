<?php

session_start();
$_SESSION["pause"]=true;
echo "<script>alert('Poll got paused successfully!');window.location='../partials/admin_panel.php';</script>";




?>