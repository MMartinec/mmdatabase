

<?php
include('config.php');
//$query=mysql_connect("localhost","root","testpass","jobcoachsite"); 
$dbh=new PDO('mysql:host=localhost;dbname=jobcoachsite''mmartinec', 'mmartinec');
if ($_SERVER['REQUEST_METHOD']=='GET') {
$date=$_POST['date']; //get POST values
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
$stmt=$dbh->prepare("INSERT INTO Log Notes (date, staffstarttime, staffendtime, totalhoursworked, location, activityprogress, jobpreparation, jobdevelopment, jobcoaching, recordkeeping, paid, volunteer, otherpathway) VALUES (:staffstarttime, :staffendtime, :totalhoursworked, :location, :activityprogress, :jobpreparation, :jobdevelopment, :jobcoaching, :recordkeeping, :paid, :volunteer, :otherpathway);");

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
			print_r($_POST);
		?>
		</pre>
		<br />
		<?php
			// detect form submission
			if (isset($_POST['submit'])) {
				echo "form was submitted<br />";

				// set default values
				if (isset($_POST["date"])) {
					$date = $_POST["date"];
				} else {
					$date = "";
				}
				if (isset($_POST["staffstarttime"])) {
					$staffstarttime = $_POST["staffstarttime"];
				} else {
					$staffstarttime = "";
				}
				if (isset($_POST["staffendtime"])) {
					$staffendtime = $_POST["staffendtime"];
				} else {
					$staffendtime = "";
				}
				if (isset($_POST["totalhoursworked"])) {
					$totalhoursworked = $_POST["totalhoursworked"];
				} else {
					$totalhoursworked = "";
				}
				if (isset($_POST["location"])) {
					$location = $_POST["location"];
				} else {
					$location = "";
				}
				if (isset($_POST["activityprogress"])) {
					$activityprogress = $_POST["activityprogress"];
				} else {
					$activityprogress = "";
				}
				if (isset($_POST["jobpreparation"])) {
					$jobpreparation = $_POST["jobpreparation"];
				} else {
					$jobpreparation = "";
				}
				if (isset($_POST["jobdevelopment"])) {
					$jobdevelopment = $_POST["jobdevelopment"];
				} else {
					$jobdevelopment = "";
				}
				if (isset($_POST["jobcoaching"])) {
					$jobcoaching = $_POST["jobcoaching"];
				} else {
					$jobcoaching = "";
				}
				if (isset($_POST["recordkeeping"])) {
					$recordkeeping = $_POST["recordkeeping"];
				} else {
					$recordkeeping = "";
				}
				if (isset($_POST["paid"])) {
					$paid = $_POST["paid"];
				} else {
					$paid = "";
				}
				if (isset($_POST["volunteer"])) {
					$volunteer = $_POST["volunteer"];
				} else {
					$volunteer = "volunteer";
				}
				if (isset($_POST["otherpathway"])) {
					$otherpathway = $_POST["otherpathway"];
				} else {
					$otherpathway = "otherpathway";
				}

				// set default values using ternary operator
				//   boolean_test ? value_if_true : value_if_false
				$date = isset($_POST['date']) ? $_POST['date'] : "";
				$staffstarttime = isset($_POST['staffstarttime']) ? $_POST['staffstarttime'] : "";
				$staffendtime = isset($_POST['staffendtime']) ? $_POST['staffendtime'] : "";
				$totalhoursworked = isset($_POST['totalhoursworked']) ? $_POST['totalhoursworked'] : "";
				$location = isset($_POST['location']) ? $_POST['location'] : "";
				$activityprogress = isset($_POST['activityprogress']) ? $_POST['activityprogress'] : "";
				$jobpreparation = isset($_POST['jobpreparation']) ? $_POST['jobpreparation'] : "";
				$jobdevelopment = isset($_POST['jobdevelopment']) ? $_POST['jobdevelopment'] : "";
				$jobcoaching = isset($_POST['jobcoaching']) ? $_POST['jobcoaching'] : "";
				$recordkeeping = isset($_POST['recordkeeping']) ? $_POST['recordkeeping'] : "";
				$paid = isset($_POST['paid']) ? $_POST['paid'] : "";
				$volunteer = isset($_POST['volunteer']) ? $_POST['volunteer'] : "";
				$otherpathway = isset($_POST['otherpathway']) ? $_POST['otherpathway'] : "";

				
			} else {
				$date = "";
				$staffstarttime = "";
				$staffendtime = "";
				$totalhoursworked = "";
				$location = "";
				$activityprogress = "";
				$jobpreparation = "";
				$jobdevelopment = "";
				$jobcoaching = "";
				$recordkeeping = "";
				$paid = "";
				$volunteer = "";
				$otherpathway = "";
			}
		?>

		<?php
			echo "{$date}: {$staffstarttime}: {$staffendtime}: {$totalhoursworked}: {location}: {activityprogress}: {jobpreparation}: {jobdevelopment}: {jobcoaching}: {recordkeeping}: {paid}: {volunteer}: {otherpathway}";
		?>
		
	</body>
</html>