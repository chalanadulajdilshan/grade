<!DOCTYPE html>
<?php
include '../class/include.php';
$STUDENT = new Student(NULL);
$LAST_ID = $STUDENT->getLastStudentId();
$LAST_ID = $LAST_ID + 1;
?>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Aswanna.edu.lk">
	<link rel="icon" href="images/favicon.ico">

	<title>Aswanna.edu.lk - Registration </title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="assets/vendors_css.css">
	<link href="assets/jquery.formValid.css" rel="stylesheet" type="text/css" />
	<link href="assets/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
	<link href="assets/preloarder/preloader.css" rel="stylesheet" type="text/css" />
	<!-- Style-->
	<link rel="stylesheet" href="assets/style.css">
	<link rel="stylesheet" href="assets/skin_color.css">

</head>

<body class="hold-transition theme-primary bg-img someBlock" style="background-image: url(images/auth-bg/bg-2.jpg)">

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded30 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Get started with Us</h2>
								<p class="mb-0">Register a new membership</p>
							</div>
							<div class="p-40">
								<form id="form">
									<div class="form-group">
										<lable>Full Name </lable>

										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											</div>
											<input type="text" class="form-control pl-15 bg-transparent" id="first_name" placeholder="Full Name" name="full_name" data-field="first_name">
											<div class="col-md-12">
												<div class="valid-message"></div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<lable>Phone Number </lable>

										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-mobile"></i></span>
											</div>
											<input type="text" class="form-control pl-15 bg-transparent phone-inputmask" placeholder="Mobile Number" name="phone_number" data-field="mobile_number">
											<div class="col-md-12">
												<div class="valid-message"></div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<lable>Select your grade </lable>

										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-book"></i></span>
											</div>
											<select class="form-control pl-15 bg-transparent" name="grade" id="grade">
												<option value=""> -- Select your grade -- </option>
												<?php
												$DEFULAT_DATA = new DefaultData(Null);
												foreach ($DEFULAT_DATA->Grades() as $KEY => $grade) {
												?>
													<option value="<?php echo $KEY ?>"><?php echo $grade ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<lable>Student ID </lable>

										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-key"></i></span>
											</div>
											<input type="text" class="form-control pl-15 bg-transparent" readonly value="<?php echo 'STU000' . $LAST_ID ?>" name="student_id">
											<div class="col-md-12">
												<div class="valid-message"></div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<lable>Password </lable>

										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" class="form-control pl-15 bg-transparent" data-field="password" name="password" placeholder="Password">
											<div class="col-md-12">
												<div class="valid-message"></div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="text-center text-danger btn-padding font-size-new" id="message"></div>
									</div>
									<div class="row">
										<div class="col-12">
											<div class="checkbox">
												<input type="checkbox" id="basic_checkbox_1">
												<label for="basic_checkbox_1">I agree to the <a href="#" class="text-warning"><b>Terms</b></a></label>
											</div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
											<button type="submit" class="btn btn-info margin-top-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									</div>
								</form>
								<div class="text-center">
									<p class="mt-15 mb-0">Already have an account?<a href="login.php" class="text-danger ml-5"> Sign In</a></p>
								</div>
							</div>
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

	<script src="ajax/js/registration.js"></script>

	<script src="js/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
	<script>
		$(function(e) {
			"use strict";
			$(".date-inputmask").inputmask("dd/mm/yyyy"),
				$(".phone-inputmask").inputmask("9999999999"),
				$(".email-inputmask").inputmask({
					mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[*{2,6}][*{1,2}].*{1,}[.*{2,6}][.*{1,2}]",
					greedy: !1,
					onBeforePaste: function(n, a) {
						return (e = e.toLowerCase()).replace("mailto:", "")
					},
					definitions: {
						"*": {
							validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~/-]",
							cardinality: 1,
							casing: "lower"
						}
					}
				})
		});
	</script>

</body>

</html>