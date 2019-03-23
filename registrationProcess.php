<?php
	include 'curlApi.php';
	include 'url.php';
	/*$_POST['mobile'] = '8454093554';
	$_POST['password'] = 'ssssss';*/
	$data ['name'] = $_POST['name'];
	$data ['mobile'] = $_POST['mobile'];
	$data ['email'] = $_POST['email'];
	$data ['gender'] = 'M';
	$data ['dob'] = '1993/02/05';
 	$data ['usertype'] = 3;
	$data ['password'] = $_POST['password'];
	$data ['device_token'] = 'cjkcchbicy';
	//print_r($data); // yaha kar rha hu to data aa rha hai bt db me submit nhi ho rha hai
	$url = $registerUser;
	$abc = callAPI("POST", $url, $data);
	print_r($abc); // yaha pe print krke ceck kar rha hu to kuch bhi nhi aa rha hai

	if($abc['status']==1){
		/*session_start();
		$_SESSION['name'] = $abc['data']['name'];*/ 
		echo "OTP SEND SUCCESSFULLY";
	// echo "<pre>"; print_r($abc); exit();
		header('Location:LoginUser.php?msg=registered_successfully');
	}else{
		/*$Message = "Mobile No. all ready registered. Please login or registered with another number.";*/

		header('Location:loginHome.php?msg=mobile_registered');
	}
?>