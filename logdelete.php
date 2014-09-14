<?php
include "db.php";
if($_SESSION['type'] != 'admin') die('Invalid');
//echo "DELETE FROM lognotes WHERE lognoteID = '".$_GET['id']."'"; die();
if(isset($_GET['id'])) mysql_query("DELETE FROM lognotes WHERE lognoteID = '".$_GET['id']."'");
header('location: adminhome.php');
?>