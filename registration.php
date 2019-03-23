<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<form action="registrationProcess.php" method="post">
	<label>Enter Your Name</label>
	<input type="text" name="name" placeholder="Enter Your userNamme">
	<label>Enter Your Mobile No.</label>
	<input type="mobile" name="mobile" placeholder="Enter Your Mobile">
	<?php 
	ini_set('display_startup_errors',1);
	ini_set('display_errors',1);
	error_reporting(-1);
	if(!empty($_GET['msg']))
	{
		if($_GET['msg'] == 'mobile_registered')
		{
			echo 'Mobile All ready registered.';
		}
	}
	?>
	<label>Enter Your Email</label>
	<input type="email" name="email" placeholder="Enter Your userNamme">
	<label>Enter password</label>
	<input type="password" name="password" placeholder="Enter password">
	<button type="submit" name="submit" value="Registration">Registration</button>
	</form>
</body>
</html>