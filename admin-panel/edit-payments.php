<!DOCTYPE html>
<?php
include '../class/include.php';
//include 'auth.php';

date_default_timezone_set("Asia/Calcutta");
$month = date('M');
$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$PAYMENT = new Payment($id);
$STUDENT = new Student($PAYMENT->student_id);
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Aswanna.edu.lk - Manage Payments </title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="assets/vendors_css.css">
    <link rel="stylesheet" href="assets/preloarder/preloarder.css">
    <link rel="stylesheet" href="assets/sweetalert/sweetalert.css">
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
                <section class="content">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">View Payment</h4>
                                </div>
                                <form id="form-data">
                                    <div class="box-body">

                                        <div class="form-group">
                                            <label>Student Name:</label>
                                            <input type="text" class="form-control" value="<?= $STUDENT->full_name ?>" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label>Month:</label>
                                            <input type="text" class="form-control" value="<?= $PAYMENT->date_and_time ?>" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label>Payment status:</label>
                                            <select name="status" class="form-control">
                                                <option value=""> Select Payment Status </option>
                                                <option value="0" <?= $PAYMENT->status == '0' ? 'selected' : '' ?> > Pending </option>
                                                <option value="2" <?= $PAYMENT->status == '2' ? 'selected' : '' ?> > Decline </option>
                                                <option value="1" <?= $PAYMENT->status == '1' ? 'selected' : '' ?> > Approve </option>
                                            </select> 
                                        </div>

                                        <div class="form-group">
                                            <label>Uploard Slip:</label>
                                            <img src="../upload/payments/<?= $PAYMENT->image_name ?>" class="img-responsive img-thumbnail" alt="">
                                        </div>
                                    </div>

                                    <div class="box-footer">
                                        <input type="submit" class="btn btn-rounded btn-success pull-right" style="float: right;margin-bottom: 10px;" id="paymentStatus" value="Change Status" />
                                        <input type="hidden" name="student_id" value="1">
                                        <input type="hidden" name="id" value="<?= $PAYMENT->id ?>">
                                    </div>
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
    <script src="assets/vendor_components/datatable/datatables.min.js"></script>

    <script src="ajax/js/payment.js"></script>

    <!-- EduAdmin App -->
    <script src="js/template.js"></script>
    <script src="assets/sweetalert/sweetalert.min.js"></script>
    <script src="js/jquery.preloader.min.js"></script>
    <script src="js/pages/data-table.js"></script>

</body>

</html>