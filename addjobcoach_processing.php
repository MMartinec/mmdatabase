<?php
include "db.php";

if ($_SERVER['REQUEST_METHOD']=='POST') {
	//echo "<pre>"; var_dump($_POST); echo "</pre>"; die();
	/*$date=$_POST['date']; //get POST values
	$staffstarttime=$_POST['staffstarttime'];
	$staffendtime=$_POST['staffendtime'];
	$totalhoursworked=$_POST['totalhoursworked'];
	$location=$_POST['location'];
	$activityprogress=$_POST['activityprogress'];
	$jobpreparation=$_POST['jobpreparation'];
	$jobdevelopment=$_POST['jobdevelopment'];
	$jobcoaching=$_POST['jobcoaching'];
	$recordkeeping=$_POST['recordkeeping'];
	$paid=$_POST['paid'];
	$volunteer=$_POST['volunteer'];
	$otherpathway=$_POST['otherpathway'];
	*/
	$query = "INSERT INTO JobCoaches (firstname, lastname, Email) VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['Email']."'	)";
	mysql_query($query);
/*
	$stmt->bindParam(':date', $date);
	$stmt->bindParam(':staffstarttime', $staffstarttime);
	$stmt->bindParam(':staffendtime', $staffendtime);
	$stmt->bindParam(':totalhoursworked', $stotalhoursworked);
	$stmt->bindParam(':location', $location);
	$stmt->bindParam(':activityprogress', $activityprogress);
	$stmt->bindParam(':jobpreparation', $jobpreparation);
	$stmt->bindParam(':jobdevelopment', $jobdevelopment);
	$stmt->bindParam(':jobcoaching', $jobcoaching);
	$stmt->bindParam(':recordkeeping', $recordkeeping);
	$stmt->bindParam(':paid', $paid);
	$stmt->bindParam(':volunteer', $svolunteer);
	$stmt->bindParam(':otherpathway', $otherpathway);

*/
//$stmt->execute(array(":fruitname"=>$fruitname,":fruitcolor"=>$fruitcolor)); 

}else{
	echo "nothing here";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>add job coach processing</title>
	</head>
	<body>

		<pre>
		<?php
			//print_r($_POST);
		?>
		</pre>
		<br />
		<?php
			// detect form submission
			if (isset($_POST['submit'])) {
				echo "form was submitted<br />";

				// set default values
				if (isset($_POST["firstname"])) {
					$date = $_POST["firstname"];
				} else {
					$firstname = "";
				}
				if (isset($_POST["lastname"])) {
					$lastname = $_POST["lastname"];
				} else {
					$lastname = "";
				}
				if (isset($_POST["Email"])) {
					$Email = $_POST["Email"];
				} else {
					$Email = "";
				}
				
				

				// set default values using ternary operator
				//   boolean_test ? value_if_true : value_if_false
				$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : "";
				$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : "";
				$Email = isset($_POST['Email']) ? $_POST['Email'] : "";
				

				
			} else {
				$firstname = "";
				$lastname = "";
				$Email = "";
			
				
			}
		?>

		<?php
			echo "{$firstname}: {$lastname}: {$Email}";
		?>
		
	</body>
</html>