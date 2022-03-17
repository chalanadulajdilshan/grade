<!DOCTYPE html>

<?php
include '../class/include.php';

$id = '';
$id = $_GET['id'];
$SUBJECT = new Subjects($id);

date_default_timezone_set("Asia/Calcutta");
$today_time = date('Y-m-d H:i');
$today = date('Y-m-d');
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Aswanna.edu.lk - Dashboard Tab UI </title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="assets/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="assets/style.css">

    <link rel="stylesheet" href="assets/style.css">

    <!-- <link rel="stylesheet" href="assets/jquery.classycountdown.min.css"> -->
    <link rel="stylesheet" href="assets/countdown/demo/css/demo.css" type="text/css">
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
                            <h3 class="page-title">Tabs</h3>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">Home</li>
                                        <li class="breadcrumb-item active" aria-current="page">Manage Class</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">

                    <!-- tabs -->

                    <div class="row">

                        <!-- /.col -->
                        <div class="col-12">
                            <div class="box box-default">

                                <!-- /.box-header -->
                                <div class="box-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-fill" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home11" role="tab"><span><i class="ion-home"></i></span> <span class="hidden-xs-down ml-15">Online Class</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile11" role="tab"><span><i class="ion-person"></i></span> <span class="hidden-xs-down ml-15">Video Lessons</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages11" role="tab"><span><i class="ion-email"></i></span> <span class="hidden-xs-down ml-15">Messages</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#setting11" role="tab"><span><i class="ion-settings"></i></span> <span class="hidden-xs-down ml-15">Setting</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#about11" role="tab"><span><i class="ion-person"></i></span> <span class="hidden-xs-down ml-15">About</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#contact11" role="tab"><span><i class="ion-camera"></i></span> <span class="hidden-xs-down ml-15">Contact</span></a> </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content tabcontent-border">
                                        <div class="tab-pane active" id="home11" role="tabpanel">
                                            <div class="align-items-center d-flex flex-column p-15 p-15" style="margin-top: 20px;;">
                                                <h4 class="text-center text-danger"><b>WAITING FOR YOUR NEXT ONLINE CLASS SESSION..!</b></h4>
                                                <div class="countdown countdown-container container">
                                                    <div class="clock row">
                                                        <div class="clock-item clock-days countdown-time-value col-sm-6 col-md-3">
                                                            <div class="wrap">
                                                                <div class="inner">
                                                                    <div id="canvas-days" class="clock-canvas"></div>

                                                                    <div class="text">
                                                                        <p class="val">0</p>
                                                                        <p class="type-days type-time">DAYS</p>
                                                                    </div><!-- /.text -->
                                                                </div><!-- /.inner -->
                                                            </div><!-- /.wrap -->
                                                        </div><!-- /.clock-item -->

                                                        <div class="clock-item clock-hours countdown-time-value col-sm-6 col-md-3">
                                                            <div class="wrap">
                                                                <div class="inner">
                                                                    <div id="canvas-hours" class="clock-canvas"></div>

                                                                    <div class="text">
                                                                        <p class="val">0</p>
                                                                        <p class="type-hours type-time">HOURS</p>
                                                                    </div><!-- /.text -->
                                                                </div><!-- /.inner -->
                                                            </div><!-- /.wrap -->
                                                        </div><!-- /.clock-item -->

                                                        <div class="clock-item clock-minutes countdown-time-value col-sm-6 col-md-3">
                                                            <div class="wrap">
                                                                <div class="inner">
                                                                    <div id="canvas-minutes" class="clock-canvas"></div>

                                                                    <div class="text">
                                                                        <p class="val">0</p>
                                                                        <p class="type-minutes type-time">MINUTES</p>
                                                                    </div><!-- /.text -->
                                                                </div><!-- /.inner -->
                                                            </div><!-- /.wrap -->
                                                        </div><!-- /.clock-item -->

                                                        <div class="clock-item clock-seconds countdown-time-value col-sm-6 col-md-3">
                                                            <div class="wrap">
                                                                <div class="inner">
                                                                    <div id="canvas-seconds" class="clock-canvas"></div>

                                                                    <div class="text">
                                                                        <p class="val">0</p>
                                                                        <p class="type-seconds type-time">SECONDS</p>
                                                                    </div><!-- /.text -->
                                                                </div><!-- /.inner -->
                                                            </div><!-- /.wrap -->
                                                        </div><!-- /.clock-item -->
                                                    </div><!-- /.clock -->
                                                </div><!-- /.countdown-wrapper -->

                                            </div>
                                        </div>
                                        <div class="tab-pane" id="profile11" role="tabpanel">
                                            <div class="p-15">
                                                <div class="box">

                                                    <iframe width="100%" height="580" src="//www.youtube.com/embed/jFGKJBPFdUA?controls=0&modestbranding=0&showinfo=0&fs=0" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="messages11" role="tabpanel">
                                            <div class="p-15">
                                                <h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
                                                <h3>Donec vitae laoreet neque, id convallis ante.</h3>
                                                <p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="setting11" role="tabpanel">
                                            <div class="p-15">
                                                <h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
                                                <p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
                                                <h3>Donec vitae laoreet neque, id convallis ante.</h3>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="about11" role="tabpanel">
                                            <div class="p-15">
                                                <p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
                                                <h3>Donec vitae laoreet neque, id convallis ante.</h3>
                                                <h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="contact11" role="tabpanel">
                                            <div class="p-15">
                                                <h3>Donec vitae laoreet neque, id convallis ante.</h3>
                                                <p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
                                                <h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->



                    </div>
                    <!-- /.row -->
                    <!-- END tabs -->

                </section>
                <!-- /.content -->
            </div>
        </div>

        <div class="control-sidebar-bg"></div>
    </div>



    <!-- Vendor JS -->
    <script src="js/vendors.min.js"></script>
    <script src="js/pages/chat-popup.js"></script>
    <script src="assets/icons/feather-icons/feather.min.js"></script>
    <!-- EduAdmin App -->
    <script src="js/template.js"></script>

    <!-- <script src="assets/jquery.classycountdown.min.css"></script> -->
    <script>
        document.onkeydown = function(e) {
            if (event.keyCode == 123) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                return false;
            }
        }
    </script>
    <!-- <script src="https://code.jquery.com/jquery-latest.min.js"></script> -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="assets/countdown/demo/js/kinetic.js"></script>
    <script type="text/javascript" src="assets/countdown/jquery.final-countdown.js"></script>
    <script type="text/javascript">
        $(function() {
            $('.countdown').final_countdown({
                'start': "<?= strtotime("now") ?>",
                'end': "<?= strtotime($ONLINE_CLASS->start_date . " " . $ONLINE_CLASS->start_time) ?>",
                'now': "<?= strtotime("now") ?>"
            }, function() {
                console.log('finished');
                location.href = './zoom/'
            });
        });
    </script>
</body>

</html>