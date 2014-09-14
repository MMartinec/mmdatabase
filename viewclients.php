<?php 
include "db.php";
if($_SESSION['type'] != 'admin') die('Invalid');

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['hpm']) && isset($_POST['goals'])){
	$q = "INSERT INTO clients (clientfirstname, clientlastname, monthlyhours, clientgoals) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['hpm']."', '".$_POST['goals']."')";
  //echo $q;
  mysql_query($q);

  // echo "Added a new Client";
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
            <div class="col-md-10 col-md-offset-0">
            <div class="viewlognotesh1">
            <h1>View Clients</h1>
           <div class="form-group">
<h4>Add new client</h4>
<form action="?"  role="form" method="post">
  <div class="form-group">
    <label class="sr-only" for="First Name">First Name</label>
    <input type="text" class="form-control" name="fname" id="first name" placeholder="First Name">
  </div><br /><div class="form-group">
	<label class="sr-only" for="Last Name">Last Name</label>
    <input type="text" class="form-control" name="lname" id="Last name" placeholder="Last Name">
  </div><br /><div class="form-group">
    <label class="sr-only" for="hpm">Hours per month</label>
    <input type="text" class="form-control" name="hpm" id="hpm" placeholder="Hours per month">
	</div><br /><div class="form-group">
	<label class="sr-only" for="goals">Client Goals</label>
    <input type="text" style="font-size:10pt;height:200px" class="form-control" name="goals" id="goals" placeholder="Client Goals">
  
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
      <th align="center">Hours per Month</th>
      <th align="center">Client Goals</th>
      <th align="center"><span class="glyphicon glyphicon-edit"></span></th>
      <th align="center"><span class="glyphicon glyphicon-remove"></span></th>
   </tr>
    <?php
	$query = mysql_query("SELECT * FROM clients");
	while($row = mysql_fetch_array($query)){
	echo "<tr>
      <td align='left'>".$row['clientfirstname']."</td>
      <td align='left'>".$row['clientlastname']."</td>
      <td align='left'>".$row['monthlyhours']."</td>
      <td align='left'>".$row['clientgoals']."</td>
      <td><a href = 'edit.php?key=ClientID&option=clients&id=".$row['ClientID']."'>Edit</a></td>
      <td><a href = 'delete.php?key=ClientID&option=clients&id=".$row['ClientID']."'>Delete</a></td>
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

