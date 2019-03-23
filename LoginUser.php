<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>Mobile Authentication</title>
	<meta name="viewport" content="width-device=width, initial-scale=1">
	<script src="https://www.gstatic.com/firebasejs/5.7.2/firebase.js"></script>
	<script src="https://cdn.firebase.com/libs/firebaseui/3.1.1/firebaseui.js"></script>
	<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.1.1/firebaseui.css" />


</head>
<body>

	<h1></h1>
	<div id="firebaseui-auth-container"></div>
	<div id="loader">Loading...</div>
	<div class="content" style="text-align: center; color: green;">
	<?php 
		if($_GET['msg']=="registered_successfully"){
			echo "You are registered successfully..! Now verify your Mobile number.";

		}
	 ?>
	 </div>
	<script type="text/javascript" src="fireBase.js"></script>
	<script type="text/javascript" src="login.js"></script>
</body>
</html>