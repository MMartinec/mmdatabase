
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>add client processing</title>
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
				if (isset($_POST["firstname"])) {
					$firstname = $_POST["firstname"];
				} else {
					$firstname = "";
				}
				if (isset($_POST["lastname"])) {
					$lastname = $_POST["lastname"];
				} else {
					$lastname = "";
				}
				if (isset($_POST["monthlyhours"])) {
					$monthlyhours = $_POST["monthlyhours"];
				} else {
					$monthlyhours = "";
				}
				if (isset($_POST["clientgoals"])) {
					$lastname = $_POST["clientgoals"];
				} else {
					$clientgoals = "";
				}
				
				// set default values using ternary operator
				//   boolean_test ? value_if_true : value_if_false
				$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : "";
				$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : "";
				$monthlyhours = isset($_POST['monthlyhours']) ? $_POST['monthlyhours'] : "";
				$clientgoals = isset($_POST['clientgoals']) ? $_POST['clientgoals'] : "";
				
			} else {
				$firstname = "";
				$lastname = "";
				$monthlyhours = "";
				$clientgoals = "";
			}
		?>

		<?php
			echo "{$firstname}: {$lastname}: {$monthlyhours}: {$clientgoals}";
		?>
		
	</body>
</html>