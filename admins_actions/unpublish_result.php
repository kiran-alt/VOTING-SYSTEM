<?php
session_start();
$_SESSION["publish_result"]=false;
echo "<script>alert('Result got Unpublished successfully!'); window.location='../partials/admin_panel.php';</script>";


?>