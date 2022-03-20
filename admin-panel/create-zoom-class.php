<!DOCTYPE html>
<?php
include '../class/include.php';
include 'auth.php';


$id = '';
$id = $_GET['id'];
$SUBJECTS = new Subjects($id);
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../images/favicon.ico">

	<title>Aswanna.edu.lk - Create Zoom Online lessons  </title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="assets/vendors_css.css">
	<link rel="stylesheet" href="assets/preloarder/preloader.css">
	<link rel="stylesheet" href="assets/sweetalert/sweetalert.css">

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<!-- Style-->
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

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
				<!-- Main content -->

				<section class="content">
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="box">
								<div class="box-header with-border">
									<h4 class="box-title">Create <?php echo $SUBJECTS->name ?> Zoom Online Lessons</h4>
								</div>
								<form id="form-data">
									<div class="box-body">

										<div class="form-group">
											<label>Lesson Titile:</label>
											<input type="text" class="form-control" placeholder="Enter Lesson title" name="title" id="title" autocomplete="off">
										</div>

										<div class="form-group">
											<label>Start Date:</label>
											<input type="text" class="form-control datepicker" placeholder="Enter Start date" name="start_date" id="start_date" autocomplete="off">
										</div>


										<div class="form-group">
											<label>Start Time:</label>
											<input type="text" class="form-control timepicker" placeholder="Enter Start time" name="start_time" id="start_time" autocomplete="off">
										</div>

										<div class="form-group">
											<label>Meeting Id:</label>
											<input type="text" class="form-control" placeholder="Enter Meeting Id" name="meeting_id" id="meeting_id" autocomplete="off">
										</div>


										<div class="form-group">
											<label>Password:</label>
											<input type="text" class="form-control" placeholder="Enter Password" name="password" id="password" autocomplete="off">
										</div>

										<div class="form-group">
											<label>Description:</label>
											<textarea id="description" name="description" class="form-control" autocomplete="off"></textarea>

										</div>

									</div>
									<!-- /.box-body -->
									<div class="box-footer">
										<button type="submit" class="btn btn-rounded btn-success pull-right" style="float: right;margin-bottom: 10px;" id="create">Create</button>
									</div>
									<input type="hidden" name="subject_id" value="<?php echo $id ?>">
									<input type="hidden" name="create">
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
										<h3 class="box-title">Manage Zoom Online Lessons

										</h3>
									</div>
									<!-- /.box-header -->
									<div class="box-body">
										<div class="table-responsive">
											<table id="example1" class="table table-bordered table-striped">
												<thead>
													<tr>
														<th>Id#</th>
														<th>Title</th>
														<th>Start Date</th>
														<th>Start Time</th>
														<th>Meeting Id</th>
														<th>Password</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$ZOOMCLASSES = new ZoomClass(null);
													foreach ($ZOOMCLASSES->getOnlineClassBySubjectId($id) as $key => $lessons) {
														$key++;
													?>

														<tr>
															<td><?php echo $key; ?></td>
															<td><?php echo $lessons['title']; ?></td>
															<td><?php echo $lessons['start_date']; ?></td>

															<td><?php echo $lessons['start_time']; ?></td>
															<td><?php echo $lessons['meeting_id']; ?></td>
															<td><?php echo $lessons['password']; ?></td>
															<td>
																<a href="edit-lessons.php?id=<?php echo $lessons['id']; ?>">
																	<i class="  bx bx-edit-alt edit-btn edit-btn-sty"></i>
																</a>
																<a href="create-video-lessons.php?id=<?php echo $lessons['id'] ?>">
																	<i class="  bx bx-book edit-btn edit-btn-sty"></i>
																</a>

															</td>

														</tr>
													<?php } ?>
												</tbody>
												<tfoot>
													<tr>
														<th>Id#</th>
														<th>Title</th>
														<th>Start Date</th>
														<th>Start Time</th>
														<th>Meeting Id</th>
														<th>Password</th>
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
	</div>
	<!-- ./wrapper -->



	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
  

	<!-- EduAdmin App -->
	<script src="js/template.js"></script>
	<script src="assets/sweetalert/sweetalert.min.js"></script>
	<script src="js/jquery.preloader.min.js"></script>
	<script src="assets/vendor_components/datatable/datatables.min.js"></script>
	<script src="js/pages/data-table.js"></script>


	<script src="ajax/js/zoom_class.js"></script>
	<script src="tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$(function() {
			$(".datepicker").datepicker({
				dateFormat: 'yy-mm-dd'
			});

		});


		$('.timepicker').timepicker({
			timeFormat: 'h:mm p',
			interval: 30,
			defaultTime: '11',
			dynamic: false,
			dropdown: true,
			scrollbar: true
		});
	</script>
	<script>
		tinymce.init({
			selector: "#description",
			// ===========================================
			// INCLUDE THE PLUGIN
			// ===========================================

			plugins: [
				"advlist autolink lists link image charmap print preview anchor",
				"searchreplace visualblocks code fullscreen",
				"insertdatetime media table contextmenu paste"
			],
			// ===========================================
			// PUT PLUGIN'S BUTTON on the toolbar
			// ===========================================

			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
			// ===========================================
			// SET RELATIVE_URLS to FALSE (This is required for images to display properly)
			// ===========================================

			relative_urls: false

		});
	</script>

</body>

</html>