<?php
include "db.php";
if(!isset($_SESSION[user])) header('location: userlogin.php');
?>