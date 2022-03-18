<!DOCTYPE html>
<?php
include "./class/include.php";

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Aswanna.edu.lk">
    <link rel="icon" href="assets/images/favicon.ico">
    <title>Aswanna.edu.lk - News</title>
    <!-- Vendors Style-->
    <link rel="stylesheet" href="assets/css/vendors_css.css">
    <!-- Style-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/skin_color.css">
</head>

<body class="theme-primary">
    <?php include_once(dirname(__FILE__) . '/header_view_pages.php'); ?>
    <!---page Title --->
    <section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(assets/images/front-end-img/background/bg-8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="page-title text-white">Latest News</h2>
                        <ol class="breadcrumb bg-transparent justify-content-center">
                            <li class="breadcrumb-item"><a href="#" class="text-white-50">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Latest News</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page content -->
    <section class="bg-white py-50" data-aos="fade-up">
        <div class="container">
            <div class="row mt-30">
                <div class="col-12">
                    <div class="px-15 pt-15">
                        <div class="row">
                            <?php
                            $NEWS =  new News(NULL);
                            foreach ($NEWS->all() as $news) {
                            ?>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="box">
                                        <a href="view-news.php?id=<?php echo $news['id']; ?>">
                                            <img class="card-img-top" src="upload/news/<?php echo $news['image_name'] ?>" alt="aswanna.edu.lk">
                                        </a>
                                        <div class="box-body">
                                            <div class="text-start">
                                                <h4 class="box-title"><?php echo $news['title'] ?></h4>
                                                <p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> <?php echo $news['date'] ?></p>
                                                <p class="box-text">
                                                    <?php echo $news['short_description'] ?>
                                                </p>
                                                <a href="view-news.php?id=<?php echo $news['id']; ?>" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
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