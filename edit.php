<?php
include "db.php";
if($_SESSION['type'] != 'admin') die('Invalid');
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
	if(mysql_query("Update `jobcoaches` 
	SET
	`firstname` = '".$_POST['fname']."', 
	`lastname` = '".$_POST['lname']."', 
	`Email` = '".$_POST['email']."',
	`username` = '".$_POST['username']."', 
	`Password` = '".$_POST['password']."'
	WHERE `JobCoachID` = '".$_GET['id']."'")) echo "Updated!";
}

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['hpm']) && isset($_POST['goals'])){
	if(mysql_query("UPDATE `jobcoachsite`.`clients` 
	SET
	`clientfirstname` = '".$_POST['fname']."', 
	`clientlastname` = '".$_POST['lname']."', 
	`monthlyhours` = '".$_POST['hpm']."', 
	`clientgoals` = '".$_POST['goals']."'
	WHERE `ClientID` = '".$_GET['id']."'")) echo "Updated!";
	
}

	//echo "SELECT * FROM ".$_GET['option']." where ".$_GET['key']." = '".$_GET['id']."'";
$q = mysql_query("SELECT * FROM ".$_GET['option']." where ".$_GET['key']." = '".$_GET['id']."'");
$r = mysql_fetch_array($q);

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
<?php
include "menu.php";
?>        

</nav><!--end nav-->      



</aside><!--end aside-->

<div class="content"><!--begin content-->
        
<div class="row">
            <div class="col-md-10 col-md-offset-0">
            <div class="viewlognotesh1">
        <?php
		if($_GET['option'] == 'jobcoaches'){
?>
		<h1>Edit JobCoaches</h1>
           <div class="form-group">
<h4>Edit JobCoach</h4>
<form action=""  role="form" method="post" >
  <div class="form-group">
    <label class="sr-only" for="First Name">First Name</label>
    <input type="text" class="form-control" name = "fname" id="first name" value="<?php echo $r['firstname']; ?>">
  </div><br /><div class="form-group">
	<label class="sr-only" for="Last Name">Last Name</label>
    <input type="text" class="form-control" name = "lname" id="Last name" value="<?php echo $r['lastname']; ?>">
  </div><br /><div class="form-group">
    <label class="sr-only" for="username">Username</label>
    <input type="text" class="form-control" name = "username" id="hpm" value="<?php echo $r['username']; ?>">
	</div><br /><div class="form-group">
	<label class="sr-only" for="email">Email</label>
    <input type="text" class="form-control" name = "email" id="goals" value="<?php echo $r['Email']; ?>">
	</div><br /><div class="form-group">
	<label class="sr-only" for="password">Password</label>
    <input type="text" class="form-control" name = "password" id="goals" value="<?php echo $r['Password']; ?>">
  </div><br />
  <button type="submit" class="btn btn-default">Edit</button>
</form>
    
  </div>
  <?php } ?>
  <?php
		if($_GET['option'] == 'clients'){
?>
   <h1>View Clients</h1>
           <div class="form-group">
<h4>Edit client</h4>
<form action=""  role="form" method="post" >
  <div class="form-group">
    <label class="sr-only" for="First Name">First Name</label>
    <input type="text" class="form-control" name = "fname" id="first name" value="<?php echo $r['clientfirstname']; ?>">
  </div><br /><div class="form-group">
	<label class="sr-only" for="Last Name">Last Name</label>
    <input type="text" class="form-control" name = "lname" id="Last name" value="<?php echo $r['clientlastname']; ?>">
  </div><br /><div class="form-group">
    <label class="sr-only" for="hpm">Hours per month</label>
    <input type="text" class="form-control" name = "hpm" id="hpm" value="<?php echo $r['monthlyhours']; ?>">
	</div><br /><div class="form-group">
	<label class="sr-only" for="goals">Client Goals</label>
    <input type="text" style="font-size:10pt;height:200px" class="form-control" name = "goals" id="goals" value="<?php echo $r['clientgoals']; ?>">
  
  </div><br />
  <button type="submit" class="btn btn-default">Edit</button>
</form>
    
  </div>
  <?php } ?>
  
  
  
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

