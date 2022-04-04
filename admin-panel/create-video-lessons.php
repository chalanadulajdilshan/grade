<!DOCTYPE html>
<?php
include '../class/include.php';
include 'auth.php';

$id = '';
$id = $_GET['id'];
$SUBJECT = new Subjects($id);
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../images/favicon.ico">

	<title>Aswanna.edu.lk - Create Video Lessons </title>

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

		<div class="content-wrapper">
			<div class="container-full">
				<section class="content">
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="box">
								<div class="box-header with-border">
									<h4 class="box-title">Add <b> <?php echo $SUBJECT->name ?> </b> - Video Lessons</h4>
								</div>
								<form id="form-data">
									<div class="box-body">

										<div class="form-group">
											<label>Subject Name:</label>
											<input type="text" class="form-control" placeholder="Enter Lesson title" value="<?php echo $SUBJECT->name ?>" readonly>
										</div>
										<div class="form-group">
											<label>Lesson Title:</label>
											<input type="text" class="form-control" placeholder="Enter Lesson title" name="title" id="title" autocomplete="off">
										</div>
										<div class="form-group">
											<label>Video URL:</label>
											<input type="text" class="form-control" placeholder="Enter video url" name="url" id="url" autocomplete="off">
										</div>

										<div class="form-group">
											<label>Video Passcode:</label>
											<input type="text" class="form-control" placeholder="Enter video passcode" name="passcode" id="passcode" autocomplete="off">
										</div>
									</div>

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
										<h3 class="box-title">Manage Video Lessons
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
														<th>Video URL</th>
														<th>Passcode</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$VIDEOLESSONS = new VideoLessons(null);
													foreach ($VIDEOLESSONS->getVideoLessonsBySubjectId($id) as $key => $video_lessons) {
														$key++;
													?>

														<tr  id="div<?php echo $video_lessons['id'] ?>" >
															<td><?php echo $key; ?></td>
															<td><?php echo $video_lessons['title']; ?></td>
															<td><?php echo $video_lessons['url']; ?></td>
															<td><?php echo $video_lessons['passcode']; ?></td>
															<td>
																<a href="edit-video-lessons.php?id=<?php echo $video_lessons['id']; ?>">
																	<i class="  bx bx-edit-alt edit-btn edit-btn-sty"></i>
																</a> |
																<a href="#" class="  delete-video" data-id="<?php echo $video_lessons['id']; ?>">
																	<i class='bx bx-trash  delete-btn-sty'></i>
																</a> 
															</td>

														</tr>
													<?php } ?>
												</tbody>
												<tfoot>
													<tr>
														<th>Id#</th>
														<th>Title</th>
														<th>Video URL</th>
														<th>Passcode</th>
														<th>Action</th>
													</tr>
												</tfoot>
											</table>
										</div>
									</div>
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
	<script src="delete/js/video.js"></script>

	<script src="tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</body>

</html>