<!DOCTYPE html>
 
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Aswanna.edu.lk">
	<link rel="icon" href="images/favicon.ico">

	<title>Aswanna.edu.lk - Reset Password</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="assets/vendors_css.css">
	<link href="assets/jquery.formValid.css" rel="stylesheet" type="text/css" />
	<link href="assets/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
	<link href="assets/preloarder/preloader.css" rel="stylesheet" type="text/css" />
	<!-- Style-->
	<link rel="stylesheet" href="assets/style.css">
	<link rel="stylesheet" href="assets/skin_color.css">

</head>

<body class="hold-transition theme-primary bg-img someBlock" style="background-image: url(images/auth-bg/bg-1.jpg)">

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded30 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Enter your Mobile Number</h2>
								<p class="mb-0">Please Check your Mobile and type the Mobile Number.</p>
							</div>
							<div class="p-40">
								<form id="form">
									<div class="form-group">
										<lable>Reset Code</lable>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="text" class="form-control pl-15 bg-transparent" placeholder="Please enter reset_code" name="reset_code" id="reset_code">
										</div>
									</div>

									<div class="form-group">
										<lable>New Password</lable>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" class="form-control pl-15 bg-transparent" placeholder="Please enter New Password" name="password" id="password">
										</div>
									</div>

									<div class="form-group">
										<lable>Confirm Password</lable>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" class="form-control pl-15 bg-transparent" placeholder="Please enter Confirm Password" name="confirmpassword" id="confirmpassword">
										</div>
									</div>

									<div class="row">
										<div class="col-6">
											<div class="checkbox">
												<input type="checkbox" id="basic_checkbox_1">
												<label for="basic_checkbox_1">Remember Me</label>
											</div>
										</div>

										  

										<div class="col-12 text-center">
											<button type="submit" class="btn btn-danger mt-10" id="change">Submit Now</button>
										</div>
										<input type="hidden" name="PasswordReset">
									</div>
								</form>
								<div class="text-center">
									<p class="mt-15 mb-0">Do you have an account? <a href="register.php" class="text-warning ml-5">Login</a></p>
								</div>
								<input type="hidden" id="student" value="<?php echo $id ?>">
							</div>
						</div>
						<div class="text-center">
							<p class="mt-20 text-white">- Sign With -</p>
							<p class="gap-items-2 mb-20">
								<a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
								<a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
								<a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	 

	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
	<script src="assets/icons/feather-icons/feather.min.js"></script>

	<script src="js/jquery.preloader.min.js"></script>
	<script src="js/jquery.formValid.js" type="text/javascript"></script>
	<script src="assets/sweetalert/sweetalert.min.js" type="text/javascript"></script>

	<script src="ajax/js/reset-password.js"></script>


</body>

</html>