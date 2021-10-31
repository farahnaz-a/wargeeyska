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

    <link rel="icon" href="{{ asset('uploads/favicon')}}/{{ favicon()->image }}" type="image/x-icon">

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
    <script src="{{ asset('frontend_assets/js/trans.js') }}"></script>
    {{-- <script data-ad-client="ca-pub-7417336915807647" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> --}}


    <style>
        .translated-ltr {
            margin-top: -40px;
        }

        .translated-ltr {
            margin-top: -40px;
        }

        .goog-te-banner-frame {
            display: none;
            margin-top: -20px;
        }

        .goog-logo-link {
            display: none !important;
        }

        .goog-te-gadget {
            color: transparent !important;
        }

        .goog-te-gadget-simple img {
            display: none;

        }

        .goog-te-gadget .goog-te-combo {
            color: #222;
            border-radius: 50px;
            position: absolute;
            top: 0;
        }

    </style>
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
                    @guest
                    <div class="col-md-8">
                        <ul class="unstyled top-nav">
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Signup</a></li>
                            <li>
                                <span id="google_translate_element"></span>
                            </li>
                        </ul>
                    </div>
                    @endguest
                    @auth
                    <div class="col-md-8">
                        <ul class="unstyled top-nav">


                            @if (Auth::user()->role = 'admin')
                            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>

                            @elseif (Auth::user()->role = 'reporter')
                            <li><a href="{{ route('reporter.dashboard') }}">Dashboard</a></li>


                            @else
                            <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                            @endif

                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a onclick="event.preventDefault();this.closest('form').submit();"
                                        href="{{ route('logout') }}">Logout</a>
                                </form>
                            </li>
                            <li>
                                <span id="google_translate_element"></span>
                            </li>

                        </ul>
                    </div>
                    @endauth

                    <div class="col-md-4 top-social text-lg-right text-md-center">

                        <ul class="unstyled">



                            <li>
                                <a title="Facebook" href="{{ footerContact()->facebook_link}}">
                                    <span class="social-icon">
                                        <i class="fa fa-facebook"></i>
                                    </span>
                                </a>
                                <a title="Facebook" href="{{ footerContact()->instagram_link }}">
                                    <span class="social-icon">
                                        <i class="fa fa-instagram"></i>
                                    </span>
                                </a>
                              
                                <a title="Google+" href="{{ footerContact()->goole_link }}">
                                    <span class="social-icon">
                                        <i class="fa fa-google-plus"></i>
                                    </span>
                                </a>
                                <a title="Linkdin" href="{{ footerContact()->linkdin_link }}">
                                    <span class="social-icon">
                                        <i class="fa fa-linkedin"></i>
                                    </span>
                                </a>
                                <a title="Rss" href="{{ footerContact()->twiter_link }}">
                                    <span class="social-icon">
                                        <i class="fa fa-twitter"></i>
                                    </span>
                                </a>
                                <a title="Skype" href="{{ footerContact()->skyp_link }}">
                                    <span class="social-icon">
                                        <i class="fa fa-skype"></i>
                                    </span>
                                </a>
                            </li>
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
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{asset('uploads/logo/')}}/{{logo()->logo}}" width="100" height="" alt="Logo">
                                {{-- <img src="{{asset('frontend_assets/images/banner-ads/ad-top-header.png')}}"
                                width="70" height="" alt="Logo"> --}}

                            </a>
                        </div>
                    </div>

                    <div class="col-md-9 col-sm-12 header-right">
                        <div class=" float-right">
                            @if (frontPageTopAd() != null)
                            <a href="{{ frontPageTopAd()->link }}" target="_blank">
                                <img src="{{ asset('uploads/ads')}}/{{ frontPageTopAd()->image }}" class="img-fluid"
                                    alt="" style="height: 90px; width:730px">
                            </a>
                            @else
                            <a href="">
                                <img src="{{ asset('frontend_assets/images/banner-ads/ad-top-header.png')}}"
                                    class="img-fluid" alt="">
                            </a>
                            @endif
                        </div>
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
                                    <li class="nav-item @yield('home')"> <a href="{{url('/')}}"
                                            class="nav-link">Home</a></li>

                                    @foreach (categories() as $category)

                                    @if ($category->getSubcategory->count() > 0)
                                    <li class="nav-item dropdown utf_mega_dropdown">
                                        <a href="{{ route('frontend.blog_category', $category->id)}}"
                                            class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                            aria-haspopup="true" aria-expanded="false">{{ $category->name }}
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="utf_dropdown_menu utf_mega_menu_content clearfix">
                                            <div class="menu-tab">
                                                <div class="row">
                                                    <ul class="nav nav-tabs flex-column col-2" data-toggle="tab-hover">
                                                        @php
                                                        $i =1;
                                                        @endphp
                                                        @foreach ($category->getSubcategory as $subcategory)
                                                        <li class="nav-item">
                                                            <a class="animated fadeIn" href="#tab-{{ $i }}"
                                                                data-toggle="tab">
                                                                <span class="tab-head">
                                                                    <span class="tab-text-title">
                                                                        <i class="fa fa-angle-double-right"></i>
                                                                        {{ $subcategory->name }}
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        @php
                                                        $i++;
                                                        @endphp
                                                        @endforeach
                                                    </ul>

                                                    <div class="tab-content col-10">
                                                        @php
                                                        $j=1;
                                                        @endphp
                                                        @foreach ($category->getSubcategory as $subcategory)
                                                        <div class="tab-pane fade show active" id="tab-{{ $j }}">
                                                            <div class="row">

                                                                @foreach (menueNews() as $item)
                                                                @if ($item->subcategory_id == $subcategory->id)
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <a
                                                                            href=" {{route('frontend.blog_read',$item->id)}}">
                                                                            <div class="utf_post_thumb">
                                                                                <img class="img-fluid"
                                                                                    src="{{ asset('uploads/blogs/') }}/{{ $item->thumbnail }}"
                                                                                    alt="" />
                                                                            </div>
                                                                        </a>
                                                                        <a class="utf_post_cat" href="">
                                                                            {{ $item->subcategory->name }}
                                                                        </a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="{{route('frontend.blog_read',$item->id)}}">{{ $item->title }}</a>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                                @endforeach

                                                                {{-- <div class="col-md-3">
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
                                                                </div> --}}
                                                            </div>
                                                        </div>
                                                        @php
                                                        $j++;
                                                        @endphp
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                    <li>
                                        <a
                                            href="{{ route('frontend.blog_category', $category->id)}}">{{ $category->name }}</a>
                                    </li>
                                    @endif
                                    </li>
                                    @endforeach
                                    <li class="@yield('video')">
                                        <a href="{{ route('frontend.video') }}">Video</a>
                                    </li>
                                    <li class="@yield('about')">
                                        <a href="{{ route('frontend.about')}}">About</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                    {{-- <div class="utf_nav_search"> <span id="search"><i class="fa fa-search"></i></span> </div>
                    <div class="utf_search_block" style="display: none;">
                        <input type="text" class="form-control" placeholder="Enter your keywords...">
                        <span class="utf_search_close">&times;</span>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Main Nav End -->
