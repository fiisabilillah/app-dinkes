<!DOCTYPE html>
<html lang="en">

<head>
    <!-- {{ asset('frontend/')}} -->
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Buscom - Multipurpose Business and Corporate Template">

    <!-- ========== Page Title ========== -->
    <title>Buscom - Multipurpose Business and Corporate Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/img/favicon.png')}}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/elegant-icons.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/bootsnav.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/style.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/responsive.css')}}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ asset('frontend/')}}assets/js/html5/html5shiv.min.js"></script>
      <script src="{{ asset('frontend/')}}assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">

</head>


<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top
    ============================================= -->
    <div class="top-bar-area bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 address-info text-left">
                    <div class="info box">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="info">
                                    <span>Email</span> Info@gmail.com
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-call-center"></i>
                                </div>
                                <div class="info">
                                    <span>Phone</span> +123 456 7890
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-countdown"></i>
                                </div>
                                <div class="info">
                                    <span>Office Hours</span> Sat - Wed : 8:00 - 4:00
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 social text-right">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header
    ============================================= -->
    @include('frontend.body.header')
    <!-- End Header -->

    <!-- Start Banner
    ============================================= -->
    <div class="banner-area text-center">
        <div id="bootcarousel" class="carousel text-medium slide carousel-fade animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner text-light carousel-zoom">
                <div class="item active">
                    <div class="slider-thumb bg-cover" style="background-image: url({{ asset('frontend/')}}assets/img/2440x1578.png);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">Make a unique planning for <strong> your business</strong></h2>
                                            <p data-animation="animated slideInLeft">
                                                Arrived Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind.
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn circle btn-light border btn-md" href="#">Our Services</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-cover" style="background-image: url({{ asset('frontend/')}}assets/img/2440x1578.png);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="content">
                                            <h2 data-animation="animated slideInLeft">We will help you To grow <strong>up your business</strong></h2>
                                            <p data-animation="animated slideInLeft">
                                                Arrived Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind.
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn circle btn-light border btn-md" href="#">Our Services</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-cover" style="background-image: url({{ asset('frontend/')}}assets/img/2440x1578.png);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="content">
                                            <h2 data-animation="animated slideInRight">We work for Find Value And <strong>Build confidence</strong></h2>
                                            <p data-animation="animated slideInLeft">
                                                Arrived Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind.
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn circle btn-light border btn-md" href="#">Our Services</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Our About
    ============================================= -->
    <div class="about-area solid default-padding">
        <div class="container">
            <div class="about-items">
                <div class="row item-flex center">
                    <div class="col-md-6 thumb-box">
                        <div class="thumb">
                            <img src="{{ asset('frontend/assets/img/800x800.png')}}" alt="Thumb">
                            <img src="{{ asset('frontend/assets/img/800x800.png')}}" alt="Thumb">
                        </div>
                    </div>
                    <div class="col-md-6 info">
                        <h2>We’re Constantly Improving Our Skills to Fulfill Projects</h2>
                        <p>
                            <strong>25+ years experience in business and finance consulting, IT solutions, <br> and working with 5k+ clients over the world. </strong>
                        </p>
                        <p>
                            Preserved defective offending he daughters on or. Advantages prosperous remarkably my inhabiting so reasonably be if. Too any appearance announcing impossible one. Out mrs means heart ham tears shall power every.
                        </p>
                        <p>
                            Shutters ye marriage to throwing we as. Effect in if agreed he wished wanted admire expect. Or shortly visitor is comfort placing to cheered do. Few hills tears are weeks saw. Partiality insensible celebrated is in. Am offended as wandered thoughts greatest an friendly.
                        </p>
                        <a class="btn circle btn-theme effect btn-md" href="#">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our About -->

    <!-- Start Our Services
    ============================================= -->
    <div class="services-area icon-only default-padding-bottom bottom-less">

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h4>What we do</h4>
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="services-items">
                <div class="row">
                    <!-- Fixed Shape -->
                    <div class="fixed-shape">
                        <img src="{{ asset('frontend/assets/img/shape-8.png')}}" alt="Shape">
                    </div>
                    <!-- End Fixed Shape -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <i class="flaticon-research"></i>
                                <h4>Business Strategy</h4>
                                <p>
                                    Minuter believe service arrive. Acuteness allowance eagerness favourite in extensive exquisite
                                </p>
                                <a href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <i class="flaticon-meeting"></i>
                                <h4>Resource Allocation</h4>
                                <p>
                                    Minuter believe service arrive. Acuteness allowance eagerness favourite in extensive exquisite
                                </p>
                                <a href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <i class="flaticon-money-1"></i>
                                <h4>Capital Markets</h4>
                                <p>
                                    Minuter believe service arrive. Acuteness allowance eagerness favourite in extensive exquisite
                                </p>
                                <a href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <i class="flaticon-result"></i>
                                <h4>Market Research</h4>
                                <p>
                                    Minuter believe service arrive. Acuteness allowance eagerness favourite in extensive exquisite
                                </p>
                                <a href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <i class="flaticon-money"></i>
                                <h4>Saving & Investments</h4>
                                <p>
                                    Minuter believe service arrive. Acuteness allowance eagerness favourite in extensive exquisite
                                </p>
                                <a href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <i class="flaticon-scalable"></i>
                                <h4>Financial Planning</h4>
                                <p>
                                    Minuter believe service arrive. Acuteness allowance eagerness favourite in extensive exquisite
                                </p>
                                <a href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Services -->

    <!-- Start Process
    ============================================= -->
    <div id="process" class="process-area default-padding bg-cover shadow dark text-light" style="background-image: url({{ asset('frontend/')}}assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h4>How it works</h4>
                        <h2>Our Process</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="process-items text-center">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-4 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-newspaper"></i>
                                <span>01</span>
                            </div>
                            <h4>Discuss</h4>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-4 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-chart-line"></i>
                                <span>02</span>
                            </div>
                            <h4>Analysis</h4>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-4 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-check-double"></i>
                                <span>03</span>
                            </div>
                            <h4>implement</h4>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Process -->

    <!-- Star Portfolio
    ============================================= -->
    <div class="portfolio-area default-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h4>Portfolio</h4>
                        <h2>Recent Gallery</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full">
            <div class="gallery-items-area">
                <div class="col-md-12 gallery-content">

                    <div class="row magnific-mix-gallery masonary">
                        <div class="gallery-items portfolio-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="pf-item">
                                <div class="effect-box">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend/assets/img/800x800.png')}}" alt="thumb">
                                    </div>
                                    <div class="info">
                                        <div class="left">
                                            <h4><a href="#">Marketing Plan</a></h4>
                                            <p>business, finance</p>
                                        </div>
                                        <div class="right">
                                            <a href="{{ asset('frontend/assets/img/800x800.png')}}" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="pf-item">
                                <div class="effect-box">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend/assets/img/800x800.png')}}" alt="thumb">
                                    </div>
                                    <div class="info">
                                        <div class="left">
                                            <h4><a href="#">Business Analysis</a></h4>
                                            <p>business, finance</p>
                                        </div>
                                        <div class="right">
                                            <a href="{{ asset('frontend/assets/img/800x800.png')}}" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="pf-item">
                                <div class="effect-box">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend/assets/img/800x800.png')}}" alt="thumb">
                                    </div>
                                    <div class="info">
                                        <div class="left">
                                            <h4><a href="#">Profit Analysis</a></h4>
                                            <p>business, finance</p>
                                        </div>
                                        <div class="right">
                                            <a href="{{ asset('frontend/assets/img/800x800.png')}}" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="pf-item">
                                <div class="effect-box">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend/assets/img/800x800.png')}}" alt="thumb">
                                    </div>
                                    <div class="info">
                                        <div class="left">
                                            <h4><a href="#">Global Business</a></h4>
                                            <p>business, finance</p>
                                        </div>
                                        <div class="right">
                                            <a href="{{ asset('frontend/assets/img/800x800.png')}}" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="pf-item">
                                <div class="effect-box">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend/assets/img/800x800.png')}}" alt="thumb">
                                    </div>
                                    <div class="info">
                                        <div class="left">
                                            <h4><a href="#">Success Report</a></h4>
                                            <p>business, finance</p>
                                        </div>
                                        <div class="right">
                                            <a href="{{ asset('frontend/assets/img/800x800.png')}}" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="pf-item">
                                <div class="effect-box">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend/assets/img/800x800.png')}}" alt="thumb">
                                    </div>
                                    <div class="info">
                                        <div class="left">
                                            <h4><a href="#">Marketing Plan</a></h4>
                                            <p>business, finance</p>
                                        </div>
                                        <div class="right">
                                            <a href="{{ asset('frontend/assets/img/800x800.png')}}" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio -->

    <!-- Star Progress Area
    ============================================= -->
    <div class="progress-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5 info">
                    <h4>Our expertise</h4>
                    <h2>We design brand, digital experience that engage the right customers</h2>
                    <a class="btn circle btn-theme effect btn-md" href="#">Discover More</a>
                </div>
                <div class="col-md-6 col-md-offset-1 progress-box">
                    <div class="skill-items">
                        <!-- Progress Bar Start -->
                        <div class="progress-box">
                            <h5>Innovative solutions</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-width="88">
                                    <span>88%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>Marketing strategy</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-width="95">
                                    <span>95%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>Artificial Intelligence</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-width="80">
                                    <span>80%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Progressbar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Progress -->

    <!-- Star Team Area
    ============================================= -->
    <div class="team-area default-padding bg-gray bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h4>Our Experts</h4>
                        <h2>Meet Our Team</h2>
                    </div>
                </div>
            </div>
            <div class="team-items text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-md-3 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('frontend/assets/img/800x850.png')}}" alt="Thumb">
                                <ul class="social">
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="behance">
                                        <a href="#">
                                            <i class="fab fa-behance"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info">
                                <div class="inner">
                                    <h4>Mike Dooley</h4>
                                    <span>Chief Executive</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-md-3 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('frontend/assets/img/800x850.png')}}" alt="Thumb">
                                <ul class="social">
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="behance">
                                        <a href="#">
                                            <i class="fab fa-behance"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info">
                                <div class="inner">
                                    <h4>Chris Wensel</h4>
                                    <span>Vice President</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-md-3 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('frontend/assets/img/800x850.png')}}" alt="Thumb">
                                <ul class="social">
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="behance">
                                        <a href="#">
                                            <i class="fab fa-behance"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info">
                                <div class="inner">
                                    <h4>Richard Muldoone</h4>
                                    <span>Legal Officer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-md-3 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('frontend/assets/img/800x850.png')}}" alt="Thumb">
                                <ul class="social">
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="behance">
                                        <a href="#">
                                            <i class="fab fa-behance"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info">
                                <div class="inner">
                                    <h4>John Martin</h4>
                                    <span>Finance Head</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Star Blog Area
    ============================================= -->
    <div class="blog-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h4>Our Blog</h4>
                        <h2>Latest News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">
                    <!-- Single Item -->
                    <div class="single-item col-md-4 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('frontend/assets/img/800x600.png')}}" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="top-meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Admin</a>
                                        </li>
                                        <li><i class="fas fa-calendar-alt"></i>July 18, 2021</li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Five Things You Are Most Likely Didn’t Know About</a>
                                </h4>
                                <p>
                                    Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-md-4 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('frontend/assets/img/800x600.png')}}" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="top-meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Admin</a>
                                        </li>
                                        <li><i class="fas fa-calendar-alt"></i>July 18, 2021</li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">The State Of Mobile And Why Mobile Web Testing</a>
                                </h4>
                                <p>
                                    Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-md-4 col-sm-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('frontend/assets/img/800x600.png')}}" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <div class="top-meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Admin</a>
                                        </li>
                                        <li><i class="fas fa-calendar-alt"></i>July 18, 2021</li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Five Things You Are Most Likely Didn’t Know About</a>
                                </h4>
                                <p>
                                    Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Star Footer
    ============================================= -->
    @include('frontend.body.footer')
    <!-- End Footer-->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('frontend/assets/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/equal-height.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.appear.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/modernizr.custom.13711.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/progress-bar.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/count-to.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/YTPlayer.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/circle-progress.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/bootsnav.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>
