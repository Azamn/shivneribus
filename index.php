<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome To RedBus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/	bootstrap/4.1.3/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/
	font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker.css">
  <script src="https://cdn.firebase.com/libs/firebaseui/3.1.1/firebaseui.js"></script>
  <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.1.1/firebaseui.css" />

	<style>
		.jumbotronImg{
			background-image: url(img/banner.png);
			background-size: 100%,100%;
			margin-top: 74px;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;

		}
	</style>

</head>
<body>

<!-- Starting Of Navbar -->

<nav class="navbar navbar-expand-sm bg-danger navbar-danger fixed-top">
 
  <!-- Brand/logo -->
  	<a class="navbar-brand" href="index.php">
    	<img src="img/logo1.png" alt="logo" style="width:70px;">
  	</a>
  <!-- Brand/logo complete -->

   <!-- Toggler/collapsibe Button -->
  	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="border:white">
    	<span class="navbar-toggler-icon"></span>
  	</button>

  	<!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Bus Tickets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>

	<ul class="navbar-nav ml-auto">

		<li class="nav-item">
			<a class="nav-link" href="#">Help</a>
		</li>
 		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbardrop"data-toggle="dropdown">Manage Booking</a>
			<div class="dropdown-menu">
				<a class="dropdown-item text-body" href="#">Cancel</a>
				<a class="dropdown-item text-body" href="#">Reshedule</a>
				<a class="dropdown-item text-body" href="#">Print/Download</a>
				<a class="dropdown-item text-body" href="#">Cancel/Refund</a>
			</div>
		</li>

    	<li class="nav-item dropdown">
    		<a class="nav-link dropdown-toggle" href="#" id="navbardrop"data-toggle="dropdown">
			<img src="img/user.png" alt="logo" style="width:25px;"></a>
			<div class="dropdown-menu userDropMenu">
        <?php 
          if(!empty($_SESSION['name'])){
          ?>
                Welcome <?php echo $_SESSION['name']; ?>
        <a class="content" style="text-align: left;color: blue;"href="logout.php">Logout</a>
              <?php } else { ?>
        <a class="content" style="text-align: left;color: black;"
        href="loginHome.php">Sign In/<br>Sign Up</a>
        <?php 
              }
        ?>
			</div>
		</li>
 	</ul>
  </div>
</nav>

<div class="container">
	<div class="modal fade" id="myModal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<img src="img/logo.png" class="mx-auto d-block" alt="logo" style="width:90px;">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div>
					<h3 class="text-center text-danger">SIGN IN / SIGN UP</h3>
				</div>
				<div class="modal-body">
					<form action="#" method="POST">
						<div class="inputWithIcon form-group">
							<input type="number" placeholder="Enter your mobile No" name="pnumber" class="form-control"
							required="required" >
							<i class="fa fa-mobile fa-2x" aria-hidden="true" ></i><br>
							
							<button class="btn btn-danger justi" type="submit" style="width: 100%">Generate OTP</button>
						</div>
					</form>
					<form action="" method="POST">
						<div class="inputWithButtonG IconBg form-group">
							<button class="btn btn-justi" data-target="#modalRegistration" data-toggle="modal" type="submit" style="width: 100%;background-color: #dd4b39;color: white;"> Sign in with google
							</button>
							<i class="fa fa-google-plus fa-2x"></i>
						</div>
					</form>
					<form action="#" method="POST">
						<div class="inputWithButtonF form-group">
							<button class="btn btn-justi" type="submit" style="width: 100%;background-color: #33569e;color: white;"> Sign in with facebook</button>
							<i class="fa fa-facebook-official fa-2x"></i>
						</div>
						</div>
					</form>
            <div class="inputWithButtonR form-group">
              <button class="btn btn-info justi" type="submit" style="width: 100%">Normal registration</button>
            </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Registration modal -->
<div class="container">
	<div class="modal" id="modalRegistration">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="text-center text-danger">Registration</h3>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Banner Start-->

<div class="jumbotron jumbotron-fluid jumbotronImg">
  <div class="container jumboContainer"> 
  	<div class="col-sm-08 offset-sm-1 text-center">
  	<form action="busDetailsProcess.php" method="POST" enctype="application/x-www-form-urlencoded"class="form-inline form-manage">
    <div class="search-widget">
    	<div class="search-input-wrap inputWithIcon3">
    	<input id="citySearchFrom" type="text" name="source" required="required" placeholder="FROM">
    	<div class="icon-input-wrap">
    		<i class="fa fa-building"></i>
    	</div>
    	</div>
    </div>
    <div class="search-input-wrap inputWithIcon4">
    	<input id="citySearchDesti" type="text" name="destination" required="required" placeholder="TO">
    	<div class="icon-input icon-city">
    		<i class="fa fa-building"></i>
    	</div>
    </div>
    <div class="dates search-input-wrap inputWithIcon2">
    	<input id="datepicker" class="search-input" type="text" name="date" required="required" autocomplete="off" placeholder="ONWARD DATE">
    	<div class="icon-input icon-calendar">
    		<i class="fa fa-calendar"></i>
    	</div>
    </div>
    <!-- <div class="search-input-wrap inputWithIcon1">
    	<input id="datepicker" class="search-input" type="text" name="date" autocomplete="off" placeholder="RETURN DATE">
    	<div class="icon-input icon-calendar">
    		<i class="fa fa-calendar"></i>
    	</div>
    </div> -->
    	<div>
    		<button class="btn btn-danger">Search Buses</button>
    	</div>
    </form>
  </div>
