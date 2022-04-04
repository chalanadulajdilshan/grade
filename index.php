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
   <title>Aswanna.edu.lk - Home Page</title>
   <!-- Vendors Style-->
   <link rel="stylesheet" href="assets/css/vendors_css.css">
   <!-- Style-->
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/skin_color.css">
</head>

<body class="theme-primary">
   <!-- The social media icon bar -->
   <?php include_once(dirname(__FILE__) . '/header.php'); ?>

   <section class="bg-img pt-200 pb-150" data-overlay-light="2" style="background-image: url(assets/images/front-end-img/banners/banner-1.jpg); background-position: top center;">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="text-center mt-80">
                  <h1 class="box-title mb-30">Find Your Online Course</h1>
               </div>
               <form class="cours-search mb-30">
                  <div class="input-group">
                     <input type="text" class="form-control" placeholder="What do you want to learn today?">
                     <button class="btn btn-primary" type="submit">Search</button>
                  </div>
               </form>
               <div class="text-center">
                  <a href="courses_list.html" class="btn btn-primary-light">Browse Courses List</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- <section class="bg-transparent">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
               <div class="uni_box ovr_top">
                  <div class="row align-items-center m-0">
                     <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12">
                        <div class="uni_tags">
                           <h4>Over 70+ University Cources in one place</h4>
                        </div>
                     </div>
                     <div class="col-xl-10 col-lg-9 col-md-8 col-sm-12">
                        <div class="owl-carousel owl-theme" data-nav-arrow="false" data-nav-dots="false" data-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="2">
                           <div class="item"><img src="assets/images/front-end-img/unilogo/uni-1.jpg" class="img-fluid" alt=""></div>
                           <div class="item"><img src="assets/images/front-end-img/unilogo/uni-2.jpg" class="img-fluid" alt=""></div>
                           <div class="item"><img src="assets/images/front-end-img/unilogo/uni-3.jpg" class="img-fluid" alt=""></div>
                           <div class="item"><img src="assets/images/front-end-img/unilogo/uni-4.jpg" class="img-fluid" alt=""></div>
                           <div class="item"><img src="assets/images/front-end-img/unilogo/uni-5.jpg" class="img-fluid" alt=""></div>
                           <div class="item"><img src="assets/images/front-end-img/unilogo/uni-6.jpg" class="img-fluid" alt=""></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <section class="py-50" data-aos="fade-up">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-6">
               <div class="mb-md-0 mb-30 p-30 bg-primary-light rounded">
                  <div class="d-flex justify-content-between align-items-center">
                     <div>
                        <span class="badge badge-danger">Free</span>
                        <h3 class="my-20">
                           <a href="courses_details.html">Business Manegement <br> Document</a>
                        </h3>
                        <a href="courses_list.html" class="btn btn-primary">View Courses</a>
                     </div>
                     <div>
                        <img src="assets/images/front-end-img/about/banner-img-1.png" class="img-fluid" alt="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 col-md-6">
               <div class="p-30 bg-info-light rounded">
                  <div class="d-flex justify-content-between align-items-center">
                     <div>
                        <span class="badge badge-danger">new</span>
                        <h3 class="my-20">
                           <a href="courses_details.html">Online Courses <br>From Edulearn University</a>
                        </h3>
                        <a href="courses_list.html" class="btn btn-primary">Find Out More</a>
                     </div>
                     <div>
                        <img src="assets/images/front-end-img/about/banner-img-2.png" class="img-fluid" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="py-50 bg-white" data-aos="fade-up">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-7 col-12 text-center">
               <h1 class="mb-15">Classes Categories</h1>
               <hr class="w-100 bg-primary">
            </div>
         </div>
         <div class="row mt-30 justify-content-center">

            <?php
            $DEFAULTDATA = new DefaultData();
            foreach ($DEFAULTDATA->Grades() as $key => $grades) {
            ?>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                  <div class="courses_wrap style_2">
                     <a href="#" class="courses_box">
                        <div class="courses_icon"><?php echo $key ?></div>
                        <div class="courses_caption"><span><?php echo $grades ?></span></div>
                        <div class="courses_count"><span>View More</span></div>
                     </a>
                  </div>
               </div>
            <?php } ?>

         </div>
      </div>
   </section>

   <section class="py-50 bg-white" data-aos="fade-up">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-7 col-12 text-center">
               <h1 class="mb-15">Our Clasess</h1>
               <hr class="w-100 bg-primary">
            </div>
         </div>


         <div class="row mt-30">
            <div class="col-12">

               <div class="px-15 pt-15">
                  <div class="row">
                     <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                           <a href="#">
                              <img class="card-img-top" src="assets/images/01.jpg" alt="aswenna.edu.lk">
                           </a>

                           <div class="card-body" style="margin: 0px;">
                              <h3 class="card-title" style="margin: 0px;"><b>සිංහල පන්තිය</b></h3>
                              <div class="d-flex justify-content-between" style="float: right;">
                                 <span class="badge badge-success mb-10 " style="margin: 0px;font-size:14px;">View More</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                           <a href="#">
                              <img class="card-img-top" src="assets/images/02.jpg" alt="Card image cap">
                           </a>

                           <div class="card-body" style="margin: 0px;">
                              <h3 class="card-title" style="margin: 0px;"><b>ගණිතය පන්තිය</b></h3>
                              <div class="d-flex justify-content-between" style="float: right;">
                                 <span class="badge badge-success mb-10 " style="margin: 0px;font-size:14px;">View More</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                           <a href="#">
                              <img class="card-img-top" src="assets/images/03.jpg" alt="Card image cap">
                           </a>

                           <div class="card-body" style="margin: 0px;">
                              <h3 class="card-title" style="margin: 0px;"><b>විද්‍යාව පන්තිය</b></h3>
                              <div class="d-flex justify-content-between" style="float: right;">
                                 <span class="badge badge-success mb-10 " style="margin: 0px;font-size:14px;">View More</span>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                           <a href="#">
                              <img class="card-img-top" src="assets/images/04.jpg" alt="Card image cap">
                           </a>

                           <div class="card-body" style="margin: 0px;">
                              <h3 class="card-title" style="margin: 0px;"><b>ඉංග්‍රීසි පන්තිය</b></h3>
                              <div class="d-flex justify-content-between" style="float: right;">
                                 <span class="badge badge-success mb-10 " style="margin: 0px;font-size:14px;">View More</span>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                           <a href="#">
                              <img class="card-img-top" src="assets/images/05.jpg" alt="Card image cap">
                           </a>

                           <div class="card-body" style="margin: 0px;">
                              <h3 class="card-title" style="margin: 0px;"><b>බුද්ධ ධර්මය පන්තිය</b></h3>
                              <div class="d-flex justify-content-between" style="float: right;">
                                 <span class="badge badge-success mb-10 " style="margin: 0px;font-size:14px;">View More</span>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                           <a href="#">
                              <img class="card-img-top" src="assets/images/06.jpg" alt="Card image cap">
                           </a>

                           <div class="card-body" style="margin: 0px;">
                              <h3 class="card-title" style="margin: 0px;"><b>සෞඛ්‍ය පන්තිය</b></h3>
                              <div class="d-flex justify-content-between" style="float: right;">
                                 <span class="badge badge-success mb-10 " style="margin: 0px;font-size:14px;">View More</span>
                              </div>
                           </div>
                        </div>
                     </div>

                     

                     <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                           <a href="#">
                              <img class="card-img-top" src="assets/images/08.jpg" alt="Card image cap">
                           </a>

                           <div class="card-body" style="margin: 0px;">
                              <h3 class="card-title" style="margin: 0px;"><b>දෙමළ පන්තිය</b></h3>
                              <div class="d-flex justify-content-between" style="float: right;">
                                 <span class="badge badge-success mb-10 " style="margin: 0px;font-size:14px;">View More</span>
                              </div>
                           </div>
                        </div>

                     </div>
                     <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                           <a href="#">
                              <img class="card-img-top" src="assets/images/09.jpg" alt="Card image cap">
                           </a>

                           <div class="card-body" style="margin: 0px;">
                              <h3 class="card-title" style="margin: 0px;"><b>ඉතිහාසය පන්තිය</b></h3>
                              <div class="d-flex justify-content-between" style="float: right;">
                                 <span class="badge badge-success mb-10 " style="margin: 0px;font-size:14px;">View More</span>
                              </div>
                           </div>
                        </div>

                     </div>
                     <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                           <a href="#">
                              <img class="card-img-top" src="assets/images/10.jpg" alt="Card image cap">
                           </a>

                           <div class="card-body" style="margin: 0px;">
                              <h3 class="card-title" style="margin: 0px;"><b>පුරවැසි අධ්‍යාපනය පන්තිය</b></h3>
                              <div class="d-flex justify-content-between" style="float: right;">
                                 <span class="badge badge-success mb-10 " style="margin: 0px;font-size:14px;">View More</span>
                              </div>
                           </div>
                        </div>

                     </div>
                     <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                           <a href="#">
                              <img class="card-img-top" src="assets/images/11.jpg" alt="Card image cap">
                           </a>

                           <div class="card-body" style="margin: 0px;">
                              <h3 class="card-title" style="margin: 0px;"><b>භූගෝල විද්‍යාව පන්තිය</b></h3>
                              <div class="d-flex justify-content-between" style="float: right;">
                                 <span class="badge badge-success mb-10 " style="margin: 0px;font-size:14px;">View More</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                           <a href="#">
                              <img class="card-img-top" src="assets/images/07.jpg" alt="Card image cap">
                           </a>

                           <div class="card-body" style="margin: 0px;">
                              <h3 class="card-title" style="margin: 0px;"><b>තොරතුරු හා සන්නිවේදනය තාක්ශණය පන්තිය</b></h3>
                              <div class="d-flex justify-content-between" style="float: right;">
                                 <span class="badge badge-success mb-10 " style="margin: 0px;font-size:14px;">View More</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="py-50" data-aos="fade-up">
      <div class="container">
         <div class="row align-items-center justify-content-between mb-5">
            <div class="col-md-5 col-sm-12" data-aos="fade-up">
               <div class="cpt-tx">
                  <h2 class="mb-3">We Have The Best Online Education in The City</h2>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique</p>
                  <div class="mb-3 me-4 ms-lg-0 me-lg-4">
                     <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-primary-light p-2 small d-flex align-items-center justify-content-center">
                           <i class="fa fa-check"></i>
                        </div>
                        <h6 class="mb-0 ms-3">Full lifetime access</h6>
                     </div>
                  </div>
                  <div class="mb-3 me-4 ms-lg-0 me-lg-4">
                     <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-primary-light p-2 small d-flex align-items-center justify-content-center">
                           <i class="fa fa-check"></i>
                        </div>
                        <h6 class="mb-0 ms-3">20+ downloadable resources</h6>
                     </div>
                  </div>
                  <div class="mb-3 me-4 ms-lg-0 me-lg-4">
                     <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-primary-light p-2 small d-flex align-items-center justify-content-center">
                           <i class="fa fa-check"></i>
                        </div>
                        <h6 class="mb-0 ms-3">Certificate of completion</h6>
                     </div>
                  </div>
                  <div class="mb-3 me-4 ms-lg-0 me-lg-4">
                     <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-primary-light p-2 small d-flex align-items-center justify-content-center">
                           <i class="fa fa-check"></i>
                        </div>
                        <h6 class="mb-0 ms-3">Free Trial 7 Days</h6>
                     </div>
                  </div>
                  <div class="text-start mt-4"><a href="#" class="btn btn-primary">Enrolled Today</a></div>
               </div>
            </div>
            <div class="col-md-6 col-sm-12" data-aos="fade-up">
               <div class="mt-30 mt-md-0">
                  <img src="assets/images/front-end-img/about/about-img.png" class="img-fluid" alt="">
               </div>
            </div>
         </div>
         <div class="mt-50 row align-items-center justify-content-between">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up">
               <div class="mb-30 mb-md-0">
                  <img src="assets/images/front-end-img/about/4f.png" class="img-fluid" alt="">
               </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12" data-aos="fade-up">
               <div class="cpt-tx">
                  <ol class="list-unstyled p-0">
                     <li class="d-flex align-items-start my-3 my-md-4">
                        <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-primary">
                           <div class="position-absolute text-white h5 mb-0">1</div>
                        </div>
                        <div class="ms-3 ms-md-4">
                           <h4>Create account</h4>
                           <p>
                              Oluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
                           </p>
                        </div>
                     </li>
                     <li class="d-flex align-items-start my-3 my-md-4">
                        <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-primary">
                           <div class="position-absolute text-white h5 mb-0">3</div>
                        </div>
                        <div class="ms-3 ms-md-4">
                           <h4>Join Membership</h4>
                           <p>
                              Error sit voluptatem actium doloremque laudantium, totam rem aperiam, eaque ipsa.
                           </p>
                        </div>
                     </li>
                     <li class="d-flex align-items-start my-3 my-md-4">
                        <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-primary">
                           <div class="position-absolute text-white h5 mb-0">3</div>
                        </div>
                        <div class="ms-3 ms-md-4">
                           <h4>Start Learning</h4>
                           <p>
                              Error sit voluptatem actium doloremque laudantium, totam rem aperiam, eaque ipsa.
                           </p>
                        </div>
                     </li>
                     <li class="d-flex align-items-start my-3 my-md-4">
                        <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-primary">
                           <div class="position-absolute text-white h5 mb-0">4</div>
                        </div>
                        <div class="ms-3 ms-md-4">
                           <h4>Get Certificate</h4>
                           <p>
                              Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
                           </p>
                        </div>
                     </li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="bg-white py-50" data-aos="fade-up">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-7 col-12 text-center">
               <h1 class="mb-15">Latest News. </h1>
               <hr class="w-100 bg-primary">
            </div>
         </div>
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
                              <a href="#">
                                 <img class="card-img-top" src="upload/news/<?php echo $news['image_name'] ?>" alt="aswanna.edu.lk">
                              </a>
                              <div class="box-body">
                                 <div class="text-start">
                                    <h4 class="box-title"><?php echo $news['title'] ?></h4>
                                    <p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> <?php echo $news['date'] ?></p>
                                    <p class="box-text">
                                       <?php echo $news['short_description'] ?>
                                    </p>
                                    <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
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


   <section class="py-50 bg-img countnm-bx" style="background-image: url(assets/images/front-end-img/background/bg-3.jpg)" data-overlay="5" data-aos="fade-up">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
               <div class="text-center">
                  <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
                     <span class="text-white fs-40 icon-User"><span class="path1"></span><span class="path2"></span></span>
                  </div>
                  <h1 class="countnm my-10 text-white fw-300">5428</h1>
                  <div class="text-uppercase text-white">Teachers</div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
               <div class="text-center">
                  <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
                     <span class="text-white fs-40 icon-Book"></span>
                  </div>
                  <h1 class="countnm my-10 text-white fw-300">120</h1>
                  <div class="text-uppercase text-white">Courses</div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
               <div class="text-center">
                  <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
                     <span class="text-white fs-40 icon-Group"><span class="path1"></span><span class="path2"></span></span>
                  </div>
                  <h1 class="countnm my-10 text-white fw-300">7485</h1>
                  <div class="text-uppercase text-white">Student</div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
               <div class="text-center">
                  <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
                     <span class="text-white fs-40 icon-Globe"><span class="path1"></span><span class="path2"></span></span>
                  </div>
                  <h1 class="countnm my-10 text-white fw-300">100</h1>
                  <div class="text-uppercase text-white">Country</div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="py-50" data-aos="fade-up">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-7 col-12 text-center">
               <h1 class="mb-15">Reviews & Ratings</h1>
               <hr class="w-100 bg-primary">
            </div>
         </div>
         <div class="row mt-30">
            <div class="col-12">
               <div class="owl-carousel owl-theme" data-nav-arrow="true" data-nav-dots="true" data-items="2" data-md-items="2" data-sm-items="2" data-xs-items="1" data-xx-items="1">
                  <div class="item">
                     <div class="testimonial-bx">
                        <div class="testimonial-thumb">
                           <img src="assets/images/front-end-img/avatar/5.jpg" alt="">
                        </div>
                        <div class="testimonial-info">
                           <h4 class="name">Peter Packer</h4>
                           <p>-Art Director</p>
                        </div>
                        <div class="testimonial-content">
                           <p class="fs-16">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word...</p>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="testimonial-bx">
                        <div class="testimonial-thumb">
                           <img src="assets/images/front-end-img/avatar/2.jpg" alt="">
                        </div>
                        <div class="testimonial-info">
                           <h4 class="name">Peter Packer</h4>
                           <p>-Art Director</p>
                        </div>
                        <div class="testimonial-content">
                           <p class="fs-16">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word...</p>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="testimonial-bx">
                        <div class="testimonial-thumb">
                           <img src="assets/images/front-end-img/avatar/8.jpg" alt="">
                        </div>
                        <div class="testimonial-info">
                           <h4 class="name">Peter Packer</h4>
                           <p>-Art Director</p>
                        </div>
                        <div class="testimonial-content">
                           <p class="fs-16">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word...</p>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="testimonial-bx">
                        <div class="testimonial-thumb">
                           <img src="assets/images/front-end-img/avatar/6.jpg" alt="">
                        </div>
                        <div class="testimonial-info">
                           <h4 class="name">Peter Packer</h4>
                           <p>-Art Director</p>
                        </div>
                        <div class="testimonial-content">
                           <p class="fs-16">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word...</p>
                        </div>
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
   <script src="assets/vendor_components/OwlCarousel2/dist/owl.carousel.js"></script>
   <script src="assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
   <!-- EduLearn front end -->
   <script src="assets/js/template.js"></script>
</body>

</html>