<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
$ZOOMCLASS = new ZoomClass(Null);
$classes = $ZOOMCLASS->getClasses();
?>
<script>
    let events = <?= json_encode($classes) ?>
</script>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Aswanna.edu.lk - Dashboard Calendar</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="assets/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/skin_color.css">
    <link rel="stylesheet" type="text/css" href="plugin/calendar/fullcalendar@5.7.0.min.css">
   

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>

        <?php include 'header.php' ?>

        <!---->
        <div class="content-wrapper">
            <div class="container-full">
              

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <div id="calendar"></div>
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
    <script src="assets/vendor_components/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/vendor_components/perfect-scrollbar-master/perfect-scrollbar.jquery.min.js"></script>
    <!-- <script src="assets/vendor_components/fullcalendar/lib/moment.min.js"></script> -->
    <!-- <script src="assets/vendor_components/fullcalendar/fullcalendar.min.js"></script> -->
    <script src="plugin/calendar/moment.min.js"></script>
    <script src="plugin/calendar/fullcalendar@5.7.0.min.js"></script>
    <!-- EduAdmin App -->
    <script src="js/template.js"></script>

    <!-- <script src="js/pages/calendar.js"></script> -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var calendarEl = document.getElementById("calendar");
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: "dayGridMonth",
                initialDate: new Date(),
                selectable: true,
                height: 600,
                dayMaxEventRows: true, // for all non-TimeGrid views
                // display : "list-item",
                views: {
                    timeGrid: {
                        dayMaxEventRows: 6, // adjust to 6 only for timeGridWeek/timeGridDay
                    },
                },
                headerToolbar: {
                    left: "prev,next today",
                    center: "title",
                    right: "dayGridMonth,timeGridWeek,timeGridDay",
                },
                dateClick: function(info) {
                    // location.replace();
                },
                events: [...events],
            });
            calendar.render();
        });
    </script>
</body>

</html>