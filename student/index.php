<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
$STUDENT = new Student($_SESSION['id']);
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/assetsimages/favicon.ico">

    <title>aswanna.edu.lk - Dashboard</title>

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
        <div class="content-wrapper" style="padding: 0px;">
            <div class="container-full">
                <section class="content">
                    <div class="row fx-element-overlay">
                        <div class="col-lg-8 col-12">
                            <div class="box pull-up">
                                <div class="box-body bg-img" style="background-image: url(images/bg-5.png);" data-overlay-light="9">
                                    <div class="d-lg-flex align-items-center justify-content-between">
                                        <div class="d-md-flex align-items-center mb-30 mb-lg-0 w-p100">
                                            <img src="images/svg-icon/color-svg/custom-14.svg" class="img-fluid max-w-150" alt="" />
                                            <div class="ml-30">
                                                <h4 class="mb-10">Take Advance Courses to Achive Your Goal !</h4>
                                                <p class="mb-0 text-fade">It is a long established fact that a reader will be distracted <br>of a page when looking at its layout. </p>
                                            </div>
                                        </div>
                                        <div>
                                            <button type="button" class="waves-effect waves-light btn-block btn btn-primary" style="white-space: nowrap;">Start Now!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <a href="#" class="box bg-danger bg-hover-danger pull-up">
                                <div class="box-body">
                                    <div class="d-flex align-items-center">
                                        <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center">
                                            <i class='bx bx-phone-call' style="font-size: 35px;"></i>
                                        </div>
                                        <div class="ml-10">
                                            <h4 class="text-white mb-0">+1 1234 456 789</h4>
                                            <h5 class="text-white-50 mb-0">Call for the any issues</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <?php
                        $SUBJECTS = new Subjects(NULL);
                        foreach ($SUBJECTS->getClassesByGrade(6) as $key => $subjects) {
                        ?>
                            <div class="col-lg-3 col-md-6 col-12">
                                <a href="class-view.php?id=<?php echo $subjects['id'] ?>">
                                    <div class="box">
                                        <div class="fx-card-item">
                                            <div class="fx-card-avatar fx-overlay-1"> <img src="../upload/Subjects/<?php echo $subjects['image_name'] ?>" alt="user" class="bbrr-0 bblr-0">
                                                <div class="fx-overlay">
                                                    <ul class="fx-info">
                                                        <li>
                                                            <span class="btn btn-danger no-border" href="javascript:void(0);">
                                                                Enroll Class
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fx-card-content">
                                                <h4 class="box-title mb-0"><?php echo $subjects['name'] ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </section>
            </div>
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar">

            <div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>
            <!-- Create the tabs -->
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
                                <img src="images/avatar/1.jpg" alt="...">
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
                                <img src="images/avatar/2.jpg" alt="...">
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
                                <img src="images/avatar/3.jpg" alt="...">
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
                                <img src="images/avatar/4.jpg" alt="...">
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
                                <img src="images/avatar/1.jpg" alt="...">
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
                                <img src="images/avatar/2.jpg" alt="...">
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
                                <img src="images/avatar/3.jpg" alt="...">
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
                                <img src="images/avatar/4.jpg" alt="...">
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
        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->




    <!-- Page Content overlay -->


    <!-- Vendor JS -->
    <script src="js/vendors.min.js"></script>
    <script src="js/pages/chat-popup.js"></script>
    <script src="assets/icons/feather-icons/feather.min.js"></script>

    <script src="assets/vendor_components/moment/min/moment.min.js"></script>
    <script src="assets/vendor_components/fullcalendar/fullcalendar.js"></script>

    <!-- EduAdmin App -->
    <script src="js/template.js"></script>
    <script src="js/pages/calendar.js"></script>

</body>

</html>