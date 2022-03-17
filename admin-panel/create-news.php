<!DOCTYPE html>
<?php
include '../class/include.php';
include 'auth.php';

?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../images/favicon.ico">

	<title>Aswanna.edu.lk - Create NEws </title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="assets/vendors_css.css">
	<link rel="stylesheet" href="assets/preloarder/preloarder.css">
	<link rel="stylesheet" href="assets/sweetalert/sweetalert.css">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

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
				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="box">
								<div class="box-header with-border">
									<h4 class="box-title">Create News</h4>
								</div>
								<!-- /.box-header -->
								<form id="form-data">
									<div class="box-body">

										<div class="form-group">
											<label>Title:</label>
											<input type="text" class="form-control" placeholder="Enter class title" name="title" id="title" autocomplete="off">
										</div>

										<div class="form-group">
											<label>Date:</label>
											<input type="text" class="form-control datepicker" placeholder="Enter class Date" name="date" id="date" autocomplete="off">
										</div>


										<div class="form-group">
											<label>News Image:</label>
											<input type="file" class="form-control" id="image_name" name="image_name">
										</div>

										<div class="form-group">
											<label>Short Description:</label>
											<input type="text" class="form-control" placeholder="Enter class title" name="short_description" id="short_description" autocomplete="off">
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
									<input type="hidden" name="create">
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
	<script src="ajax/js/news.js"></script>
	<script src="assets/sweetalert/sweetalert.min.js"></script>
	<script src="js/jquery.preloader.min.js"></script>

	<script src="tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$(function() {
			$(".datepicker").datepicker({
				dateFormat: 'yy-mm-dd'
			});

		});

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