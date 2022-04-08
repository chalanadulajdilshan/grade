<?php
include '../../class/include.php';
include '../auth.php';


$id = '';
$id = $_GET['id'];

$zm = '';
$zm = $_GET['zm'];

$SUBJECT = new Subjects($id);
$ZOOM_CLASS = new ZoomClass($zm);

$STUDENT = new Student($_SESSION['id']);

?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful.">
    <meta name="keywords" content="admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Zoom Class - aswanna.edu.lk</title>

    <!-- END: Page CSS-->

    <!-- Vendors Style-->
    <link rel="stylesheet" href="../assets/vendors_css.css">
    <link href="../assets/jquery.formValid.css" rel="stylesheet" type="text/css" />
    <link href="../assets/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="../assets/preloarder/preloader.css" rel="stylesheet" type="text/css" />
    <!-- Style-->
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/skin_color.css">

    <style>
        .sdk-select {
            height: 34px;
            border-radius: 4px;
        }

        .websdktest button {
            float: right;
            margin-left: 5px;
        }

        #nav-tool {
            margin-bottom: 0px;
        }

        #show-test-tool {
            position: absolute;
            top: 100px;
            left: 0;
            display: block;
            z-index: 99999;
        }




        .message-item {

            max-width: 100% !important;
            background-color: transparent !important;
        }

        #websdk-iframe {
            width: 700px;
            height: 500px;
            border: 1px;
            border-color: red;
            border-style: dashed;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            left: 50%;
            margin: 0;
        }

        #zmmtg-root {
            width: 100%;
            height: 100%;
            position: relative !important;
            top: 0;
            left: 0;
            background-color: transparent !important;
        }

        .tooltipcopy {
            position: relative;
            display: inline-block;
        }

        .tooltipcopy .tooltipcopytext {
            visibility: hidden;
            width: 150px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 120%;
            left: 50%;
            margin-left: -70px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltipcopy .tooltipcopytext::after {
            content: "";
            position: absolute;
            top: 100%;
            right: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        .tooltipcopy:hover .tooltipcopytext {
            visibility: visible;
            opacity: 1;
        }

        .main-add-btn:hover {
            cursor: pointer;
        }

        .paragraph-info {
            text-align: justify;
        }

        @media (min-width:566px) and (max-width:1069px) {

            .paragraph-info {
                max-width: 55%;
            }
        }

        html,
        body {
            min-width: min-content !important;
            font-size: 1rem !important;
            font-weight: 400 !important;
            line-height: 1.4 !important;
            color: #727E8C !important;
        }

        #__vconsole {
            display: none
        }
    </style>

</head>
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <?php include '../header.php' ?>

    <div class="app-content content">
        <div class="content-wrapper">
            <section id="content-types">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-xl-8 col-md-8 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="p-40">


                                        <form method="post" class="demo-form-wrapper card ">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" name="display_name" id="display_name" value="<?= $STUDENT->full_name ?>" maxLength="100" placeholder="Name" class="form-control" required readonly="">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" value="tes" maxLength="100" placeholder="Name" class="form-control" required readonly="">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" value="tes" maxLength="100" placeholder="Name" class="form-control" required readonly="">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" value="test" maxLength="100" placeholder="Name" class="form-control" required readonly="">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" value="test" maxLength="100" placeholder="Name" class="form-control" required readonly="">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group" style="display: none">
                                                    <input type="text" name="meeting_number" id="meeting_number" value="<?= $ZOOM_CLASS->meeting_id ?>" maxLength="200" placeholder="Meeting Number" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group" style="display: none">
                                                    <input type="text" name="meeting_pwd" id="meeting_pwd" value="<?= $ZOOM_CLASS->password ?>" maxLength="32" placeholder="Meeting Password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12" style="display: none">
                                                <div class="form-group">
                                                    <input type="text" name="meeting_email" id="meeting_email" value="" maxLength="32" placeholder="Email option" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12" style="display: none">
                                                <div class="form-group">
                                                    <select id="meeting_role" class="sdk-select">
                                                        <option value=0 selected="true">Attendee</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12" style="display: none">
                                                <div class="form-group  ">
                                                    <select id="meeting_china" class="sdk-select">
                                                        <option value=0>Global</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12" style="display: none">
                                                <div class="form-group  ">
                                                    <select id="meeting_lang" class="sdk-select">
                                                        <option value="en-US">English</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <div class="ml-auto">
                                                            <input type="hidden" value="" id="copy_link_value" />
                                                            <button type="submit" class="btn btn-primary btn-block invoice-send-btn" id="join_meeting">Join The Online Lesson</button>
                                                            <button type="submit" class="btn btn-primary" style="display: none" id="clear_all">Clear</button>

                                                        </div>

                                                        <!-- Echo your System parameters here  name = student name , video = meeting id , password = meeting password -->
                                                        <input type="hidden" value="<?php echo $STUDENT->full_name ?>" id="name">
                                                        <input type="hidden" value="<?= $ZOOM_CLASS->meeting_id ?>" id="video">
                                                        <input type="hidden" value="<?= $ZOOM_CLASS->password ?>" id="password">
 

                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-2"></div>
                </div>
            </section>
        </div>
    </div>


    <script src="../js/vendors.min.js"></script>
    <script src="../js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>

    <script src="../js/jquery.preloader.min.js"></script>
    <script src="../js/jquery.formValid.js" type="text/javascript"></script>
    <script src="../assets/sweetalert/sweetalert.min.js" type="text/javascript"></script>

    <script src="https://source.zoom.us/2.3.5/lib/vendor/react.min.js"></script>
    <script src="https://source.zoom.us/2.3.5/lib/vendor/react-dom.min.js"></script>
    <script src="https://source.zoom.us/2.3.5/lib/vendor/redux.min.js"></script>
    <script src="https://source.zoom.us/2.3.5/lib/vendor/redux-thunk.min.js"></script>
    <script src="https://source.zoom.us/2.3.5/lib/vendor/lodash.min.js"></script>
    <script src="https://source.zoom.us/zoom-meeting-2.3.5.min.js"></script>
    <script src="js/tool.js"></script>
    <script src="js/vconsole.min.js"></script>
    <script src="js/index.js"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<!-- 
    <script src="js/tool.js"></script>
    <script src="js/vconsole.min.js"></script>
    <script src="js/index.js"></script> -->
    <!--End Zoom Code Segments -->


    <script>
        $(document).ready(function() {

            var name = $("#name").val();
            var video = $("#video").val();
            var password = $("#password").val();


            $("#display_name").val(name);
            $("#meeting_number").val(video);
            $("#meeting_pwd").val(password);
        });
    </script>


</body>

</html>