<?php
	include 'curlApi.php';
	include 'url.php';
	
	//$_POST['source'] = 'Mumbai';
	$source = $_POST['source'];
	$destination = $_POST['destination'];
	$date = $_POST['date'];
	// $_POST['destination'] = 'Pune';
    // $_POST['date']='2018-12-31';
	// $data ['source'] = $_POST['source'];
	// $data ['destination'] = $_POST['destination'];
	// $data ['date'] = $_POST['date'];
	$url = $busDetails;
	$abc = callAPI("POST", $url, $source,$destination,$date);
	

	if($source == 'Mumbai' && $destination == 'Pune')
	{
		if($abc['status']==1){
			session_start();
		// echo $abc['data'][0]['vehical_no'];
		// $op = json_decode($abc,true);
		// echo $op['status'];
		
	
		
			$_SESSION['source']= $source;
			$_SESSION['destination']= $destination;
			$_SESSION['date']=$date;
			$_SESSION['vehicalNo'] =$abc['data'][0]['vehical_no'];
			$_SESSION['Total_Seats']=$abc['data'][0]['total_seats'];
			$_SESSION['endTime']=$abc['data'][0]['end_time'];
			
		}else{
			echo "Travel not found of this Location";
			$_SESSION['source']= '';
			$_SESSION['destination']= '';
		}
		
		header('Location:Home.php');
	}
	else
	{
		echo "cc";
	}
?>