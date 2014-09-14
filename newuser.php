<?php
include "db.php";
if(isset($_POST['user']) && isset($_POST['pass'])){
//var_dump($_POST); die();
	if(mysql_query("INSERT INTO `login` (`username`, `password`, `type`) VALUES ('".$_POST['user']."', '".$_POST['pass']."', 'jobcoach')")) header('location: ./');
	else echo "Username exists!";
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

<nav><!--begin nav-->

  <ul>
  <!--<button type="button" class="btn btn-primary btn-xs">Extra small button</button>-->
  
</ul> 
             

</nav><!--end nav-->      



</aside><!--end aside-->

<div class="content"><!--begin content-->
<div class="row">
            <div class="col-md-8 col-md-offset-3">
              <div class="loginform">
              <h1>Sign-Up</h1> 
                <form action = "" class="form-inline" role="form" method = "POST">
  <div class="form-group">
    <label class="sr-only" for="First Name">User Name</label>
    <input type="text" class="form-control" name="user" id="first name" placeholder="User Name">
  </div>
  
  <div class="form-group">
    <label class="sr-only" for="input password">Password</label>
    <input type="password" class="form-control" name="pass" id="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Register</button>
</form>
<div class="forgot">
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

