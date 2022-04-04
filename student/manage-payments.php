<!DOCTYPE html>
<?php
include '../class/include.php';
include 'auth.php';

date_default_timezone_set("Asia/Calcutta");
$month = date('M');

$STUDENT = new Student($_SESSION['id'])
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
	<link rel="stylesheet" href="assets/preloarder/preloader.css">
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
							<div class="box">
								<div class="box-header with-border">
									<h4 class="box-title">Uploard Your Payments Slip</h4>
								</div>
								<form id="form-data">
									<div class="box-body">

										<div class="form-group">
											<label>Student Id:</label>
											<input type="text" class="form-control" value="<?php echo $STUDENT->student_id ?>" readonly>
										</div>

										<div class="form-group">
											<label>Student Name:</label>
											<input type="text" class="form-control" value="<?php echo $STUDENT->full_name ?>" readonly>
										</div>

										<div class="form-group">
											<label>Month:</label>
											<input type="text" class="form-control  " placeholder="Enter Start date" name="date" id="start_date" value="<?php echo $month ?>">
										</div>

										<div class="form-group">
											<label>Uploard Slip:</label>
											<input type="file" class="form-control" name="slip_image" id="slip_image">
										</div>
									</div>

									<div class="box-footer">
										<input type="submit" class="btn btn-rounded btn-success pull-right" style="float: right;margin-bottom: 10px;" id="addPayment" value="Create" />
									</div>
									<input type="hidden" name="student_id" value="1">
								</form>
							</div>
						</div>
					</div>
				</section>

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
														<th>Id</th>
														<th>Month Name</th>
														<th>Payment date and time</th>
														<th>Approved</th>
														<th>Slip</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$PAYMENT = new Payment(NULL);
													foreach ($PAYMENT->all() as $key => $payments) {
														$key++;
														$month = date("M",strtotime($payments['date_and_time']));
													?>
														<tr>
															<td>0<?php echo $key ?></td>
															<td><?php echo $month ?></td>
															<td><?php echo $payments['date_and_time'] ?></td>
															<?php
															if ($payments['status'] == 0) {
															?>
																<td class="text-danger">Not Approved</td>
															<?php } else { ?>

																<td class="text-success">Approved</td>
															<?php } ?>

															<td><a href="../upload/payments/<?php echo $payments['slip_image'] ?>" target="_blank">View Slip</a></td>

														</tr>
													<?php } ?>
												</tbody>
												<tfoot>
													<tr>
														<th>Id</th>
														<th>Month Name</th>
														<th>Slip Uploard Date & Time</th>
														<th>Approved</th>
														<th>Slip</th>
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
	</div>
	<!-- ./wrapper -->


	<!-- Vendor JS -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="ajax/js/payment.js"></script>
	<script src="js/vendors.min.js"></script>


	<script src="js/pages/chat-popup.js"></script>
	<script src="assets/icons/feather-icons/feather.min.js"></script>
	<script src="assets/vendor_components/datatable/datatables.min.js"></script>

	<script src="js/template.js"></script>
	<script src="assets/sweetalert/sweetalert.min.js"></script>
	<script src="js/jquery.preloader.min.js"></script>
	<script src="js/pages/data-table.js"></script>


</body>

</html>