<?php include "db.php";
if($_SESSION['type'] != 'admin') die('Invalid'); ?>
<?php


if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
	if(mysql_query("INSERT INTO `jobcoaches` (`JobCoachID`, `firstname`, `lastname`, `Email`, `username`, `Password`) VALUES (NULL, '".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['email']."', '".$_POST['username']."', '".$_POST['password']."')")) echo "";
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
<?php
include "menu.php";
?>        

</nav><!--end nav-->      



</aside><!--end aside-->

<div class="content"><!--begin content-->

<div class="row">
            <div class="col-md-8 col-md-offset-1">
            <div class="viewlognotesh1">
            <h1>View Job Coaches</h1>
           <div class="form-group">
<h4>Add New Job Coach</h4>
<form action=""  role="form" method="post" >
  <div class="form-group">
    <label class="sr-only" for="First Name">First Name</label>
    <input type="text" class="form-control" name = "fname" id="first name" placeholder="First Name">
  </div><br /><div class="form-group">
	<label class="sr-only" for="Last Name">Last Name</label>
    <input type="text" class="form-control" name = "lname" id="Last name" placeholder="Last Name">
  </div><br /><div class="form-group">
    <label class="sr-only" for="username">Username</label>
    <input type="text" class="form-control" name = "username" id="hpm" placeholder="Username">
	</div><br /><div class="form-group">
	<label class="sr-only" for="email">Email</label>
    <input type="text" class="form-control" name = "email" id="goals" placeholder="Email">
	</div><br /><div class="form-group">
	<label class="sr-only" for="password">Password</label>
    <input type="password" class="form-control" name = "password" id="goals" placeholder="Password">
  </div><br />
  <button type="submit" class="btn btn-default">Add</button>
</form>
    
  </div>
    </div>
    </div>     
	</div>
    
 <!--Table***************************************************-->
 <div class="viewlognotestable">
  
 <table data-role="table" data-mode="columntoggle" class="table table-striped" id="myTable">
  <thead>
  <col width="90">
  <col width="90">
  <col width="50">
  <col width="250">
  <col width="50">
  <col width="50">
  
    
  </thead>
  <tbody>
  <tr>
      <th align="center">First Name</th>
      <th align="center">Last Name</th>
      <th align="center">Username</th>
      <th align="center">Email</th>
      <th align="center"><span class="glyphicon glyphicon-edit"></span></th>
      <th align="center"><span class="glyphicon glyphicon-remove"></span></th>
   </tr>
    <?php
	$query = mysql_query("SELECT * FROM jobcoaches");
	while($row = mysql_fetch_array($query)){
	echo "<tr>
      <td align='left'>".$row['firstname']."</td>
      <td align='left'>".$row['lastname']."</td>
      <td align='left'>".$row['username']."</td>
      <td align='left'>".$row['Email']."</td>
      <td><a href = 'edit.php?key=JobCoachID&option=jobcoaches&id=".$row['JobCoachID']."'>Edit</a></td>
      <td><a href = 'delete.php?key=JobCoachID&option=jobcoaches&id=".$row['JobCoachID']."'>Delete</a></td>
    </tr>";
	}
	?>
 
  </tbody>
</table>
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

