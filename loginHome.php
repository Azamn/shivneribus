<!-- <!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form action="login.php" method="post">
	<label>Enter Your Mobile No</label>
	<input type="text" name="mobile" placeholder="Enter Your userNamme">
	<label>Enter password</label>
	<input type="password" name="password" placeholder="Enter password">
	<button type="submit" name="submit" value="Registration">Login</button>
	</form>
</body>
</html> -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<script type="text/javascript" src="js/loginregister.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="content" style="text-align: center;">
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
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="login.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="number" name="mobile" id="mobile" tabindex="1" class="form-control" placeholder="Enter Mobile No." value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Enter Password">
									</div>
									<!-- <div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div> -->
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="registrationProcess.php" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="name" id="username" tabindex="1" class="form-control" placeholder="Enter Your Name" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Enter Your Email Address" value="">
									</div>
									<div class="form-group">
										<input type="number" name="mobile" id="mobile" tabindex="2" class="form-control" placeholder="Enter Your mobile No.">
										
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Enter Your Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>