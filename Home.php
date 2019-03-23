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
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

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
  	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="border:white" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
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

<!-- Nvbar Close -->


<div class="container-fluid main-area" >
  <div class="row">
    <div class="col-md-2" >
    <div class="title f-bold filters">FILTERS</div>
      <div class="filter-titles f-12 f-bold departureTime">DEPARTURE TIME</div>
      <div class="container-fluid">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="">
          <label class="form-check-label">Before 6 am</label>
        </div><br>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="">
          <label class="form-check-label">6 am to 12 pm</label>
        </div><br>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="">
          <label class="form-check-label">12 pm to 6 pm</label>
        </div><br>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="">
          <label class="form-check-label">After 6 pm</label>
        </div>
      </div>

      <div class="filter-titles f-12 f-bold">BUS TYPES</div>
          <div class="container-fluid">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="">
                <label class="form-check-label">SEATERS</label>
              </div><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="">
                <label class="form-check-label">SLEEPER</label>
              </div><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="">
                <label class="form-check-label">AC</label>
              </div><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="">
                <label class="form-check-label">NON AC</label>
              </div><br>
          </div>
          <div class= "filter-titles f-12 f-bold">AMENITIES
          <ul class="amenity-list clearfix amenities" style="list-style-type: none;">
            <li value="1" class="clearfix fl" ><a href="#"><i class="icon fl icon-am_1"></i><span class="fl" title="WIFI">Wifi</span></a></li>
            <li value="4" class="clearfix fl"><a href="#"><i class="icon fl icon-am_4"></i><span class="fl" title="Water Bottle">Water Bottle</span></a></li>
            <li value="5" class="clearfix fl"><a href="#"><i class="icon fl icon-am_5"></i><span class="fl" title="Blankets">Blankets</span></a></li>
            <li value="7" class="clearfix fl"><a href="#"><i class="icon fl icon-am_7"></i><span class="fl" title="Charging Point">Charging Point</span></a></li>
            <li value="8" class="clearfix fl"><a href="#"><i class="icon fl icon-am_8"></i><span class="fl" title="Movie">Movie</span>
            </a></li>
            <li value="27" class="clearfix fl"><a href="#"><i class="icon fl icon-am_27"></i><span class="fl" title="Emergency Contact Number">Emergency Contact Nu...</span></a></li></ul>
            </div>
        </div>
   
  <div class="col-md-10" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-area-right ">
                        <!-- heloo -->
                    <div>
                      Vehichel No = <?php echo $_SESSION['vehicalNo']; ?><br>
                      Source = <?php echo $_SESSION['source']; ?><br>
                      Destination = <?php echo $_SESSION['destination']; ?><br>
                      Date = <?php echo $_SESSION['date']; ?><br>
                      Total Seats = <?php echo $_SESSION['Total_Seats']; ?><br>

                    </div>
                    <a href="#" id="showDetails" class="btn btn-success">View Seats</a>

                </div>
              </div>

            <div class="col-md-12">
                <div class="main-area-hidden">
                  <div style="float:left;"> 
                  <ul id="seatDescription">
                      <li style="background:url('img/available_seat_img.gif') no-repeat scroll 0 0 transparent;">Available Seat</li>
                      <li style="background:url('img/booked_seat_img.gif') no-repeat scroll 0 0 transparent;">Booked Seat</li>
                      <li style="background:url('img/selected_seat_img.gif') no-repeat scroll 0 0 transparent;">Selected Seat</li>
                  </ul>
                  </div>
                  <div style="clear:both;width:100%">
                      <input type="button" id="btnShowNew" value="Show Selected Seats" />
                      <!-- <-- <input type="button" id="btnShow" value="Show All" /> --> 
                      </div>
                      <div id="holder"> 
                        <ul  id="place">
                        </ul>    
                      </div>

                   </div>
          
     </div>
   </div>
              
</div> 





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

<!-- date picker -->
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
<!-- 
End date picker view -->

<!-- seat Selection script -->
<script>
  var settings = {
               rows: 4,
               cols: 10,
               rowCssPrefix: 'row-',
               colCssPrefix: 'col-',
               seatWidth: 35,
               seatHeight: 35,
               seatCss: 'seat',
               selectedSeatCss: 'selectedSeat',
               selectingSeatCss: 'selectingSeat'
           };
</script>

<script>
  var init = function (reservedSeat) {
                var str = [], seatNo, className;
                for (i = 0; i < settings.rows; i++) {
                    for (j = 0; j < settings.cols; j++) {
                        seatNo = (i + j * settings.rows + 1);
                        className = settings.seatCss + ' ' + settings.rowCssPrefix + i.toString() + ' ' + settings.colCssPrefix + j.toString();

                        if ($.isArray(reservedSeat) && $.inArray(seatNo, reservedSeat) != -1) {
                            className += ' ' + settings.selectedSeatCss;
                            
                        }
                        str.push('<li class="' + className + '"' +
                                  'style="top:' + (i * settings.seatHeight).toString() + 'px;left:' + (j * settings.seatWidth).toString() + 'px">' +
                                  '<a title="' + seatNo + '">' + seatNo + '</a>' +
                                  '</li>');
                    }
                }
                $('#place').html(str.join(''));
            };
            init();
            var bookedSeats = [5, 10, 25];
            init(bookedSeats);
</script>

<script>
  $('.' + settings.seatCss).click(function () {
if ($(this).hasClass(settings.selectedSeatCss)){
    alert('This seat is already reserved');
}
else{
    $(this).toggleClass(settings.selectingSeatCss);
    }
});
 
$('#btnShow').click(function () {
    var str = [];
    $.each($('#place li.' + settings.selectedSeatCss + ' a, #place li.'+ settings.selectingSeatCss + ' a'), function (index, value) {
        str.push($(this).attr('title'));
    });
    alert(str.join(','));
})
 
$('#btnShowNew').click(function () {
    var str = [], item;
    $.each($('#place li.' + settings.selectingSeatCss + ' a'), function (index, value) {
        item = $(this).attr('title');                   
        str.push(item);                   
    });
    alert(str.join(','));
})
</script>
<!-- end seat selection script -->
<script type="text/javascript" src="fireBase.js"></script>
<script type="text/javascript" src="login.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.7.2/firebase.js"></script>
<script type="text/javascript" src="js/homeTransition.js"></script>
<script type="text/javascript" src="js/busDetails.js"></script>


</body>
</html>




