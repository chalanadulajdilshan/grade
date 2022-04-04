<!DOCTYPE html>
<?php
include '../class/include.php';
include 'auth.php';

$id = '';
$id = $_GET['id'];
$VIDEOLESSON = new VideoLessons($id);
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../images/favicon.ico">

	<title>Aswanna.edu.lk - Edit Video Lessons </title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="assets/vendors_css.css">
	<link rel="stylesheet" href="assets/preloarder/preloarder.css">
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

		<div class="content-wrapper">
			<div class="container-full">
				<section class="content">
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="box">
								<div class="box-header with-border">
									<h4 class="box-title">Add <b> <?php echo $VIDEOLESSON->title ?> </b> - Video Lessons</h4>
								</div>
								<form id="form-data">
									<div class="box-body">

										<div class="form-group">
											<label>Subject Name:</label>
											<input type="text" class="form-control" placeholder="Enter Lesson title" value="<?php
																															$SUBJECT = new Subjects($VIDEOLESSON->subject_id);
																															echo $SUBJECT->name ?>" readonly>
										</div>

										<div class="form-group">
											<label>Lesson Titile:</label>
											<input type="text" class="form-control" placeholder="Enter Lesson title" name="title" id="title" value="<?php echo $VIDEOLESSON->title  ?>">
										</div>
										<div class="form-group">
											<label>Video URL:</label>
											<input type="text" class="form-control" placeholder="Enter Video url" name="url" id="url" autocomplete="off" value="<?php echo $VIDEOLESSON->url ?>">
										</div>

										<div class="form-group">
											<label>Passcode:</label>
											<input type="text" class="form-control" placeholder="Enter Video passcode" name="passcode"   autocomplete="off" value="<?php echo $VIDEOLESSON->passcode ?>">
										</div>

									</div>
									<!-- /.box-body -->
									<div class="box-footer">
										<button type="submit" class="btn btn-rounded btn-success pull-right" style="float: right;margin-bottom: 10px;" id="update">Update</button>
									</div>
									<input type="hidden" name="id" value="<?php echo $id ?>">
									<input type="hidden" name="update">
								</form>
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
	<script src="js/pages/chat-popup.js"></script>
	<script src="assets/icons/feather-icons/feather.min.js"></script>

	<!-- EduAdmin App -->
	<script src="js/template.js"></script>
	<script src="assets/sweetalert/sweetalert.min.js"></script>
	<script src="js/jquery.preloader.min.js"></script>
	<script src="assets/vendor_components/datatable/datatables.min.js"></script>
	<script src="js/pages/data-table.js"></script>


	<script src="ajax/js/video-lessons.js"></script>
	<script src="tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</body>

</html>