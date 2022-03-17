<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Aswanna.edu.lk - Profile Chanage </title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="css/vendors_css.css">

    <!-- Style-->

    <!-- Vendors Style-->
    <link rel="stylesheet" href="assets/vendors_css.css">
    <link rel="stylesheet" href="assets/preloarder/preloarder.css">
    <link rel="stylesheet" href="assets/sweetalert/sweetalert.css">
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
                            <h3 class="page-title">Profile</h3>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">Extra</li>
                                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-12 col-lg-7 col-xl-8">

                            <div class="nav-tabs-custom">



                                <div class="box p-15">
                                    <form class="form-horizontal form-element col-12">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 control-label">Name</label>

                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputName" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPhone" class="col-sm-2 control-label">Phone</label>

                                            <div class="col-sm-10">
                                                <input type="tel" class="form-control" id="inputPhone" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="inputExperience" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputSkills" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="ml-auto col-sm-10">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="basic_checkbox_1" checked="">
                                                    <label for="basic_checkbox_1"> I agree to the</label>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Terms and Conditions</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="ml-auto col-sm-10">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <!-- /.nav-tabs-custom -->
                        </div>
                        <!-- /.col -->

                        <div class="col-12 col-lg-5 col-xl-4">
                            <div class="box box-widget widget-user">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-black" style="background: url('../images/gallery/full/10.jpg') center center;">
                                    <h3 class="widget-user-username">Michael Jorden</h3>
                                    <h6 class="widget-user-desc">Designer</h6>
                                </div>
                                <div class="widget-user-image">
                                    <img class="rounded-circle" src="images/user3-128x128.jpg" alt="User Avatar">
                                </div>
                                <div class="box-footer" style="margin-top: 20px;">
                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <p>Email :<span class="text-gray pl-10">David@yahoo.com</span> </p>
                                                <p>Phone :<span class="text-gray pl-10">+11 123 456 7890</span></p>
                                                <p>Address :<span class="text-gray pl-10">123, Lorem Ipsum, Florida, USA</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- Vendor JS -->
    <script src="js/vendors.min.js"></script>
    <script src="js/pages/chat-popup.js"></script>
    <script src="assets/icons/feather-icons/feather.min.js"></script>

    <!-- EduAdmin App -->
    <script src="js/template.js"></script>

    <script src="js/pages/timeline.js"></script>
    <!-- EduAdmin App -->
    <script src="assets/sweetalert/sweetalert.min.js"></script>
    <script src="js/jquery.preloader.min.js"></script>
    <script src="js/pages/data-table.js"></script>


</body>

</html>