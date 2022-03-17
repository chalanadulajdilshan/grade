<!DOCTYPE html>
<?php
include '../class/include.php';
include 'auth.php';

$id = '';
$id = $_GET['id'];
?>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../images/favicon.ico">

	<title>AswennaColllage - Manage Students </title>

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
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="col-12">
								<div class="box">
									<div class="box-header with-border">
										<h3 class="box-title">Manage Students in <?php

																					$DEFULAT_DATA = new DefaultData();
																					foreach ($DEFULAT_DATA->Grades() as $key => $grades) {
																						if ($key == $id) {
																					?>
													<span style="color: red;"><b><?php echo $grades; ?></b></span>
											<?php }
																					} ?>

										</h3>
									</div>
									<!-- /.box-header -->
									<div class="box-body">
										<div class="table-responsive">
											<table id="example1" class="table table-bordered table-striped">
												<thead>
													<tr>
														<th>Id#</th>
														<th>Student Id</th>
														<th>Full Name</th>
														<th>Mobile Number</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$STUDENT = new Student(null);
													foreach ($STUDENT->getStudentByGrade($id) as $key => $student) {
														$key++;
													?>

														<tr>
															<td><?php echo $key; ?></td>
															<td><?php echo $student['student_id']; ?></td>
															<td><?php echo $student['full_name']; ?></td>

															<td><?php echo $student['phone_number']; ?></td>
															<td><?php echo $student['student_id']; ?></td>

														</tr>
													<?php } ?>
												</tbody>
												<tfoot>
													<tr>
														<th>Id#</th>
														<th>Student Id</th>
														<th>Full Name</th>
														<th>Mobile Number</th>
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
	<!-- EduAdmin App -->
	<script src="js/template.js"></script>

	<script src="js/pages/data-table.js"></script>

</body>

</html>