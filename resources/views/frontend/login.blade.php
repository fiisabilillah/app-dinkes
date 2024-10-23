
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
    <header id="home">

<!-- Start Navigation -->
<nav class="navbar navbar-default attr-border active-border small-pad navbar-sticky bootsnav">

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <div class="container">

        <!-- Start Atribute Navigation -->
        <div class="attr-nav">
            <ul>
                <li class="search"><a href="#"><i class="fas fa-search"></i></a></li>
                <li class="side-menu"><a href="#"><i class="fas fa-bars"></i></a></li>
            </ul>
        </div>
        <!-- End Atribute Navigation -->

        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/">
                <img src="{{ asset('frontend/assets/img/logo.png')}}" class="logo" alt="Logo">
            </a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Home</a>
                    <ul class="dropdown-menu">
                        <li><a href="it-solution.html">It Solution <span class="badge">New</span></a></li>
                        <li><a href="index.html">Home Version One</a></li>
                        <li><a href="index-2.html">Home Version Two</a></li>
                        <li><a href="index-3.html">Home Version Three</a></li>
                        <li><a href="index-4.html">Home Version Four</a></li>
                        <li><a href="index-5.html">Home Version Five</a></li>
                        <li><a href="index-op.html">Onepage Version One</a></li>
                        <li><a href="index-op-2.html">Onepage Version Two</a></li>
                    </ul>
                </li>
                <li class="dropdown megamenu-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <ul class="dropdown-menu megamenu-content" role="menu">
                        <li>
                            <div class="row">
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Banner</h6>
                                    <div class="content">
                                        <ul class="menu-col">
                                            <li><a href="banner-1.html">Banner Video Version</a></li>
                                            <li><a href="banner-2.html">Banner Zoom Version</a></li>
                                            <li><a href="banner-3.html">Banner Slide Version</a></li>
                                            <li><a href="banner-4.html">Banner Clean Version</a></li>
                                            <li><a href="banner-5.html">Banner Single Image</a></li>
                                        </ul>
                                    </div>
                                </div><!-- end col-3 -->
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Footer</h6>
                                    <div class="content">
                                        <ul class="menu-col">
                                            <li><a href="footer-1.html">Footer Version One</a></li>
                                            <li><a href="footer-2.html">Footer Version Two</a></li>
                                            <li><a href="footer-3.html">Footer Version Three</a></li>
                                        </ul>
                                    </div>
                                </div><!-- end col-3 -->
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Other Pages</h6>
                                    <div class="content">
                                        <ul class="menu-col">
                                            <li><a href="about-us.html">About us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="pricing-table.html">Pricing Table</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="404.html">Error Page</a></li>
                                        </ul>
                                    </div>
                                </div><!-- end col-3 -->
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Additional Pages</h6>
                                    <div class="content">
                                        <ul class="menu-col">
                                            <li><a href="login.html">login</a></li>
                                            <li><a href="register.html">register</a></li>
                                        </ul>
                                    </div>
                                </div><!-- end col-3 -->
                            </div><!-- end row -->
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Grid Colum</a>
                            <ul class="dropdown-menu">
                                <li><a href="gallery-grid-2-colum.html">Gallery Two Colum</a></li>
                                <li><a href="gallery-grid-3-colum.html">Gallery Three Colum</a></li>
                                <li><a href="gallery-grid-4-colum.html">Gallery Four Colum</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Masonary Colum</a>
                            <ul class="dropdown-menu">
                                <li><a href="gallery-2-colum.html">Gallery Two Colum</a></li>
                                <li><a href="gallery-3-colum.html">Gallery Three Colum</a></li>
                                <li><a href="gallery-4-colum.html">Gallery Four Colum</a></li>
                            </ul>
                        </li>
                        <li><a href="gallery-carousel.html">Gallery Carousel</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
                    <ul class="dropdown-menu">
                        <li><a href="services.html">Services Version One</a></li>
                        <li><a href="services-2.html">Services Version Two</a></li>
                        <li><a href="services-3.html">Services Version Three</a></li>
                        <li><a href="services-single.html">Services Single</a></li>
                    </ul>
                </li>
                <li><a href="team.html">Team</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                    <ul class="dropdown-menu">
                        <li><a href="blog-standard.html">Blog Standard</a></li>
                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                        <li><a href="blog-single.html">Blog Single Standard</a></li>
                        <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                        <li><a href="blog-single-right-sidebar.html">Single Right Sidebar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html">contact</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>

    <!-- Start Side Menu -->
    <div class="side">
        <a href="#" class="close-side"><i class="fas fa-times"></i></a>
        <div class="widget">
            <img src="{{ asset('frontend/assets/img/logo.png')}}" alt="Logo">
            <p>
                Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind.
            </p>
        </div>
        <div class="widget contact address">
            <div>
                <ul>
                    <li>
                        <div class="content">
                            <p>ADDRESS</p><strong>California, TX 70240</strong>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <p>EMAIL</p><strong>support@validtheme.com</strong>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <p>PHONE</p><strong>+44-20-7328-4499</strong>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="widget contact newsletter">
            <h4 class="title">Get Subscribed!</h4>
            <form action="#">
                <div class="input-group stylish-input-group">
                    <input type="email" placeholder="Enter your e-mail" class="form-control" name="email">
                    <span class="input-group-addon">
                        <button type="submit">
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
        <div class="widget social">
            <ul class="link">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-behance"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- End Side Menu -->

