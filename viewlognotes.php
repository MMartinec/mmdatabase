<?php
include "db.php";

if(isset($_POST['search'])){
  if($_SESSION['type'] == 'jobcoach'){
  if($_POST['search'] == 'log')
  $query = mysql_query("select jobcoaches.firstname, jobcoaches.lastname, lognotes.lognoteID, clients.clientfirstname, clients.clientlastname, lognotes.Date, lognotes.activityprogress from clients, lognotes, jobcoaches where lognotes.jobCoachID = jobcoaches.JobCoachID AND lognotes.Date = '".$_POST['date']."' AND lognotes.ClientID = clients.ClientID AND lognotes.JobCoachID = '".$_SESSION['id']."' ORDER BY `lognotes`.`Date` DESC ");
  
  if($_POST['search'] == 'jobcoach')
  $query = mysql_query("select jobcoaches.firstname, jobcoaches.lastname, lognotes.lognoteID, clients.clientfirstname, clients.clientlastname, lognotes.Date, lognotes.activityprogress from jobcoaches, clients, lognotes where lognotes.jobCoachID = jobcoaches.JobCoachID AND jobcoaches.firstname = '".$_POST['first']."' AND jobcoaches.lastname = '".$_POST['last']."' AND lognotes.JobCoachID = '".$_SESSION['id']."' AND jobcoaches.JobCoachID = '".$_SESSION['id']."' AND lognotes.ClientID = clients.ClientID ORDER BY `lognotes`.`Date` DESC ");
  
  if($_POST['search'] == 'client')
  $query = mysql_query("select jobcoaches.firstname, jobcoaches.lastname, lognotes.lognoteID, clients.clientfirstname, clients.clientlastname, lognotes.Date, lognotes.activityprogress from clients, lognotes, jobcoaches where lognotes.jobCoachID = jobcoaches.JobCoachID AND clients.clientfirstname = '".$_POST['first']."' AND clients.clientlastname = '".$_POST['last']."' AND lognotes.ClientID = clients.ClientID AND lognotes.JobCoachID = '".$_SESSION['id']."' AND lognotes.JobCoachID = jobcoaches.JobCoachID ORDER BY `lognotes`.`Date` DESC ");
  }
  if($_SESSION['type'] == 'admin'){
  if($_POST['search'] == 'log')
  $query = mysql_query("select jobcoaches.firstname, jobcoaches.lastname, lognotes.lognoteID, clients.clientfirstname, clients.clientlastname, lognotes.Date, lognotes.activityprogress from clients, lognotes, jobcoaches where lognotes.jobCoachID = jobcoaches.JobCoachID AND lognotes.Date = '".$_POST['date']."' AND lognotes.ClientID = clients.ClientID ORDER BY `lognotes`.`Date` DESC ");
  
  if($_POST['search'] == 'jobcoach')
  $query = mysql_query("select jobcoaches.firstname, jobcoaches.lastname, lognotes.lognoteID, clients.clientfirstname, clients.clientlastname, lognotes.Date, lognotes.activityprogress from jobcoaches, clients, lognotes where jobcoaches.firstname = '".$_POST['first']."' AND lognotes.jobCoachID = jobcoaches.JobCoachID AND jobcoaches.lastname = '".$_POST['last']."' AND lognotes.JobCoachID = jobcoaches.JobCoachID AND lognotes.ClientID = clients.ClientID ORDER BY `lognotes`.`Date` DESC ");
  
  if($_POST['search'] == 'client')
  $query = mysql_query("select jobcoaches.firstname, jobcoaches.lastname, lognotes.lognoteID, clients.clientfirstname, clients.clientlastname, lognotes.Date, lognotes.activityprogress from clients, lognotes, jobcoaches where clients.clientfirstname = '".$_POST['first']."' AND lognotes.jobCoachID = jobcoaches.JobCoachID AND clients.clientlastname = '".$_POST['last']."' AND lognotes.ClientID = clients.ClientID AND lognotes.JobCoachID = jobcoaches.JobCoachID ORDER BY `lognotes`.`Date` DESC ");
  }
}
else {
  if($_SESSION['type'] == 'jobcoach')
  $query = mysql_query("select jobcoaches.firstname, jobcoaches.lastname, lognotes.lognoteID, clients.clientfirstname, clients.clientlastname, lognotes.Date, lognotes.activityprogress from clients, lognotes, jobcoaches WHERE lognotes.jobCoachID = jobcoaches.JobCoachID AND lognotes.JobCoachID = '".$_SESSION['id']."' AND lognotes.ClientID = clients.ClientID ORDER BY `lognotes`.`Date` DESC ");
  
  if($_SESSION['type'] == 'admin')
  $query = mysql_query("select jobcoaches.firstname, jobcoaches.lastname, lognotes.lognoteID, clients.clientfirstname, clients.clientlastname, lognotes.Date, lognotes.activityprogress from clients, lognotes, jobcoaches WHERE lognotes.jobCoachID = jobcoaches.JobCoachID AND lognotes.ClientID = clients.ClientID ORDER BY `lognotes`.`Date` DESC ");
}

//var_dump($_SESSION); die();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Other Pathway</title>
<script type="text/javascript" src="sortable.js"></script>
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
            <h1>View Log Notes</h1>
           
    </div>
    </div>     
	</div>
    
 <!--Table***************************************************-->
 <div class="viewlognotestable">
 <table data-role="table" data-mode="columntoggle" class="table" id="myTable">
  <thead>
  <col width="110">
  <col width = "110">
  <col width="100">
  <col width="100">
  <col width="50">
  <col width="50">
  
    
  </thead>
  <tbody>
  <?php
  $i = 0;
  while($data = mysql_fetch_array($query)){
	$row[$i]['client'] = $data['clientfirstname']." ".$data['clientlastname'];
  $row[$i]['job'] = $data['firstname']." ".$data['lastname'];
	$row[$i]['date'] = $data['Date'];
	$row[$i]['log'] = $data['activityprogress'];
	$row[$i]['lognoteID'] = htmlspecialchars($data['lognoteID']);
	$i++;
	}
  
/*  echo "
  <tr>
      <th align='center'>Sort</th>
      <th align='center'>Sort</th>
      <th align='center'>Sort</th>
      
	  <th align='center'></th>
      <th align='center'></th>
     
      
    </tr>
  ";
  */?>
  <tr>
      <th align="center">Client Name</th>
      <th align="center">Job Coach</th>
      <th align="center">Date</th>
      <th align="center">Log Note</th>
      <?php if($_SESSION['type'] == 'admin') { ?>
	  <th align="center"><span class="glyphicon glyphicon-edit"></span></th>
      <th align="center"><span class="glyphicon glyphicon-remove"></span></th>
      <?php } ?>
      
    </tr>
	<?php
	$j = 0;
	while($j < $i){
	echo "
	<tr>
      <td align='left'>".$row[$j]['client']."</td>
      <td align='left'>".$row[$j]['job']."</td>
      <td align='left'>".$row[$j]['date']."</td>
      <td align='left'>".$row[$j]['log']."</td>";
      if($_SESSION['type'] == 'admin') {
	  echo "<td><a href = 'logedit.php?id=".$row[$j]['lognoteID']."'>Edit</a></td>
      <td><a href = 'logdelete.php?id=".$row[$j]['lognoteID']."'>Delete</a></td>";
	  }
    echo "</tr>";
	$j++;
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

