<!DOCTYPE html>
<?php
include '../class/include.php';
//include 'auth.php';

date_default_timezone_set("Asia/Calcutta");
$month = date('M');
?>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../images/favicon.ico">

	<title>Aswanna.edu.lk - Manage Payments </title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="assets/vendors_css.css">
	<link rel="stylesheet" href="assets/preloarder/preloarder.css">
	<link rel="stylesheet" href="assets/sweetalert/sweetalert.css">
	<!-- Style-->
	<link rel="stylesheet" href="assets/style.css">
	<link rel="stylesheet" href="assets/skin_color.css">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed someBlock">

	<div class="wrapper">
		<div id="loader"></div>

		<?php include 'header.php' ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<div class="container-full">

				<section class="content">
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="col-12">
								<div class="box">
									<div class="box-header with-border">
										<h3 class="box-title">Manage Student Payments </h3>
									</div>
									<!-- /.box-header -->
									<div class="box-body">
										<div class="table-responsive">
											<table id="example1" class="table table-bordered table-striped">
												<thead>
													<tr>
														<th>Id#</th>
														<th>Student Name</th>
														<th>Month Name</th>
														<th>Payment date and time</th>
														<th>Approved</th>
														<th>Slip</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$PAYMENT = new Payment(NULL);
													foreach ($PAYMENT->all() as $key => $payments) {
														$key++;
													?>
														<tr>
															<td>#0<?php echo $key ?></td>
															<td><?php echo $payments['date_and_time'] ?></td>
															<td><?php echo $payments['date_and_time'] ?></td>
															<td><?php echo $payments['date_and_time'] ?></td>
															<?php
															if ($payments['status'] == 0) {
															?>
																<td class="text-danger">Not Approved</td>
															<?php } else { ?>

																<td class="text-success">Approved</td>
															<?php } ?>

															<td><a href="#">View Slip</a></td>
															<td><a href="edit-payments.php?id=<?= $payments["id"] ?>" class="btn btn-warning btn-sm">Edit</a></td>

														</tr>
													<?php } ?>
												</tbody>
												<tfoot>
													<tr>
														<th>Id#</th>
														<th>Student Name</th>
														<th>Month Name</th>
														<th>Slip Uploard Date & Time</th>
														<th>Approved</th>
														<th>Slip</th>
                                                        <th>Action</th>
													</tr>
												</tfoot>
											</table>
										</div>
									</div>
									<!-- /.box-body -->
								</div>
							</div>
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

	<script src="ajax/js/payment.js"></script>

	<!-- EduAdmin App -->
	<script src="js/template.js"></script>
	<script src="assets/sweetalert/sweetalert.min.js"></script>
	<script src="js/jquery.preloader.min.js"></script>
	<script src="js/pages/data-table.js"></script>

</body>

</html>