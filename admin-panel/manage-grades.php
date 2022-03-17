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

	<title>Aswanna.edu.lk - Manage Grades </title>

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
					<div class="row" style="margin-top: 100px;">
						<?php
						$DEFULTDATA = new DefaultData();
						foreach ($DEFULTDATA->Grades() as $key => $grade) {
						?>

							<div class="col-md-4" style="margin-bottom: 30px;">
								<a href="manage-subjects.php?id=<?php echo $key ?>">
									<div class="card card-body card-inverse card-primary text-center">
										<blockquote class="card-bodyquote">
											<h1><?php echo $grade ?></h1>

										</blockquote>
									</div>
								</a>
							</div>

						<?php } ?>
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