</div>
</div>

<!--  Banner close -->

<div class="container cardStart">
	<h2 class="h2-heading">WHY BOOK WITH REDBUS</h2>
		<div class="row cardRow">
			<div class="col-xl-3 col-md-3 col-sm-3 cardBorder">
				<div class="jumbotron-fluid jumbotronCard">
					<div class="card-group">
						<div class="card-img-top text-center">
							<img src="img/maximum_choices.png">
						</div>
						<div class="card-title text-center" style="width: 15rem;">MAXIMUM CHOICE</div>
						<div class="card-text text-center">
							We give you the best widest number of travel options across thousands of routes.
						</div>
					</div>
				</div>
			</div>
		<!-- </div> -->

		<!-- <div class="card"> -->
			<div class="col-xl-3 col-md-3 col-sm-3 cardBorder">
				<div class="card-img-top text-center">
					<img src="img/customer_care.png">
				</div>
					<div class="card-title text-center style=" style="margin-bottom: 20px;">SUPERIOR CUSTOMER SERVICE</div>
						<div class="card-text text-center">
							We put our experience and relationships to good use and are available to solve your travel issues.
						</div>
				</div>
		<!-- </div> -->

		<!-- <div class="card"> -->
			<div class="col-xl-3 col-md-3 col-sm-3 cardBorder">
				<div class="card-img-top text-center">
					<img src="img/lowest_Fare.png">
				</div>
					<div class="card-title text-center">LOWEST PRICES</div>
					<div class="card-text text-center">
							We always give you the lowest price with the best partner offers.
					</div>
				</div>

		<!-- <div class="card"> -->
			<div class="col-xl-3 col-md-3 col-sm-3">
				<div class="card-img-top text-center">
					<img src="img/benefits.png">
				</div>
				<div class="card-title text-center">UNMATCHED BENEFITS</div>
					<div class="card-text text-center">
						We take care of your travel beyond ticketing by providing you with innovative and unique benefits.
					</div>
			</div>
	</div>
</div>

<!-- card end -->

<!-- Footer -->
<footer class="page-footer font-small pt-4">
    <!-- Footer Links -->
    <div class="container text-center text-md-left">
      <!-- Grid row -->
      <div class="row footerRow">
        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Content -->
          <!-- <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5> -->
          <div class="img-cont">
          	<img src="img/logo1.png" style="width: 100px;">
          </div>
          <p>
              redBus is the world's largest online bus ticket booking service trusted by over 8 million happy customers globally. redBus offers bus ticket booking through its website,iOS and Android mobile apps for all major routes.
           </p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold footerHeading text-uppercase mt-3 mb-4">About redBus</h5>

          <ul class="list-unstyled footerLinks">
            <li>
              <a href="#!">About US</a>
            </li>
            <li>
              <a href="#!">Contact US</a>
            </li>
            <li>
              <a href="#!">Mobile Version</a>
            </li>
            <li>
              <a href="#!">Offers</a>
            </li>
            <li>
              <a href="#!">Careers</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold footerHeading text-uppercase mt-3 mb-4">Info</h5>

          <ul class="list-unstyled footerLinks">
            <li>
              <a href="#!">T & C</a>
            </li>
            <li>
              <a href="#!">Privacy policy</a>
            </li>
            <li>
              <a href="#!">Faq</a>
            </li>
            <li>
              <a href="#!">Blog</a>
            </li>
            <li>
              <a href="#!">Insurance Paertner</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold footerHeading text-uppercase mt-3 mb-4">Global Sites</h5>

          <ul class="list-unstyled footer footerLinks">
            <li>
              <a href="#!">India</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
    <!-- Footer Links -->
    <hr>

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center socialIcon">
      <li class="list-inline-item ">
        <a href="#" class="btn-floating btn-fb mx-1">
          <i class="fa fa-facebook-official fa-2x"> </i>
        </a>
      </li>
      <li class="list-inline-item ">
        <a href="#" class="btn-floating btn-tw mx-1">
          <i class="fa fa-twitter fa-2x"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="#" class="btn-floating btn-gplus mx-1">
          <i class="fa fa-google-plus fa-2x"> </i>
        </a>
      </li>
    </ul>
    <hr>
    <!-- Social buttons -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="#">Azamali Shaikh</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

 <script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9V31WucSe3Mz5EEVPOqd86LeBpP17kss&libraries=places&callback=activatePlacesFrom"></script>  -->

<script>
	function activatePlacesFrom(){
		// alert('zdsf')
		var options = {
					componentRestrictions: { country: "IN" }
    };
		var input = document.getElementById('citySearchFrom');
		var autocomplete = new google.maps.places.Autocomplete(input, options);
	}
</script>

<!-- Search Api -->

<script>
	function activatePlacesDesti(){
		// alert('hshshshsh');
		var options = {
					componentRestrictions: { country: "IN" }
      };
		var input1 = document.getElementById('citySearchFrom');
		var autocomplete = new google.maps.places.Autocomplete(input1,options);
		var input2 = document.getElementById('citySearchDesti');
		var autocomplete = new google.maps.places.Autocomplete(input2,options);
	}
</script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9V31WucSe3Mz5EEVPOqd86LeBpP17kss&libraries=places&callback=activatePlacesDesti"></script>
<!-- Search api close -->
<script type="text/javascript" src="fireBase.js"></script>
<script type="text/javascript" src="login.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.7.2/firebase.js"></script>

</body>
</html>