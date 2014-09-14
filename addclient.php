<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>addclient</title>
	</head>
	<body>

		<form action="addclient_processing.php" method="post">
		  firstname: <input type="text" name="clientfirstname" value="" /><br />
		  lastname: <input type="text" name="clientlastname" value="" /><br />
		  monthlyhours: <input type="number" name="monthlyhours" value="" /><br />
		  Client Goals: <input type="textarea" name="clientgoals" value="" /><br />
			<br />
		  <input type="submit" name="submit" value="Submit" />
		</form>

	</body>
</html>