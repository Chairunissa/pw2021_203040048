<?php
require 'php/functions.php';
// Melakukan Query dari database
$jam = query("SELECT * FROM jam")

?>
<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Jaté</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/ja-removebg-preview.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="css/animate.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/font-css/LineIcons.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">


</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="spin">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>

    <!--====== PRELOADER PART START ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/images/2.png" alt="Logo">
                        </a> <!-- Logo -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a data-scroll-nav="0" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#product">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#contact">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="php/login.php">Login Admin</a>
                                </li>
                            </ul> <!-- navbar nav -->
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider-area pt-100">
        <div class="container-fluid position-relative">
            <div class="slider-active">
                <div class="single-slider">
                    <div class="slider-bg">
                        <div class="row no-gutters align-items-center ">
                            <div class="col-lg-4 col-md-5">
                                <div class="slider-product-image d-none d-md-block">
                                    <img src="assets/images/slider/1.png" alt="Slider">
                                    <div class="slider-discount-tag">
                                        <p>-50% <br> OFF</p>
                                    </div>
                                </div> <!-- slider product image -->
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="slider-product-content">
                                    <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s">
                                        <span>Up</span> to <span>date</span>
                                    </h1>
                                    <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">We work with many groups
                                        domestically and abroad to always get the latest models of watches today, and this is
                                        guaranteed authenticity.</p>
                                    <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1.5s">Explore
                                        More <i class="lni-chevron-right"></i></a>
                                </div> <!-- slider product content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div> <!-- single slider -->

                <div class="single-slider">
                    <div class="slider-bg">
                        <div class="row no-gutters align-items-center">
                            <div class="col-lg-4 col-md-5">
                                <div class="slider-product-image d-none d-md-block">
                                    <img src="assets/images/slider/2.png" alt="Slider">
                                    <div class="slider-discount-tag">
                                        <p>-20% <br> OFF</p>
                                    </div>
                                </div> <!-- slider product image -->
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="slider-product-content">
                                    <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s">
                                        <span>Winter</span> Sale! is <span>Here</span>
                                    </h1>
                                    <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">let's shop safely and fast
                                        delivery only on this website.</p>
                                    <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1.5s">Explore
                                        More <i class="lni-chevron-right"></i></a>
                                </div> <!-- slider product content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div> <!-- single slider -->

                <div class="single-slider">
                    <div class="slider-bg">
                        <div class="row no-gutters align-items-center">
                            <div class="col-lg-4 col-md-5">
                                <div class="slider-product-image d-none d-md-block">
                                    <img src="assets/images/slider/3.png" alt="Slider">
                                    <div class="slider-discount-tag">
                                        <p>-90%<br> OFF</p>
                                    </div>
                                </div> <!-- slider product image -->
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="slider-product-content">
                                    <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s">
                                        <span>Safe</span> and <span>Comfortable</span>
                                    </h1>
                                    <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">We deliver lightning to
                                        consumers and guarantee safe goods to the recipient's address.</p>
                                    <a class="main-btn" href="#contact" data-animation="fadeInUp" data-delay="1.5s">Contact Us <i class="lni-chevron-right"></i></a>
                                </div> <!-- slider product content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div> <!-- single slider -->
            </div> <!-- slider active -->
            <div class="slider-social">
                <div class="row justify-content-end">
                    <div class="col-lg-7 col-md-6">
                        <ul class="social text-right">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- container fluid -->
    </section>

    <!--====== SLIDER PART ENDS ======-->

    <!--====== DISCOUNT PRODUCT PART START ======-->

    <section id="discount-product" class="discount-product pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-discount-product mt-30">
                        <div class="product-image" style="border-radius: 20px;">
                            <img src="assets/images/discount-product/p-1.jpg" alt="Product">
                        </div> <!-- product image -->
                        <div class="product-content">
                            <h4 class="content-title mb-15" style="color: white;">High-quality <br> For your
                                life</h4>
                            <a href="#">View Collection <i class="lni-chevron-right"></i></a>
                        </div> <!-- product content -->
                    </div> <!-- single discount product -->
                </div>
                <div class="col-lg-6">
                    <div class="single-discount-product mt-30">
                        <div class="product-image" style="border-radius: 20px;">
                            <img src="assets/images/discount-product/p-2.jpg" alt="Product">
                        </div> <!-- product image -->
                        <div class="product-content">
                            <h4 class="content-title mb-15">Hot Offer <br> Discount up to 80%</h4>
                            <a href="#">View Collection <i class="lni-chevron-right"></i></a>
                        </div> <!-- product content -->
                    </div> <!-- single discount product -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== DISCOUNT PRODUCT PART ENDS ======-->

    <!--====== PRODUCT PART START ======-->

    <section id="product" class="product-area pt-100 pb-130">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="contact-title text-center">
                    <h2 class="title">Product</h2>
                </div> <!-- contact title -->
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="collection-menu text-center mt-30">
                        <h4 class="collection-tilte">OUR COLLECTION</h4>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="active" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all" role="tab" aria-controls="v-pills-all" aria-selected="true">All</a>

                            <a id="v-pills-male-tab" data-toggle="pill" href="#v-pills-male" role="tab" aria-controls="v-pills-male" aria-selected="false">Male</a>

                            <a id="v-pills-female-tab" data-toggle="pill" href="#v-pills-female" role="tab" aria-controls="v-pills-female" aria-selected="false">Female</a>

                            <a id="v-pills-unisex-tab" data-toggle="pill" href="#v-pills-unisex" role="tab" aria-controls="v-pills-unisex" aria-selected="false">Unisex</a>

                            <a id="v-pills-discount-tab" data-toggle="pill" href="#v-pills-discount" role="tab" aria-controls="v-pills-discount" aria-selected="false">Discount</a>
                        </div> <!-- nav -->
                    </div> <!-- collection menu -->
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
                                    <?php foreach ($jam as $jm) : ?>
                                        <div class="col-md-4">
                                            <div class="single-product-items">
                                                <div class="product-item-image">
                                                    <a href="php/detail.php?id=<?= $jm['id']; ?>"><img src="assets/img/<?= $jm['gambar']; ?>" alt="Product"></a>

                                                </div>
                                                <div class="product-item-content text-center mt-30">
                                                    <h5 class="product-title">
                                                        <?= $jm['nama']; ?>
                                                    </h5>
                                                    <ul class="rating">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                    </ul>
                                                    <span class="regular-price">
                                                        <?= $jm['harga']; ?>
                                                    </span>
                                                </div>
                                            </div> <!-- single product items -->
                                        </div>
                                    <?php endforeach; ?>
                                </div> <!-- row -->
                            </div> <!-- product items -->
                        </div> <!-- tab pane -->

                        <div class="tab-pane fade" id="v-pills-male" role="tabpanel" aria-labelledby="v-pills-male-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
                                    <?php foreach ($jam as $jm) : ?>
                                        <div class="col-md-4">
                                            <div class="single-product-items">
                                                <div class="product-item-image">
                                                    <a href="php/detail.php?id=<?= $jm['id']; ?>"><img src="assets/img/<?= $jm['gambar']; ?>" alt="Product"></a>

                                                </div>
                                                <div class="product-item-content text-center mt-30">
                                                    <h5 class="product-title">
                                                        <?= $jm['nama']; ?>
                                                    </h5>
                                                    <ul class="rating">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                    </ul>
                                                    <span class="regular-price">
                                                        <?= $jm['harga']; ?>
                                                    </span>
                                                </div>
                                            </div> <!-- single product items -->
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div> <!-- row -->
                        </div> <!-- product items -->

                        <div class="tab-pane fade" id="v-pills-female" role="tabpanel" aria-labelledby="v-pills-female-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
                                    <?php foreach ($jam as $jm) : ?>
                                        <div class="col-md-4">
                                            <div class="single-product-items">
                                                <div class="product-item-image">
                                                    <a href="php/detail.php?id=<?= $jm['id']; ?>"><img src="assets/img/<?= $jm['gambar']; ?>" alt="Product"></a>

                                                </div>
                                                <div class="product-item-content text-center mt-30">
                                                    <h5 class="product-title">
                                                        <?= $jm['nama']; ?>
                                                    </h5>
                                                    <ul class="rating">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                    </ul>
                                                    <span class="regular-price">
                                                        <?= $jm['harga']; ?>
                                                    </span>
                                                </div>
                                            </div> <!-- single product items -->
                                        </div>
                                    <?php endforeach; ?>
                                </div> <!-- row -->
                            </div> <!-- product items -->
                        </div> <!-- tab pane -->

                        <div class="tab-pane fade" id="v-pills-unisex" role="tabpanel" aria-labelledby="v-pills-unisex-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
                                    <?php foreach ($jam as $jm) : ?>
                                        <div class="col-md-4">
                                            <div class="single-product-items">
                                                <div class="product-item-image">
                                                    <a href="php/detail.php?id=<?= $jm['id']; ?>"><img src="assets/img/<?= $jm['gambar']; ?>" alt="Product"></a>

                                                </div>
                                                <div class="product-item-content text-center mt-30">
                                                    <h5 class="product-title">
                                                        <?= $jm['nama']; ?>
                                                    </h5>
                                                    <ul class="rating">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                    </ul>
                                                    <span class="regular-price">
                                                        <?= $jm['harga']; ?>
                                                    </span>
                                                </div>
                                            </div> <!-- single product items -->
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div> <!-- product items -->
                        </div><!-- tab pane -->

                        <div class="tab-pane fade" id="v-pills-discount" role="tabpanel" aria-labelledby="v-pills-discount-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
                                    <?php foreach ($jam as $jm) : ?>
                                        <div class="col-md-4">
                                            <div class="single-product-items">
                                                <div class="product-item-image">
                                                    <a href="php/detail.php?id=<?= $jm['id']; ?>"><img src="assets/img/<?= $jm['gambar']; ?>" alt="Product"></a>
                                                    <div class="product-discount-tag">
                                                        <p>-60%</p>
                                                    </div>
                                                </div>
                                                <div class="product-item-content text-center mt-30">
                                                    <h5 class="product-title">
                                                        <?= $jm['nama']; ?>
                                                    </h5>
                                                    <ul class="rating">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                    </ul>
                                                    <span class="regular-price">
                                                        <?= $jm['harga']; ?>
                                                    </span>
                                                </div>
                                            </div> <!-- single product items -->
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div> <!-- product items -->
                        </div><!-- tab pane -->
                    </div> <!-- row -->
                </div> <!-- container -->
    </section>

    <!--====== PRODUCT PART ENDS ======-->


    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="contact-title text-center">
                        <h2 class="title">Get In Touch</h2>
                    </div> <!-- contact title -->
                </div>
            </div> <!-- row -->
            <div class="contact-box mt-70">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-info pt-25">
                            <h4 class="info-title">Contact Info</h4>
                            <ul>
                                <li>
                                    <div class="single-info mt-30">
                                        <div class="info-icon">
                                            <i class="lni-phone-handset"></i>
                                        </div>
                                        <div class="info-content">
                                            <p>+62345 6789 101</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                                <li>
                                    <div class="single-info mt-30">
                                        <div class="info-icon">
                                            <i class="lni-envelope"></i>
                                        </div>
                                        <div class="info-content">
                                            <p>chairunissap37@gmail.com</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                                <li>
                                    <div class="single-info mt-30">
                                        <div class="info-icon">
                                            <i class="lni-home"></i>
                                        </div>
                                        <div class="info-content">
                                            <p>Subang, Jawabarat Indonesia</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                            </ul>
                        </div> <!-- contact info -->
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <form id="contact-form" action="assets/contact.php" method="post" data-toggle="validator">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-form form-group">
                                            <input type="text" name="name" placeholder="Enter Your Name" data-error="Name is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- single form -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-form form-group">
                                            <input type="email" name="email" placeholder="Enter Your Email" data-error="Valid email is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- single form -->
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single-form form-group">
                                            <textarea name="message" placeholder="Enter Your Message" data-error="Please,leave us a message." required="required"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- single form -->
                                    </div>
                                    <p class="form-message"></p>
                                    <div class="col-lg-12">
                                        <div class="single-form form-group">
                                            <button class="main-btn" type="submit">CONTACT NOW</button>
                                        </div> <!-- single form -->
                                    </div>
                                </div> <!-- row -->
                            </form>
                        </div> <!-- row -->
                    </div>
                </div> <!-- row -->
            </div> <!-- contact box -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <section id="footer" class="footer-area">
        <div class="container">
            <div class="footer-widget pt-75 pb-120">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-sm-7">
                        <div class="footer-logo mt-40">
                            <a href="#">
                                <img src="assets/images/2.png" alt="Logo">
                            </a>
                            <p class="mt-10">We deliver lightning to consumers and guarantee safe goods
                                to the recipient's address.</p>
                            <ul class="footer-social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer logo -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-link mt-50">
                            <h5 class="f-title">Services</h5>
                            <ul>
                                <li><a href="#">Modern Design</a></li>
                                <li><a href="#">Retro Design</a></li>
                                <li><a href="#">Male Design</a></li>
                                <li><a href="#">Female Design</a></li>
                                <li><a href="#">Unisex Design</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-5">
                        <div class="footer-link mt-50">
                            <h5 class="f-title">Help</h5>
                            <ul>
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-7">
                        <div class="footer-info mt-50">
                            <h5 class="f-title">Contact Info</h5>
                            <ul>
                                <li>
                                    <div class="single-footer-info mt-20">
                                        <span>Phone :</span>
                                        <div class="footer-info-content">
                                            <p>+62345 6789 101</p>
                                            <p>+62645 9137 128</p>
                                        </div>
                                    </div> <!-- single footer info -->
                                </li>
                                <li>
                                    <div class="single-footer-info mt-20">
                                        <span>Email :</span>
                                        <div class="footer-info-content">
                                            <p>chairunissap37@gmail.com</p>
                                            <p>203040048@mail.unpas.ac.id</p>
                                        </div>
                                    </div> <!-- single footer info -->
                                </li>
                                <li>
                                    <div class="single-footer-info mt-20">
                                        <span>Address :</span>
                                        <div class="footer-info-content">
                                            <p>Subang, Jawabarat Indonesia</p>
                                        </div>
                                    </div> <!-- single footer info -->
                                </li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer-copyright pt-15 pb-15">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p>&copf; Chairunissa Copyright - 2021</p>
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!--  footer copyright -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TO TOP PART ENDS ======-->










    <!--====== jquery js ======-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="js/bootstrap.min.js"></script>


    <!--====== Slick js ======-->
    <script src="js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="js/jquery.magnific-popup.min.js"></script>


    <!--====== nav js ======-->
    <script src="js/jquery.nav.js"></script>

    <!--====== Nice Number js ======-->
    <script src="js/jquery.nice-number.min.js"></script>

    <!--====== Main js ======-->
    <script src="js/main.js"></script>

</body>

</html>