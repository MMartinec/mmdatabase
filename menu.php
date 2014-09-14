<?php
include "db.php";
?>
  <ul>
  <!--<button type="button" class="btn btn-primary btn-xs">Extra small button</button>-->
  <li><a href="adminhome.php">Admin Home</a></li>
  <li><a href="addNotes.php">Add Log Notes</a></li>
  <?php if($_SESSION['type'] == 'admin'){ ?>
  <li><a href="viewjobcoaches.php">Job Coaches</a></li>
  <li><a href="viewclients.php">Clients</a></li>
  <li><a href="assignJobCoach.php">Assign Clients</a></li>
  <?php } ?>
  <li><a href="viewlognotes.php?date=1&client=0&log=0">View Log Notes</a></li>
  <li><a href="logout.php">Log Out</a></li>
  
</ul> 
             