</nav>
<!-- End Navigation -->

</header>
    <!-- End Header -->

    <!-- Start Page Title
    ============================================= -->
    <div class="page-title-area shadow dark bg-fixed text-center text-light" style="background-image: url({{ asset('frontend/')}}assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Login Page</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Login
    ============================================= -->
    <div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="#" method="POST" id="login-form" class="white-popup-block" action="{{ route('login') }}">
                        @csrf
                        <div class="login-custom">
                            <h4><i class="fas fa-user"></i> Login Now</h4>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="email" type="email" name="email" placeholder="Email or Username">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <label for="login-remember"><input type="checkbox" id="login-remember">Remember Me</label>
                                    <a title="Lost Password" href="#" class="lost-pass-link">Lost your password?</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit">
                                        Login
                                    </button>
                                </div>
                            </div>
                            <p class="link-bottom">Not a member yet? <a href="#">Register now</a></p>
                        </div>
                        <div class="login-social">
                            <h4>Login with social</h4>
                            <ul>
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
                                <li class="linkedin">
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Area -->

    <!-- Star Footer
    ============================================= -->
    <footer class="bg-dark">
        <div class="container">
            <div class="footer-content default-padding">
                <div class="row">

                    <div class="equal-height col-md-4 col-sm-6 item">
                        <div class="f-item about">
                            <h4 class="widget-title">About</h4>
                            <p>
                                Required honoured trifling eat pleasure man relati Assurance yet bed was improving furniture man Distrusts delighted services and a high degre tobiscotuition end of imposition.
                            </p>
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="equal-height col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Usefull Links</h4>
                            <ul>
                                <li>
                                    <a href="#">Classic Business</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Gallery</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="equal-height col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Company</h4>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li>
                                    <a href="#">Gallery</a>
                                </li>
                                <li>
                                    <a href="#">Faq</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="equal-height col-md-4 col-sm-6 item">
                        <div class="f-item contact address">
                            <h4 class="widget-title">Contact Us</h4>
                            <ul>
                                <li>
                                    <div class="icon"><i class="flaticon-location"></i></div>
                                    <span>22 Baker Street, Koenigstrasse 65, Bad Sülze, Mecklenburg-Vorpommern, Philippines</span>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-call-center"></i>
                                    </div>
                                    <span>+123 456 7890 <br>+456 123 4455 </span>
                                </li>
                                <li>
                                    <div class="icon"><i class="flaticon-email"></i> </div>
                                    <span>support@buscom.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>Copyrigh &copy; 2021 Buscom, All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
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

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch (type) {
            case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;

            case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;

            case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;

            case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
        }
        @endif
    </script>

</body>

</html>
