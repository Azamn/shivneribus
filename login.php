<?php
	include 'curlApi.php';
	include 'url.php';
	// $_POST['mobile'] = '8454093554';
	// $_POST['password'] = 'ssssss';
	$data ['mobile'] = $_POST['mobile'];
	$data ['logintype'] = 'normal';
	$data ['password'] = $_POST['password'];
	$url = $login;
	$abc = callAPI("POST", $url, $data);
	

	if($abc['status']==1){
		session_start();
		$_SESSION['name'] = $abc['data']['name']; 
		echo "save Success";
		echo "<pre>"; print_r($abc); exit();
		//header('Location:index.php');
	}
?>