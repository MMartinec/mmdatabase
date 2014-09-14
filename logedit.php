<?php
include "db.php";
if($_SESSION['type'] != 'admin') die('Invalid');

if(isset($_POST['thw']) && isset($_POST['location']) && isset($_POST['record']) && isset($_POST['paid']) && isset($_POST['jobprep']) && isset($_POST['jobdev']) && isset($_POST['jobcoach']) && isset($_POST['date']) && isset($_POST['vol']) && isset($_POST['op']) && isset($_POST['stime']) && isset($_POST['etime']) && isset($_POST['notes']) && isset($_POST['client'])){
/*echo "Update `jobcoachsite`.`lognotes` 
	SET
	`recordkeeping` = '".$_POST['record']."',
	`Paid` = '".$_POST['paid']."', 
	`totalhoursworked` = '".$_POST['thw']."',
	`Location` = '".$_POST['location']."',
	`jobpreparation` = '".$_POST['jobprep']."',
	`jobdevelopment` = '".$_POST['jobdev']."',
	`jobcoaching` = '".$_POST['jobcoach']."',
	`Date` = '".$_POST['date']."',
	`staffstarttime` = '".$_POST['stime']."',
	`staffendtime` = '".$_POST['etime']."',
	`activityprogress`= '".mysql_escape_string($_POST['notes'])."',
	`ClientID`  = '".$_POST['client']."',
	`Volunteer` = '".$_POST['vol']."',
	`otherpathway` = '".$_POST['op']."',
	`JobCoachID`= '".$_SESSION['id']."' WHERE `lognoteID` = '".$_GET['id']."'"; die();

*/
	if(mysql_query("Update `jobcoachsite`.`lognotes` 
	SET
	`recordkeeping` = '".$_POST['record']."',
	`Paid` = '".$_POST['paid']."', 
	`totalhoursworked` = '".$_POST['thw']."',
	`Location` = '".$_POST['location']."',
	`jobpreparation` = '".$_POST['jobprep']."',
	`jobdevelopment` = '".$_POST['jobdev']."',
	`jobcoaching` = '".$_POST['jobcoach']."',
	`Date` = '".$_POST['date']."',
	`staffstarttime` = '".$_POST['stime']."',
	`staffendtime` = '".$_POST['etime']."',
	`activityprogress`= '".mysql_escape_string($_POST['notes'])."',
	`ClientID`  = '".$_POST['client']."',
	`Volunteer` = '".$_POST['vol']."',
	`otherpathway` = '".$_POST['op']."',
	`JobCoachID`= '".$_SESSION['id']."' WHERE `lognoteID` = '".$_GET['id']."'")) echo "Updated";
}

$query = mysql_query("SELECT * FROM `lognotes` WHERE `lognoteID` = '".$_GET['id']."'");
$row = mysql_fetch_array($query);
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
	
	$query1 = mysql_query("SELECT clients.ClientID, clients.clientfirstname, clients.clientlastname FROM clients, clientscoach, jobcoaches WHERE clientscoach.ClientID = clients.ClientID and clientscoach.JobCoachID =  jobcoaches.JobCoachID ");
	while($row1 = mysql_fetch_array($query1)){
	echo "<option value='".$row1['ClientID']."'>".$row1['clientfirstname']." ".$row1['clientlastname']."</option>";
	}
	?>
	</select>
  <br />
	<label class="sr-only" for="Date">Date</label>
    <?php echo "<input type='text' class='form-control' name = 'date' id='date' value = '".$row['Date']."'>"; ?>
  
  
  
  <br />
	<label class="sr-only" for="stime">Stime</label>
    <input type="text" class="form-control" name = "stime" id="stime" value = "<?php echo $row['staffstarttime']; ?>">
  
  
  <br />
	<label class="sr-only" for="etime">ETime</label>
    <input type="text" class="form-control" name = "etime" id="etime" value = "<?php echo $row['staffendtime']; ?>">
  
  <br />
	<label class="sr-only" for="thw">TotalhoursWorked</label>
    <input type="text" class="form-control" name = "thw" id="etime" value = "<?php echo $row['totalhoursworked']; ?>">
	
	<br />
	<label class="sr-only" for="location">Location</label>
    <input type="text" class="form-control" name = "location" id="location" value = "<?php echo $row['Location']; ?>">
  
  <br />
	<label class="sr-only" for="jobprep">JobPrep</label>
    <input type="text" class="form-control" name = "jobprep" id="jobprep" value = "<?php echo $row['jobpreparation']; ?>">

	<br />
	<label class="sr-only" for="jobdev">JobDev</label>
    <input type="text" class="form-control" name = "jobdev" id="jobdev" value = "<?php echo $row['jobdevelopment']; ?>">
  
  <br />
	<label class="sr-only" for="jobcoach">JobCoach</label>
    <input type="text" class="form-control" name = "jobcoach" id="jobcoach" value = "<?php echo $row['jobcoaching']; ?>">

	  <br />
	<label class="sr-only" for="record">Record</label>
    <input type="text" class="form-control" name = "record" id="record" value = "<?php echo $row['recordkeeping']; ?>">

	<label class="sr-only" for="vol">volunteer</label>
    <input type="text" class="form-control" name = "vol" id="vol" value = "<?php echo $row['Volunteer']; ?>">

	<br />
	<label class="sr-only" for="op">OtherPathway</label>
    <input type="text" class="form-control" name = "op" id="op" value = "<?php echo $row['otherpathway']; ?>">

	
  <br />
	
	  <br />
	<label class="sr-only" for="paid">Paid</label>
    <input type="text" class="form-control" name = "paid" id="Paid" value = "<?php echo $row['Paid']; ?>">

	
  <br />
	<label class="sr-only" for="notes">Notes</label>
    <input type="text" style="font-size:10pt;height:200px" class="form-control" name = "notes" id="notes" value = "<?php echo htmlspecialchars($row['activityprogress']); ?>">
  
  </div><br />
  <button type="submit" class="btn btn-default">Edit</button>
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

