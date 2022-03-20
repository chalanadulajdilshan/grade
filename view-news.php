<!DOCTYPE html>
<?php
include "./class/include.php";

$id = '';
$id = $_GET['id'];
$NEWSES = new News($id);

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <title>Aswanna.edu.lk - News View</title>
    <!-- Vendors Style-->
    <link rel="stylesheet" href="assets/css/vendors_css.css">
    <!-- Style-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/skin_color.css">
</head>

<body class="theme-primary">
    <!-- The social media icon bar -->
    <?php include_once(dirname(__FILE__) . '/header_view_pages.php'); ?>
    <!---page Title --->
    <section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(assets/images/front-end-img/background/bg-8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="page-title text-white"><?php echo $NEWSES->title ?></h2>
                        <ol class="breadcrumb bg-transparent justify-content-center">
                            <li class="breadcrumb-item"><a href="index.php" class="text-white-50">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page"><?php echo $NEWSES->title ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page content -->
    <section class="py-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="blog-post mb-30">
                        <div class="entry-image clearfix">
                            <img class="img-fluid" src="assets/images/front-end-img/courses/1f.jpg" alt="">
                        </div>
                        <div class="blog-detail">

                            <div class="entry-title mb-10">
                                <a href="#" class="fs-24"><?php echo $NEWSES->title ?></a>
                            </div>
                            <hr>
                            <div class="entry-content">
                                <p>
                                    <?php echo $NEWSES->description ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-12">
                    <div class="side-block px-20 py-10 bg-white">

                        <div class="widget clearfix">
                            <h4 class="pb-15 mb-15 bb-1">Other News</h4>
                            <div class="media-list media-list-divided">
                                <?php
                                $NEWS = new News(NULL);
                                foreach ($NEWS->all() as $news) {
                                ?>
                                    <a class="px-0 media media-single" href="view-news.php?id=<?php echo $news['id']; ?>">
                                        <span class="title ms-0"><?php echo $news['title']; ?> </span>
                                        <span class="mx-0 badge badge-secondary-light">View More</span>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once(dirname(__FILE__) . '/footer.php'); ?>
    <!-- Vendor JS -->
    <script src="assets/js/vendors.min.js"></script>
    <!-- Corenav Master JavaScript -->
    <script src="assets/corenav-master/coreNavigation-1.1.3.js"></script>
    <script src="assets/js/nav.js"></script>
    <script src="assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
    <script src="assets/vendor_components/OwlCarousel2/dist/owl.carousel.js"></script>
    <!-- EduLearn front end -->
    <script src="assets/js/template.js"></script>
    <script src="assets/js/pages/widget.js"></script>
</body>

</html>