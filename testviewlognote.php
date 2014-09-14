<?php
include('db.php');
$query1=mysql_query("select lognoteID, date, staffstarttime, staffendtime, totalhoursworked, Location, activityprogress, jobpreparation, jobdevelopment, jobcoaching, recordkeeping, Paid, Volunteer, otherpathway, ClientID, JobCoachID from lognotes");
echo "<table><tr><td>lognoteID</td><td>date</td><td>staffstarttime</td><td>staffendtime</td>td>totalhoursworked</td><td>Location</td>td></td><td>activityprogress</td>td>jobpreparation</td><td>jobdevelopment</td>td>jobcoaching</td><td>recordkeeping</td>td>Paid</td><td>Volunteer</td>td>otherpathway</td><td>ClientID</td>td>JobCoachID</td><td></td>";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['lognoteID']."</td>";
echo "<td>".$query2['age']."</td>";
echo "<tr><td>".$query2['date']."</td>";
echo "<td>".$query2['staffstarttime']."</td>";
echo "<tr><td>".$query2['staffendtime']."</td>";
echo "<td>".$query2['totalhoursworked']."</td>";
echo "<tr><td>".$query2['Location']."</td>";
echo "<td>".$query2['activityprogress']."</td>";
echo "<tr><td>".$query2['jobpreparation']."</td>";
echo "<td>".$query2['jobdevelopment']."</td>";
echo "<tr><td>".$query2['jobcoaching']."</td>";
echo "<td>".$query2['recordkeeping']."</td>";
echo "<tr><td>".$query2['name']."</td>";
echo "<td>".$query2['Paid']."</td>";
echo "<tr><td>".$query2['Volunteer']."</td>";
echo "<td>".$query2['otherpathway']."</td>";
echo "<tr><td>".$query2['ClientID']."</td>";
echo "<td>".$query2['JobCoachID']."</td>";
//echo "<td><a href='edit.php?id=".$query2['id']."'>Edit</a></td>";
//echo "<td><a href='delete.php?id=".$query2['id']."'>x</a></td><tr>";
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
  <li><a href="adminhome.html">Admin Home</a></li>
  <li><a href="viewjobcoach.html">Job Coaches</a></li>
  <li><a href="viewclients.html">Clients</a></li>
  <li><a href="viewlognotes.html">Log Notes</a></li>
  <li><a href="adminhome.html">Log Out</a></li>
  
</ul> 
             

</nav><!--end nav-->      



</aside><!--end aside-->

<div class="content"><!--begin content-->
        
<div class="row">
            <div class="col-md-10 col-md-offset-0">
            <div class="viewlognotesh1">
            <h1>View Log Notes</h1>
           
         <div class="viewlognotessearchbar">
            <form class="form-inline" role="form">
            <div class="form-group">
        <h4>Search</h4>
    
  </div>

 <div class="form-group">
    <label class="sr-only" for="client first name">Client First Name</label>
    <input type="text" class="form-control" id="first name" placeholder="First Name">
  </div>
  <div class="form-group">
    <label class="sr-only" for="client last name">Client Last Name</label>
    <input type="text" class="form-control" id="first name" placeholder="Last Name">
  </div>
  <button type="search" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
</form> 
             </div>
    </div>
    </div>     
  </div>
    
 <div class="row">
            <div class="col-md-11 col-md-offset-0">
            <div class="">
            
         <div class="viewlognotessorth4">
            <form class="form-inline" role="form">
            <div class="form-group">
        
    
  </div>

 <div class="form-group">
    <h4>Sort by</h4>
  </div>
  
  <div class="form-group">
    <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
    Clients
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">All Clients</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Client One</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Client Two</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Client Three</a></li>
    
    
  </ul>
  
</div>
  </div>
  <div class="form-group">
  <div class="viewlognotessortbydate">
    <h4>Sort by Date</h4>
    </div>
  </div>
  
  <div class="form-group">
    <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
    Date
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">All Dates</a></li>
  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">January 2014</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">February 2014</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">March 2014</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">April 2014</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">May 2014</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">June 2014</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">July 2014</a></li>
    
    
  </ul>
  
</div>
  </div>
  <div class="form-group">
  <div class="viewaddnewlognoteh4">
    <h4>Add new log note</h4>
    </div>
  </div>
  <div class="form-group">
<a href="testaddlognote.php"><span class="glyphicon glyphicon-plus"></span></a>
    
  </div>
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
  <col width="150">
  <col width="150">
  <col width="50">
  <col width="50">
  
    
  </thead>
  <tbody>
  <tr>
      <th align="center">Client Name</th>
      <th align="center">Date</th>
      <th align="center">Log Note</th>
      <th align="center"><a href="editlognote.html"><span class="glyphicon glyphicon-edit"></span></a></th>
      <th align="center"><span class="glyphicon glyphicon-remove"></span></th>
      
      
    </tr>
    <tr>
      <td align="left">Kaidence Jones</td>
      <td align="left">7/14/14</td>
      <td align="left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Haec quo modo conveniant, non sane intellego. At hoc in eo M. Eam stabilem appellas. Duo Reges: constructio interrete. Quibus ego vehementer assentior. Tollenda est atque extrahenda radicitus. </td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th align="center">Client Name</th>
      <th align="center">Date</th>
      <th align="center">Log Note</th>
      <th align="center"><a href="editlognote.html"><span class="glyphicon glyphicon-edit"></span></a></th>
      <th align="center"><span class="glyphicon glyphicon-remove"></span></th>
      
      
    </tr>
 
 
    <tr>
      <td align="left">John Smith</td>
      <td align="left">7/15/14</td>
      <td align="left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Haec quo modo conveniant, non sane intellego. At hoc in eo M. Eam stabilem appellas. Duo Reges: constructio interrete. Quibus ego vehementer assentior. Tollenda est atque extrahenda radicitus. </td>
      <td></td>
      <td></td>
    <tr>
      <th align="center">Client Name</th>
      <th align="center">Date</th>
      <th align="center">Log Note</th>
      <th align="center"><a href="editlognote.html"><span class="glyphicon glyphicon-edit"></span></a></th>
      <th align="center"><span class="glyphicon glyphicon-remove"></span></th>
      
      
    </tr>
  
  
    <tr>
      <td align="left">Mary Hansen</td>
      <td align="left">7/16/14</td>
      <td align="left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Haec quo modo conveniant, non sane intellego. At hoc in eo M. Eam stabilem appellas. Duo Reges: constructio interrete. Quibus ego vehementer assentior. Tollenda est atque extrahenda radicitus. </td>
     <td></td>
      <td></td>
      
    </tr>
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
