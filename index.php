<?php
	if(isset($_COOKIE['book_email'])){
		header("Location: http://localhost/bookstore.php");
		exit();
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="stuff/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stuff/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stuff/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stuff/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stuff/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="stuff/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stuff/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stuff/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="stuff/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="stuff/css/util.css">
	<link rel="stylesheet" type="text/css" href="stuff/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('stuff/images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					BOOKSTORE<br>Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="/login.php" method="post">

					<div class="wrap-input100 validate-input" data-validate = "Enter Email address">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
				<br>
				<b>Don't have an account ? <a href="signup.php">Create your account</a>.</b>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="stuff/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="stuff/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="stuff/vendor/bootstrap/js/popper.js"></script>
	<script src="stuff/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="stuff/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="stuff/vendor/daterangepicker/moment.min.js"></script>
	<script src="stuff/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="stuff/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="stuff/js/main.js"></script>

</body>
</html>
