<?php
include "db.php";

if(isset($_GET['option']) && ($_GET['option'] == 'delete')){
	mysql_query("DELETE FROM `clientscoach` WHERE `clientscoach`.`ClientID` = '".$_GET['ClientID']."' AND `clientscoach`.`JobCoachID` = '".$_GET['JobCoachID']."'");
}

if(isset($_POST['jobCoach']) && isset($_POST['client'])){
//var_dump($_POST); die();
	if(mysql_query("INSERT INTO `clientscoach` (`ClientID`, `JobCoachID`) VALUES ('".$_POST['client']."', '".$_POST['jobCoach']."')")) echo "";
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
            <h1>View JobCoaches</h1>
           <div class="form-group">
<h4>Add new JobCoach</h4>
<form action="assignJobCoach.php"  role="form" method="post" >
  <div class="form-group">
	<h5>Job Coach</h5> <select class="form-control" name="jobCoach">
	<?php
	$query = mysql_query("SELECT * FROM jobcoaches");
	while($row = mysql_fetch_array($query)){
	echo "<option value='".$row['JobCoachID']."'>".$row['username']."</option>";
	}
	?>
	</select>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<h5>Clients</h5><select class="form-control" name="client">
	<?php
	$query = mysql_query("SELECT * FROM clients");
	while($row = mysql_fetch_array($query)){
	echo "<option value='".$row['ClientID']."'>".$row['clientfirstname']." ".$row['clientlastname']."</option>";
	}
	?>
	</select>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
  <button type="submit" class="btn btn-default">Assign</button>
</form>
    
  </div>
    </div>
    </div>     
	</div>
    
 <!--Table***************************************************-->
 <div class="viewlognotestable">

 <table data-role="table" data-mode="columntoggle" class="table table-striped" id="myTable">
  <thead>
  <col width="250">
  <col width="250">
  <col width="50">
  
    
  </thead>
  <tbody>
  <tr>
      <th align="center">Job Coach</th>
      <th align="center">Client</th>
      <th align="center"><span class="glyphicon glyphicon-remove"></span></th>
   </tr>
    <?php
	$query = mysql_query("SELECT clientscoach.ClientID, clientscoach.JobCoachID, clients.clientfirstname, clients.clientlastname, jobcoaches.username FROM clients, jobcoaches, clientscoach WHERE clientscoach.ClientID = clients.ClientID AND jobcoaches.JobCoachID = clientscoach.JobCoachID");
	while($row = mysql_fetch_array($query)){
	echo "<tr>
      <td align='left'>".$row['username']."</td>
      <td align='left'>".$row['clientfirstname']." ".$row['clientlastname']."</td>
      <td><a href = 'assignJobCoach.php?option=delete&ClientID=".$row['ClientID']."&JobCoachID=".$row['JobCoachID']."'>Delete</a></td>
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

