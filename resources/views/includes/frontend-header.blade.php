<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from utouchdesign.com/themes/envato/altroz_news/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Sep 2021 20:08:46 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <meta name="theme-color" content="#ec0000">
    <meta name="description" content="News Magazine HTML Template">
    <meta name="keywords"
        content="Article, Blog, Business, Fashion, Magazine, Music, News, News Magazine, Newspaper, Politics, Travel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!--Favicon-->

    <link rel="icon" href="{{ asset('frontend_assets/images/favicon.png') }}" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/colorbox.css') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,500,600,700,800&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,500,600,700,800&amp;display=swap"
        rel="stylesheet">
</head>

<body>

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="utf-preloader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Preloader End -->

    <div class="body-inner">
        <!-- Topbar Start -->
        <div id="top-bar" class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="unstyled top-nav">
                            <li><a href="login-signup.html">Login & Signup</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 top-social text-lg-right text-md-center">
                        <ul class="unstyled">
                            <li> <a title="Facebook" href="#"> <span class="social-icon"><i
                                            class="fa fa-facebook"></i></span> </a> <a title="Twitter" href="#"> <span
                                        class="social-icon"><i class="fa fa-twitter"></i></span> </a> <a title="Google+"
                                    href="#"> <span class="social-icon"><i class="fa fa-google-plus"></i></span> </a> <a
                                    title="Linkdin" href="#"> <span class="social-icon"><i
                                            class="fa fa-linkedin"></i></span> </a> <a title="Rss" href="#"> <span
                                        class="social-icon"><i class="fa fa-rss"></i></span> </a> <a title="Skype"
                                    href="#"> <span class="social-icon"><i class="fa fa-skype"></i></span> </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Header start -->
        <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="logo"> <a href="{{ url('/') }}"> <img src="{{ asset('frontend_asset/images/logo.png') }}" width="190" alt=""> </a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 header-right">
                        <div class="ad-banner float-right"> <a href="#"><img src="images/banner-ads/ad-top-header.png"
                                    class="img-fluid" alt=""></a> </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Main Nav Start -->
        <div class="utf_main_nav_area clearfix utf_sticky">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg col">
                        <div class="utf_site_nav_inner float-left">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="true" aria-label="Toggle navigation"> <span
                                    class="navbar-toggler-icon"></span> </button>
                            <div id="navbarSupportedContent"
                                class="collapse navbar-collapse navbar-responsive-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item @yield('home')"> <a href="{{url('/')}}" class="nav-link">Home</a></li>
                                    <li class="nav-item dropdown utf_mega_dropdown"> <a href="category-style1.html"
                                            class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                            aria-haspopup="true" aria-expanded="false">Lifestyle <i
                                                class="fa fa-angle-down"></i></a>
                                        <div class="utf_dropdown_menu utf_mega_menu_content clearfix">
                                            <div class="menu-tab">
                                                <div class="row">
                                                    <ul class="nav nav-tabs flex-column col-2" data-toggle="tab-hover">
                                                        <li class="nav-item"> <a class="animated fadeIn active"
                                                                href="#tab-one" data-toggle="tab"> <span
                                                                    class="tab-head"> <span class="tab-text-title"><i
                                                                            class="fa fa-angle-double-right"></i>
                                                                        Health</span> </span> </a> </li>
                                                        <li class="nav-item"> <a class="animated fadeIn" href="#tab-two"
                                                                data-toggle="tab"> <span class="tab-head"> <span
                                                                        class="tab-text-title"><i
                                                                            class="fa fa-angle-double-right"></i>
                                                                        Travel</span> </span> </a> </li>
                                                        <li class="nav-item"> <a class="animated fadeIn"
                                                                href="#tab-three" data-toggle="tab"> <span
                                                                    class="tab-head"> <span class="tab-text-title"><i
                                                                            class="fa fa-angle-double-right"></i>
                                                                        Food</span> </span> </a> </li>
                                                    </ul>
                                                    <div class="tab-content col-10">
                                                        <div class="tab-pane fade show active" id="tab-one">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a href="#"><img
                                                                                    class="img-fluid"
                                                                                    src="images/news/lifestyle/health1.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat" href="#">Health</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">That wearable on your wrist
                                                                                    could soon track your…</a> </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a href="#"><img
                                                                                    class="img-fluid"
                                                                                    src="images/news/lifestyle/health2.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat" href="#">Health</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">Can't shed those Gym? The
                                                                                    problem might be in your…</a> </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a href="#"><img
                                                                                    class="img-fluid"
                                                                                    src="images/news/lifestyle/health3.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat" href="#">Health</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">Deleting fears from the
                                                                                    brain means you might neve…</a>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a href="#"><img
                                                                                    class="img-fluid"
                                                                                    src="images/news/lifestyle/health4.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat" href="#">Health</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">Smart packs parking sensor
                                                                                    tech and beeps when col…</a> </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane animated fadeIn" id="tab-two">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a href="#"><img
                                                                                    class="img-fluid"
                                                                                    src="images/news/lifestyle/travel1.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat" href="#">Travel</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">That wearable on your wrist
                                                                                    could soon track your…</a> </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a href="#"><img
                                                                                    class="img-fluid"
                                                                                    src="images/news/lifestyle/travel2.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat" href="#">Travel</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">Can't shed those Gym? The
                                                                                    problem might be in your…</a> </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a href="#"><img
                                                                                    class="img-fluid"
                                                                                    src="images/news/lifestyle/travel3.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat" href="#">Travel</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">Deleting fears from the
                                                                                    brain means you might neve…</a>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a href="#"><img
                                                                                    class="img-fluid"
                                                                                    src="images/news/lifestyle/travel4.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat" href="#">Travel</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">Smart packs parking sensor
                                                                                    tech and beeps when col…</a> </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane animated fadeIn" id="tab-three">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a href="#"><img
                                                                                    class="img-fluid"
                                                                                    src="images/news/lifestyle/food1.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat" href="#">Food</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">That wearable on your wrist
                                                                                    could soon track your…</a> </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a href="#"><img
                                                                                    class="img-fluid"
                                                                                    src="images/news/lifestyle/food2.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat" href="#">Food</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">Can't shed those Gym? The
                                                                                    problem might be in your…</a> </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a href="#"><img
                                                                                    class="img-fluid"
                                                                                    src="images/news/lifestyle/food3.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat" href="#">Food</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">Deleting fears from the
                                                                                    brain means you might neve…</a>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a href="#"><img
                                                                                    class="img-fluid"
                                                                                    src="images/news/lifestyle/food4.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat" href="#">Food</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">Smart packs parking sensor
                                                                                    tech and beeps when col…</a> </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li> <a href="category-style2.html">Technology</a> </li>
                                    <li class="dropdown nav-item utf_mega_dropdown"> <a href="#"
                                            class="nav-link dropdown-toggler" data-toggle="dropdown">Video <i
                                                class="fa fa-angle-down"></i></a>
                                        <div class="utf_dropdown_menu utf_mega_menu_content clearfix">
                                            <div class="utf_mega_menu_content_inner">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="utf_post_block_style clearfix">
                                                            <div class="utf_post_thumb"> <img class="img-fluid"
                                                                    src="images/news/video/video4.jpg" alt="" /> <a
                                                                    class="popup"
                                                                    href="https://www.youtube.com/embed/jssO8-5qmag">
                                                                    <div class="video-icon"> <i class="fa fa-play"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="utf_post_content">
                                                                <h2 class="utf_post_title title-small"> <a
                                                                        href="#">Zhang social media pop also known when
                                                                        smart innocent...</a> </h2>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="utf_post_block_style clearfix">
                                                            <div class="utf_post_thumb"> <img class="img-fluid"
                                                                    src="images/news/video/video3.jpg" alt="" /> <a
                                                                    class="popup"
                                                                    href="https://www.youtube.com/embed/jssO8-5qmag">
                                                                    <div class="video-icon"> <i class="fa fa-play"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="utf_post_content">
                                                                <h2 class="utf_post_title title-small"> <a
                                                                        href="#">Zhang social media pop also known when
                                                                        smart innocent...</a> </h2>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="utf_post_block_style clearfix">
                                                            <div class="utf_post_thumb"> <img class="img-fluid"
                                                                    src="images/news/video/video2.jpg" alt="" /> <a
                                                                    class="popup"
                                                                    href="https://www.youtube.com/embed/jssO8-5qmag">
                                                                    <div class="video-icon"> <i class="fa fa-play"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="utf_post_content">
                                                                <h2 class="utf_post_title title-small"> <a href="#">TG
                                                                        G6 will have dual 13-megapixel cameras...</a>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="utf_post_block_style clearfix">
                                                            <div class="utf_post_thumb"> <img class="img-fluid"
                                                                    src="images/news/video/video1.jpg" alt="" /> <a
                                                                    class="popup"
                                                                    href="https://www.youtube.com/embed/jssO8-5qmag">
                                                                    <div class="video-icon"> <i class="fa fa-play"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="utf_post_content">
                                                                <h2 class="utf_post_title title-small"> <a
                                                                        href="#">Zhang social media pop also known when
                                                                        smart innocent...</a> </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="@yield('about')"> <a href="{{ route('frontend.about')}}"">About Us</a> </li>
                                    <li class="dropdown"> <a href="#" class="dropdown-toggle"
                                            data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
                                        <ul class="utf_dropdown_menu" role="menu">
                                            <li class="utf_dropdown_submenu"> <a href="#."><i
                                                        class="fa fa-angle-double-right"></i> Category Layouts</a>
                                                <ul class="utf_dropdown_menu">
                                                    <li><a href="category-style1.html"><i
                                                                class="fa fa-angle-double-right"></i> Category Style
                                                            One</a></li>
                                                    <li><a href="category-style2.html"><i
                                                                class="fa fa-angle-double-right"></i> Category Style
                                                            Two</a></li>
                                                    <li><a href="category-style3.html"><i
                                                                class="fa fa-angle-double-right"></i> Category Style
                                                            Three</a></li>
                                                </ul>
                                            </li>
                                            <li class="utf_dropdown_submenu"> <a href="#."><i
                                                        class="fa fa-angle-double-right"></i> Post Detail Page</a>
                                                <ul class="utf_dropdown_menu">
                                                    <li><a href="single-post1.html"><i
                                                                class="fa fa-angle-double-right"></i> Single Post
                                                            One</a></li>
                                                    <li><a href="single-post2.html"><i
                                                                class="fa fa-angle-double-right"></i> Single Post
                                                            Two</a></li>
                                                    <li><a href="single-post3.html"><i
                                                                class="fa fa-angle-double-right"></i> Single Post
                                                            Three</a></li>
                                                    <li><a href="single-post4.html"><i
                                                                class="fa fa-angle-double-right"></i> Single Post
                                                            Four</a></li>
                                                    <li><a href="left-sidebar.html"><i
                                                                class="fa fa-angle-double-right"></i> Left Sidebar</a>
                                                    </li>
                                                    <li><a href="right-sidebar.html"><i
                                                                class="fa fa-angle-double-right"></i> Right Sidebar</a>
                                                    </li>
                                                    <li><a href="no-sidebar.html"><i
                                                                class="fa fa-angle-double-right"></i> No Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="utf_dropdown_submenu"> <a href="#."><i
                                                        class="fa fa-angle-double-right"></i> Pages</a>
                                                <ul class="utf_dropdown_menu">
                                                    <li><a href="contact.html"><i class="fa fa-angle-double-right"></i>
                                                            Contact Us</a></li>
                                                    <li><a href="404.html"><i class="fa fa-angle-double-right"></i>
                                                            404</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="utf_nav_search"> <span id="search"><i class="fa fa-search"></i></span> </div>
                    <div class="utf_search_block" style="display: none;">
                        <input type="text" class="form-control" placeholder="Enter your keywords...">
                        <span class="utf_search_close">&times;</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Nav End -->
