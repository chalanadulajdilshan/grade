<!DOCTYPE html>
<?php
include '../class/include.php';
include 'auth.php';

$id = '';
$id = $_GET['id'];

$TUTION_CLASSES = new TutionClass($id);

?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../images/favicon.ico">

	<title>Aswenna.edu.lk - Manage Classes </title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="assets/vendors_css.css">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
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
				<!-- Content Header (Page header) -->
				<div class="content-header">
					<div class="d-flex align-items-center">
						<div class="mr-auto">
							<h3 class="page-title">Manage CLasess</h3>
							<div class="d-inline-block align-items-center">
								<nav>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
										<li class="breadcrumb-item" aria-current="page">Home</li>
										<li class="breadcrumb-item active" aria-current="page"><?php echo $TUTION_CLASSES->name ?></li>
									</ol>
								</nav>
							</div>
						</div>

					</div>
				</div>

				<!-- Main content -->
				<section class="content">


					<div class="row">
						<?php
						foreach ($TUTION_CLASSES->getClassesByGrade($id) as $key => $tutionclass) {
						?>
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<img class="card-img-top" src="../upload/classes/<?php echo $tutionclass['image_name'] ?>" alt="Card image cap">
									<div class="card-body">
										<h4 class="card-title text-center"><b><?php echo $tutionclass['name'] ?></b></h4>
									</div>

									<div class="card-footer   d-flex">
										<a href="edit-class.php?id=<?php echo $tutionclass['id'] ?>">
											<i class="  bx bx-edit-alt edit-btn edit-btn-sty"></i>
										</a> |
										<a href="create-lessons.php?id=<?php echo $tutionclass['id'] ?>">
											<i class="  bx bx-edit-alt edit-btn edit-btn-sty"></i>
										</a>
									</div>

								</div>
							</div>

						<?php } ?>

				</section>
				<!-- /.content -->
			</div>
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="pull-right d-none d-sm-inline-block">
				<ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0)">FAQ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Purchase Now</a>
					</li>
				</ul>
			</div>
			&copy; 2020 <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
		</footer>
		<!-- Control Sidebar -->
		<aside class="control-sidebar">

			<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div> <!-- Create the tabs -->
			<ul class="nav nav-tabs control-sidebar-tabs">
				<li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab" class="active"><i class="mdi mdi-message-text"></i></a></li>
				<li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<!-- Home tab content -->
				<div class="tab-pane active" id="control-sidebar-home-tab">
					<div class="flexbox">
						<a href="javascript:void(0)" class="text-grey">
							<i class="ti-more"></i>
						</a>
						<p>Users</p>
						<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
					</div>
					<div class="lookup lookup-sm lookup-right d-none d-lg-block">
						<input type="text" name="s" placeholder="Search" class="w-p100">
					</div>
					<div class="media-list media-list-hover mt-20">
						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-success" href="#">
								<img src="../images/avatar/1.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="font-size-16">
									<a class="hover-primary" href="#"><strong>Tyler</strong></a>
								</p>
								<p>Praesent tristique diam...</p>
								<span>Just now</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-danger" href="#">
								<img src="../images/avatar/2.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="font-size-16">
									<a class="hover-primary" href="#"><strong>Luke</strong></a>
								</p>
								<p>Cras tempor diam ...</p>
								<span>33 min ago</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-warning" href="#">
								<img src="../images/avatar/3.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="font-size-16">
									<a class="hover-primary" href="#"><strong>Evan</strong></a>
								</p>
								<p>In posuere tortor vel...</p>
								<span>42 min ago</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-primary" href="#">
								<img src="../images/avatar/4.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="font-size-16">
									<a class="hover-primary" href="#"><strong>Evan</strong></a>
								</p>
								<p>In posuere tortor vel...</p>
								<span>42 min ago</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-success" href="#">
								<img src="../images/avatar/1.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="font-size-16">
									<a class="hover-primary" href="#"><strong>Tyler</strong></a>
								</p>
								<p>Praesent tristique diam...</p>
								<span>Just now</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-danger" href="#">
								<img src="../images/avatar/2.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="font-size-16">
									<a class="hover-primary" href="#"><strong>Luke</strong></a>
								</p>
								<p>Cras tempor diam ...</p>
								<span>33 min ago</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-warning" href="#">
								<img src="../images/avatar/3.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="font-size-16">
									<a class="hover-primary" href="#"><strong>Evan</strong></a>
								</p>
								<p>In posuere tortor vel...</p>
								<span>42 min ago</span>
							</div>
						</div>

						<div class="media py-10 px-0">
							<a class="avatar avatar-lg status-primary" href="#">
								<img src="../images/avatar/4.jpg" alt="...">
							</a>
							<div class="media-body">
								<p class="font-size-16">
									<a class="hover-primary" href="#"><strong>Evan</strong></a>
								</p>
								<p>In posuere tortor vel...</p>
								<span>42 min ago</span>
							</div>
						</div>

					</div>

				</div>
				<!-- /.tab-pane -->
				<!-- Settings tab content -->
				<div class="tab-pane" id="control-sidebar-settings-tab">
					<div class="flexbox">
						<a href="javascript:void(0)" class="text-grey">
							<i class="ti-more"></i>
						</a>
						<p>Todo List</p>
						<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
					</div>
					<ul class="todo-list mt-20">
						<li class="py-15 px-5 by-1">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_1" class="filled-in">
							<label for="basic_checkbox_1" class="mb-0 h-15"></label>
							<!-- todo text -->
							<span class="text-line">Nulla vitae purus</span>
							<!-- Emphasis label -->
							<small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
							<!-- General tools such as edit or delete-->
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_2" class="filled-in">
							<label for="basic_checkbox_2" class="mb-0 h-15"></label>
							<span class="text-line">Phasellus interdum</span>
							<small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5 by-1">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_3" class="filled-in">
							<label for="basic_checkbox_3" class="mb-0 h-15"></label>
							<span class="text-line">Quisque sodales</span>
							<small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_4" class="filled-in">
							<label for="basic_checkbox_4" class="mb-0 h-15"></label>
							<span class="text-line">Proin nec mi porta</span>
							<small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5 by-1">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_5" class="filled-in">
							<label for="basic_checkbox_5" class="mb-0 h-15"></label>
							<span class="text-line">Maecenas scelerisque</span>
							<small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_6" class="filled-in">
							<label for="basic_checkbox_6" class="mb-0 h-15"></label>
							<span class="text-line">Vivamus nec orci</span>
							<small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5 by-1">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_7" class="filled-in">
							<label for="basic_checkbox_7" class="mb-0 h-15"></label>
							<!-- todo text -->
							<span class="text-line">Nulla vitae purus</span>
							<!-- Emphasis label -->
							<small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
							<!-- General tools such as edit or delete-->
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_8" class="filled-in">
							<label for="basic_checkbox_8" class="mb-0 h-15"></label>
							<span class="text-line">Phasellus interdum</span>
							<small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5 by-1">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_9" class="filled-in">
							<label for="basic_checkbox_9" class="mb-0 h-15"></label>
							<span class="text-line">Quisque sodales</span>
							<small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li class="py-15 px-5">
							<!-- checkbox -->
							<input type="checkbox" id="basic_checkbox_10" class="filled-in">
							<label for="basic_checkbox_10" class="mb-0 h-15"></label>
							<span class="text-line">Proin nec mi porta</span>
							<small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
							<div class="tools">
								<i class="fa fa-edit"></i>
								<i class="fa fa-trash-o"></i>
							</div>
						</li>
					</ul>
				</div>
				<!-- /.tab-pane -->
			</div>
		</aside>
		<!-- /.control-sidebar -->

		<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->


	<!-- Page Content overlay -->


	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
	<script src="assets/icons/feather-icons/feather.min.js"></script>
	<script src="assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
	<script src="assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>

	<!-- EduAdmin App -->
	<script src="js/template.js"></script>



</body>

</html>