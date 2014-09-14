<?php
error_reporting(0);
session_start();
//if()
mysql_connect("localhost", "root", "testpass");
mysql_select_db("jobcoachsite");
?><?php
//include "db.php";
if(isset($_POST['user']) && isset($_POST['pass'])){
	$q = mysql_query("SELECT * FROM `login` where username = '".$_POST['user']."' AND password = '".$_POST['pass']."'");
	if(mysql_num_rows($q) == 1){
		$r = mysql_fetch_array($q);
		$_SESSION['user'] = $r['username'];
		$_SESSION['type'] = $r['type'];
		$_SESSION['id'] = '1';
		header('location: adminhome.php');
	}
	else {
		$q = mysql_query("SELECT * FROM `jobcoaches` where username = '".$_POST['user']."' AND Password = '".$_POST['pass']."'");
		//echo "SELECT * FROM `jobcoaches` where username = '".$_POST['user']."' AND Password = '".$_POST['pass']."'"; die();
		if(mysql_num_rows($q) == 1){
		$r = mysql_fetch_array($q);
		//var_dump($r); die();
		$_SESSION['user'] = $r['username'];
		$_SESSION['type'] = 'jobcoach';
		$_SESSION['id'] = $r['JobCoachID'];
		header('location: adminhome.php');
		}
		else $p = "Invalid Username And/Or Password";
	}
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Other Pathway</title>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/jobcoachcustom.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="wrapper"><!--begin wrapper-->


<div class="header"><!--begin header-->
  
 
</div><!--end header-->



<aside><!--begin aside-->
<img src="img/otherPathwaysLogodifferentcolors.jpg" width="238" height="197" alt="Other Pathway">
some link to a main website
<nav><!--begin nav-->

  <ul>
</ul> 
             

</nav><!--end nav-->      



</aside><!--end aside-->

<div class="content"><!--begin content-->
<div class="row">
            <div class="col-md-8 col-md-offset-3">
              <div class="loginform">
              <h1>Login</h1> <?php echo $p; ?>
<form action="" class="form-inline" role="form" method="post" >
  <div class="form-group">
    <label class="sr-only" for="First Name">User Name</label>
    <input type="text" class="form-control" name = "user" id="first name" placeholder="User Name">
  </div>
  
  <div class="form-group">
    <label class="sr-only" for="input password">Password</label>
    <input type="password" class="form-control" name = "pass" id="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Sign in</button>
</form>
<div class="forgot">
<p><!--<a href="loginpage.html">Forgot user name or password?</a> &nbsp;&nbsp;|&nbsp;&nbsp;<a href="newuser.php">New User</a>--></p>
</div>
    </div>
            </div>

   </div><!--end content-->



<!--end wrapper-->

<!-- javascript -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery-ui-1.11.0.custom/jquery/jquery.js"></script>
    <script src="js/main.js"></script>

</body>
</html>

