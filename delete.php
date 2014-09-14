<?php
include "db.php";
if($_SESSION['type'] != 'admin') die('Invalid');
mysql_query("DELETE FROM clientscoach WHERE ".$_GET['key']." = '".$_GET['id']."'");
mysql_query("DELETE FROM ".$_GET['option']." WHERE ".$_GET['key']." = '".$_GET['id']."'");
header('location:view'.$_GET['option'].'.php')
?>