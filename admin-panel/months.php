<?php
include '../class/include.php';
include 'auth.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../images/favicon.ico">

	<title>Aswanna.edu.lk - Manage Months </title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="assets/vendors_css.css">

	<!-- Style-->
	<link rel="stylesheet" href="assets/style.css">
	<link rel="stylesheet" href="assets/skin_color.css">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

	<div class="wrapper">
		<div id="loader"></div>

		<?php include 'header.php' ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<div class="container-full">
				<section class="content">
					<div class="row" style="margin-top: 50px;">

						<div class="col-md-4">
							<a href="manage-payments.php?id=<?= $_GET['id'] ?>&month=1">
								<img src="images/january.jpg">
							</a>
						</div>

						<div class="col-md-4">
							<a href="manage-classes.php?id=<?= $_GET['id'] ?>&month=2">
								<img src="images/FEBRUARY.jpg">
							</a>
						</div>
						<div class="col-md-4">
							<a href="manage-classes.php?id=<?= $_GET['id'] ?>&month=3">
								<img src="images/MARCH.jpg">
							</a>
						</div>
						<div class="col-md-4">
							<a href="manage-classes.php?id=<?= $_GET['id'] ?>&month=4">
								<img src="images/APRIL.jpg">
							</a>
						</div>
						<div class="col-md-4">
							<a href="manage-classes.php?id=<?= $_GET['id'] ?>&month=5">
								<img src="images/MAY.jpg">
							</a>
						</div>
						<div class="col-md-4">
							<a href="manage-classes.php?id=<?= $_GET['id'] ?>&month=6">
								<img src="images/JUNE.jpg">
							</a>
						</div>
						<div class="col-md-4">
							<a href="manage-classes.php?id=<?= $_GET['id'] ?>&month=7">
								<img src="images/JULY.jpg">
							</a>
						</div>
						<div class="col-md-4">
							<a href="manage-classes.php?id=<?= $_GET['id'] ?>&month=8">
								<img src="images/AUGUST.jpg">
							</a>
						</div>
						<div class="col-md-4">
							<a href="manage-classes.php?id=<?= $_GET['id'] ?>&month=9">
								<img src="images/SEPTEMBER.jpg">
							</a>
						</div>
						<div class="col-md-4">
							<a href="manage-classes.php?id=<?= $_GET['id'] ?>&month=10">
								<img src="images/OCTOMBER.jpg">
							</a>
						</div>
						<div class="col-md-4">
							<a href="manage-classes.php?id=<?= $_GET['id'] ?>&month=11">
								<img src="images/NOVEMBER.jpg">
							</a>
						</div>
						<div class="col-md-4">
							<a href="manage-classes.php?id=<?= $_GET['id'] ?>&month=12">
								<img src="images/DECEMBER.jpg">
							</a>
						</div>
				</section>
			</div>
		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- ./wrapper -->


	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
	<script src="assets/icons/feather-icons/feather.min.js"></script>
	<script src="assets/vendor_components/datatable/datatables.min.js"></script>
	<!-- EduAdmin App -->
	<script src="js/template.js"></script>

	<script src="js/pages/data-table.js"></script>

</body>

</html>