<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>addclient</title>
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
            <div class="col-md-8 col-md-offset-3">
              <div class="addclienttitle">
              
              <h1>Add New Client</h1>
             
            </div>
              </div>
   <!--Client Name********************************-->      
<div class="row">
            <div class="col-md-7 col-md-offset-3">
         
         <div class="clientinput"> 
                <form enctype="multipart/form-data" action="testaddclient_processing.php" method="POST"class="form-inline" role="form">
  <div class="form-group">
    <label class="sr-only" for="clientfirstname">Client First Name</label>
    <input type="text" name="clienfirstname" class="form-control" name="clientfirstname"id="clientfirstname" placeholder="Enter First Name">
  </div>
  
  <div class="form-group">
    <label class="sr-only" for="client last name">Client Last Name</label>
    <input type="text" name="clientlastname" class="form-control" name="clientlastname"id="clientlastname" placeholder="Enter Last Name">
  </div>
  
  
  
 
         </div><!--end client name****************-->
         </div>
          </div><!--end client name****************-->
         
            
<!--Client Hours______________________________________________-->      
<div class="row">
            <div class="col-md-2 col-md-offset-5">
          
         <h4>Monthly hours</h4>
         <div class="form-group">
         <div class="clienthours">
    <label  for="clienthours"></label>
    <input type="number" name="monthlyhours" class="form-control" width= "10" id="clienthours" placeholder="">
    </div>
  </div>
  

  
  

         </div><!--end client hours*********************-->
         </div>
                
            
<!--Client Goal______________________________________________-->      
<div class="row">
            <div class="col-lg-10 col-md-offset-1">
         <div class="newclienth4">
         <h4>New Client Goals</h4>
         </div>
         <div class="clientgoal"> 
                
  <div class="form-group">
    <label class="sr-only" for="clientgoals">client goals</label>
    <textarea class="form-control" name="clientgoals" rows= "10" id="clientgoal" placeholder="enter client goals"></textarea>
  </div>
  
  
 
         </div><!--end client Goal*************************-->
         </div>
          </div> 
   <!--buttons--> 
   <div class="row">
            <div class="col-md-6 col-md-offset-4">
  <div class="addlognotebuttons">          
   
   <div class="addclientbutton">
  <button type="submit" name="submit" class="btn btn-default" value="submit">Submit</button>
  <button type="button" class="btn btn-default">Cancel</button>
  
  </div>
  </div>
</div>
  </form>
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

