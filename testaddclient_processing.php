<?php
include "db.php";

if ($_SERVER['REQUEST_METHOD']=='POST') {
	
	$query = "INSERT INTO Clients (clientfirstname, clientlastname, monthlyhours, clientgoals) VALUES ('".$_POST['clientfirstname']."', '".$_POST['clientlastname']."', '".$_POST['monthlyhours']."', '".$_POST['clientgoals']."'	)";
	mysql_query($query);

}else{
	echo "nothing here";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>add client processing</title>
	</head>
	<body>

		<pre>
		<?php
			
		?>
		</pre>
		<br />
		<?php
			// detect form submission
			if (isset($_POST['submit'])) {
				echo "form was submitted<br />";

				// set default values
				
				if (isset($_POST["clientfirstname"])) {
					$sclientlastname = $_POST["clientfirstname"];
				} else {
					$clientfirstname = "";
				}
				if (isset($_POST["clientlastname"])) {
					$sclientlastname = $_POST["clientlastname"];
				} else {
					$clientlastname = "";
				}
				if (isset($_POST["monthlyhours"])) {
					$monthlyhours = $_POST["monthlyhours"];
				} else {
					$monthlyhours = "";
				}
				if (isset($_POST["clientgoals"])) {
					$clientgoals = $_POST["clientgoals"];
				} else {
					$clientgoals = "";
				}
				

				// set default values using ternary operator
				//   boolean_test ? value_if_true : value_if_false
				$clientfirstname = isset($_POST['clientfirstname']) ? $_POST['clientfirstname'] : "";
				$clientlastname = isset($_POST['clientlastname']) ? $_POST['clientlastname'] : "";
				$monthlyhours = isset($_POST['monthlyhours']) ? $_POST['monthlyhours'] : "";
				$clientgoals = isset($_POST['clientgoals']) ? $_POST['clientgoals'] : "";
				

				
			} else {
				$clientfirstname = "";
				$clientlastname = "";
				$monthlyhours = "";
				$clientgoals = "";
				
			}
		?>

		<?php
			echo "{$clientfirstname}: {$clientlastname}: {$monthlyhours}: {$clientgoals}";
		?>
		
	</body>
</html>