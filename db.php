<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['user'])) header('location: ./');
mysql_connect("localhost", "root", "testpass");
mysql_select_db("jobcoachsite");
?>