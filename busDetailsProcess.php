<?php
	include 'curlApi.php';
	include 'url.php';
	
	//$_POST['source'] = 'Mumbai';

	// $_POST['source'] = 'Mumbai';
	// $_POST['destination'] = 'Pune';
	// $_POST['date'] = '01-04-2019'; 
	$source = $_POST['source'];
	$destination = $_POST['destination'];
	$date = $_POST['date'];

	
	//print_r($data);
	
	$url = $busDetails;
	$abc = callAPI("POST", $url, "source=Mumbai&destination=Pune&date=04/02/2019");

	
	if($source == "Mumbai" && $destination == "Pune" && $date =="04/02/2019")
	{
		// var_dump($abc);
		//print_r($abc);
		// die();
		if($abc['status'] == 1){

			session_start();
		
			$_SESSION['source']= $source;
			$_SESSION['destination']= $destination;
			$_SESSION['date']=$date;
			$_SESSION['startTime']=$abc['data'][0]['start_time'];
			$_SESSION['endTime']=$abc['data'][0]['end_time'];
			$_SESSION['operator_name'] =$abc['data'][0]['travel_opname'];
			$_SESSION['description']=$abc['data'][0]['description'];
			$_SESSION['totalSeats']=$abc['data'][0]['total_seats'];
			$_SESSION['travellingTime']=$abc['data'][0]['travelling_time'];
			$_SESSION['price']=$abc['data'][0]['price'];
			$_SESSION['rating']=$abc['data'][0]['rating'];
			
			
		}
		else
		{
			echo "Travel not found of this Location";
			$_SESSION['source']= '';
			$_SESSION['destination']= '';
		}
		
		header('Location:Home.php');
	}
	else
	{
		echo "Travel Not Found Some erroe occured";
	}
?>