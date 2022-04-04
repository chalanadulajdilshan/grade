<!DOCTYPE html>
<?php
include '../class/include.php';
include 'auth.php';

$id = '';
$id = $_GET['id'];

$SUBJECTS = new Subjects(NUll);
?>

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
							<h3 class="page-title">Manage Subjects</h3>
							<div class="d-inline-block align-items-center">
								<nav>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
										<li class="breadcrumb-item" aria-current="page">Home</li>
										<li class="breadcrumb-item active" aria-current="page">Manage Subjects</li>
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
						foreach ($SUBJECTS->getClassesByGrade($id) as $key => $subjects) {
						?>
							<div class="col-md-12 col-lg-4">
								<div class="card">
									<img class="card-img-top" src="../upload/Subjects/<?php echo $subjects['image_name'] ?>" alt="<?php echo $subjects['name'] ?>">
									<div class="card-body">
										<h4 class="card-title text-center"><b><?php echo $subjects['name'] ?></b></h4>
									</div>

									<div class="card-footer   d-flex">
										<a href="edit-subjects.php?id=<?php echo $subjects['id'] ?>">
											<i class="  bx bx-edit-alt edit-btn edit-btn-sty"></i>
										</a> |
										<a href="create-zoom-class.php?id=<?php echo $subjects['id'] ?>">
											<i class='bx bxl-internet-explorer edit-btn-sty'></i>
										</a> |
										<a href="create-video-lessons.php?id=<?php echo $subjects['id'] ?>">
											<i class='bx bxs-videos edit-btn-sty'></i> 
										</a>
									</div>

								</div>
							</div>

						<?php } ?>

				</section>
				<!-- /.content -->
			</div>
		</div>
	</div>


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