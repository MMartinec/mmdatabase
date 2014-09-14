<?php
if(isset($_POST['search'])){
//var_dump($_POST); die();
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
            <div class="col-md-8 col-md-offset-3">
              <div class="adminhometitle">
              <div class="adminlognotes">
              <h1>Admin Home</h1>
              </div> 
         		</div>
         			</div>
   <!--Log Notes______________________________________________-->      
<div class="row">
            <div class="col-md-8 col-md-offset-3">
            
            <h3>Log Notes</h3>
            <div class="adminhomelognoteborder"> 
            </div>
         <div><!--begin search log notes-->
         
         <div class="lognotesearch"> 
                <form action="viewlognotes.php?date=1&client=0&log=0" class="form-inline" role="form" method = "post">
  
  <input type="hidden" name="search" value="log">
    <div class="adminlnsrchdate">
    <div class="form-group">
    <label class="sr-only" for="date">Date (YYYY-MM-DD)</label>
    <input type="text" class="form-control" name="date" id="sdate" placeholder="Date (YYYY-MM-DD)">
    <button type="search" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
  </div>
  </div>
   </div> 
  
</form> 
         </div><!--end search log notes-->
         </div>
         	</div>
            <!--Job Coaches______________________________________________-->
<div class="row">
            <div class="col-md-8 col-md-offset-3">
            <div class="jch3">
            <h3>Job Coaches</h3>
            </div>
            <div class="adminhomejobcoachborder"> 
            </div>
         <div><!--begin search job coach-->
        
         <div class="jobcoachsearch"> 
                <form action="viewlognotes.php?date=1&client=0&log=0" class="form-inline" role="form" method="post">
  <div class="form-group">
    <label class="sr-only" for="job coach first name">Job Coach First Name</label>
    <input type="text" class="form-control" name="first" id="first name" placeholder="First Name">
  </div>
  <input type="hidden" name="search" value="jobcoach">
  <div class="form-group">
    <label class="sr-only" for="job coach last name">Job Coach Last Name</label>
    <input type="text" class="form-control" name="last" id="last name" placeholder="Last Name">
    <button type="search" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
</form> 
  </div>
</form> 
         </div><!--end search job coach-->
         </div>
         	</div>	
      <!--Clients______________________________________________--> 
  <div class="row">
            <div class="col-md-8 col-md-offset-3">
            <div class="ch3">
            <h3>Clients</h3>
            </div>
            <div class="adminhomeclientborder"> 
            </div>
         <div><!--begin search job coach-->
        
         <div class="clientsearch"> 
                <form action="viewlognotes.php?date=1&client=0&log=0" class="form-inline" role="form" method="post">
  <div class="form-group">
    <label class="sr-only" for="Client first name">Client First Name</label>
    <input type="text" class="form-control" name="first" id="first name" placeholder="First Name">
  </div>
  <input type="hidden" name="search" value="client">
  <div class="form-group">
    <label class="sr-only" for="client last name">Client Last Name</label>
    <input type="text" class="form-control" name="last" id="last name" placeholder="Last Name">
    <button type="search" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
</form> 
  </div>
    
  
         </div><!--end search job coach-->
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

