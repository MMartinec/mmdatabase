<?php
include "db.php";
if(isset($_POST['thw']) && isset($_POST['location']) && isset($_POST['record']) && isset($_POST['paid']) && isset($_POST['jobprep']) && isset($_POST['jobdev']) && isset($_POST['jobcoach']) && isset($_POST['date']) && isset($_POST['vol']) && isset($_POST['op']) && isset($_POST['stime']) && isset($_POST['etime']) && isset($_POST['notes']) && isset($_POST['client'])){
	
	if(mysql_query("INSERT INTO `jobcoachsite`.`lognotes` 
	(`recordkeeping`, `Paid`, `totalhoursworked`, `Location`, `jobpreparation`, `jobdevelopment`, `jobcoaching`, `lognoteID`, `Date`, `staffstarttime`, `staffendtime`, `activityprogress`, `ClientID`, `JobCoachID`, `Volunteer`, `otherpathway`) VALUES 
	('".$_POST['record']."', '".$_POST['paid']."', '".$_POST['thw']."', '".$_POST['location']."', '".$_POST['jobprep']."', '".$_POST['jobdev']."', '".$_POST['jobcoach']."', NULL, '".$_POST['date']."', '".$_POST['stime']."', '".$_POST['etime']."', '".mysql_escape_string($_POST['notes'])."', '".$_POST['client']."', '".$_SESSION['id']."', '".$_POST['vol']."', '".$_POST['op']."')"))
	echo "Added a new Note";
}
//var_dump($_SESSION);
//echo "SELECT clients.clientfirstname, clients.clientlastname FROM clients, clientscoach, jobcoaches WHERE clientscoach.ClientID = clients.ClientID and clientscoach.JobCoachID =  jobcoaches.JobCoachID AND jobcoaches.username = '".$_SESSION['user']."'";
//die();
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
            <h1>Add Notes</h1>
           <div class="form-group">
  
<form action=""  role="form" method="post" >
  <div class="form-group">
	
	<select class="form-control" name="client">
	<?php
	if($_SESSION['type'] == 'admin') $query = mysql_query("SELECT clients.ClientID, clients.clientfirstname, clients.clientlastname FROM clients, clientscoach, jobcoaches WHERE clientscoach.ClientID = clients.ClientID and clientscoach.JobCoachID =  jobcoaches.JobCoachID");
	
	else
	$query = mysql_query("SELECT clients.ClientID, clients.clientfirstname, clients.clientlastname FROM clients, clientscoach, jobcoaches WHERE clientscoach.ClientID = clients.ClientID and clientscoach.JobCoachID =  jobcoaches.JobCoachID AND jobcoaches.username = '".$_SESSION['user']."'");
	while($row = mysql_fetch_array($query)){
	echo "<option value='".$row['ClientID']."'>".$row['clientfirstname']." ".$row['clientlastname']."</option>";
	}
	?>
	</select>
  <br />
	<label class="sr-only" for="Date">Date</label>
    <input type="text" class="form-control" name = "date" id="date" placeholder="Date (YYYY-MM-DD)">
  
  
  
  <br />
	<label class="sr-only" for="stime">Stime</label>
    <input type="text" class="form-control" name = "stime" id="stime" placeholder="Start Time">
  
  
  <br />
	<label class="sr-only" for="etime">ETime</label>
    <input type="text" class="form-control" name = "etime" id="etime" placeholder="End Time">
  
  <br />
	<label class="sr-only" for="thw">TotalhoursWorked</label>
    <input type="text" class="form-control" name = "thw" id="etime" placeholder="Total Hours Worked">
	
	<br />
	<label class="sr-only" for="location">Location</label>
    <input type="text" class="form-control" name = "location" id="location" placeholder="Location">
  
  <br />
	<label class="sr-only" for="jobprep">JobPrep</label>
    <input type="text" class="form-control" name = "jobprep" id="jobprep" placeholder="Job Preparation">

	<br />
	<label class="sr-only" for="jobdev">JobDev</label>
    <input type="text" class="form-control" name = "jobdev" id="jobdev" placeholder="Job Development">
  
  <br />
	<label class="sr-only" for="jobcoach">JobCoach</label>
    <input type="text" class="form-control" name = "jobcoach" id="jobcoach" placeholder="Job Coaching">

	  <br />
	<label class="sr-only" for="record">Record</label>
    <input type="text" class="form-control" name = "record" id="record" placeholder="Record Keeping">

	  <br />
	<label class="sr-only" for="paid">Paid</label>
    <input type="text" class="form-control" name = "paid" id="Paid" placeholder="Paid">

	<br />
	<label class="sr-only" for="vol">volunteer</label>
    <input type="text" class="form-control" name = "vol" id="vol" placeholder="Volunteer">

	<br />
	<label class="sr-only" for="op">OtherPathway</label>
    <input type="text" class="form-control" name = "op" id="op" placeholder="Other Pathway">

	
  <br />
	<label class="sr-only" for="notes">Notes</label>
    <input type="text" style="font-size:10pt;height:200px" class="form-control" name = "notes" id="notes" placeholder="New Note">
  
  </div><br />
  <button type="submit" class="btn btn-default">Add</button>
</form>
    
  </div>
    </div>
    </div>     
	</div>
    
 <!--Table***************************************************-->

   </div><!--end content-->



<!--end wrapper-->

<!-- javascript -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery-ui-1.11.0.custom/jquery/jquery.js"></script>
    <script src="js/main.js"></script>

</body>
</html>

