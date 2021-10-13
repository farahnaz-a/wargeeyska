<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin @yield('title')</title>

    <link rel="apple-touch-icon" href="{{ asset('uploads/favicon/'.favicon()->image) }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashboard_assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/themes/semi-dark-layout.css') }}">



    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard_assets/vendors/css/editors/quill/katex.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard_assets/vendors/css/editors/quill/monokai-sublime.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard_assets/vendors/css/editors/quill/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/vendors/css/extensions/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard_assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css2?family=Inconsolata&amp;family=Roboto+Slab&amp;family=Slabo+27px&amp;family=Sofia&amp;family=Ubuntu+Mono&amp;display=swap">
    <!-- END: Vendor CSS-->



    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard_assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard_assets/css/plugins/forms/form-quill-editor.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard_assets/css/plugins/extensions/ext-component-toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/pages/app-email.css') }}">
    <!-- END: Page CSS-->

    @yield('css')

    <!-- BEGIN: DataTable CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard_assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard_assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard_assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard_assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css') }}">
    <!-- END: DataTable CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('dashboard_assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->

    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/style.css') }}"> --}}

    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">
    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"></li>
                    <a class="nav-link menu-toggle" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-menu ficon">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </a>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link nav-link-style">
                        <i class="ficon" data-feather="moon"></i>
                    </a>
                </li>

                {{-- <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
                            data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div><input
                            class="form-control input" type="text" placeholder="Enter Text..." tabindex="-1"
                            data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>
                </li> --}}
                <li class="nav-item dropdown dropdown-notification mr-25">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-bell ficon">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                        @if (unread()->count() != 0)
                        <span class="badge badge-pill badge-danger badge-up">{{ unread()->count() }}</span>
                        @else
                        <span class="badge badge-pill badge-danger badge-up d-none">{{ unread()->count() }}</span>
                        @endif

                    </a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
                                <div class="badge badge-pill badge-light-primary">{{ unread()->count() }}</div>
                            </div>
                        </li>
                        @foreach (unread() as $unread)
                        <li class="scrollable-container media-list ps">
                            <a class="d-flex" href="{{route('reporter.blog_details',$unread->id)}}">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        {{-- <div class="avatar"><img
                                                src="{{ asset('dashboard_assets/images/portrait/small/avatar-s-15.jpg') }}"
                                        alt="avatar" width="32" height="32">
                                    </div> --}}
                                </div>
                                    <div class="media-body">
                                        <p class="media-heading">
                                            <span class="font-weight-bolder">{{ $unread->user->name }}</span>
                                        </p>
                                        <small class="notification-text">
                                            {{ $unread->title }}
                                        </small>
                                    </div>
                                </div>
                            </a>
                        </li>
                       @endforeach
                   </ul>
                </li>
        <li class="nav-item dropdown dropdown-user">
            <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="user-nav d-sm-flex d-none">
                    <span class="user-name font-weight-bolder">{{ Auth::user()->name }}</span>
                    <span class="user-status">Admin</span>
                </div>
                <span class="avatar">
                    <img class="round" src="{{ Auth::user()->profile_photo_url }}" alt="avatar" height="40" width="40">
                    <span class="avatar-status-online"></span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                <a class="dropdown-item" href="{{ url('user/profile') }}"><i class="mr-50"
                        data-feather="user"></i>Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();"><i class="mr-50" data-feather="power"></i>Logout</a>
                </form>
            </div>
        </li>
        </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center">
            <a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75">
                        <img src="../../../images/icons/xls.png" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p>
                        <small class="text-muted">Marketing Manager</small>
                    </div>
                </div>
                <small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75">
                        <img src="../../../images/icons/jpg.png" alt="png" height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p>
                        <small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
                <small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a>
        </li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between">
            <a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start">
                    <span class="mr-75" data-feather="alert-circle"></span>
                    <span>No results found.</span>
                </div>
            </a>
        </li>
    </ul>
    <!-- END: Header-->
    @if (session('deny'))
    <div class="alert alert-danger">{{ session('deny') }}</div>
    @endif
    </div>
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header ">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="{{ route('admin.dashboard')}}">
                        <span class="brand-logo">
                            <img src="{{asset('uploads/logo/')}}/{{logo()->logo}}" alt="Logo">
                        </span>
                    </a>
                </li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc">
                        </i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="shadow-bottom "></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item @yield('view-website')">
                    <a class="d-flex align-items-center" href="{{ url('/') }}">
                        <i data-feather="home"></i>
                        <span class="menu-title text-truncate" data-i18n="Email">View Website</span>
                    </a>
                </li>
                <li class="navigation-header">
                    <span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span>
                    <i data-feather="more-horizontal"></i>
                </li>
                <li class="nav-item @yield('dashboard')">
                    <a class="d-flex align-items-center" href="{{ route('admin.dashboard') }}"><i
                            data-feather='users'></i>
                        <span class="menu-title text-truncate" data-i18n="Chat">Dashboard</span>
                    </a>
                </li>

                {{-- Category & Sub Category --}}
                <li class="navigation-header">
                    <span data-i18n="Categories &amp; Sub-Categories">Categories &amp; Sub-Categories</span>
                    <i data-feather="more-horizontal"></i>
                </li>

                {{-- category --}}
                <li class="nav-item has-sub" style="">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather='target'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Category</span>
                    </a>
                    <ul class="menu-content">
                        <li class="nav-item @yield('CategoryList')">
                            <a class="d-flex align-items-center" href="{{route('categories.index')}}">
                                <i data-feather='target'></i>
                                <span class="menu-item text-truncate" data-i18n="List">List</span>
                            </a>
                        </li>
                        <li class="@yield('CategoryCreate')">
                            <a class="d-flex align-items-center" href="{{route('categories.create')}}">
                                <i data-feather='target'></i>
                                <span class="menu-item text-truncate" data-i18n="Add">Create</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- sub category --}}
                <li class="nav-item has-sub" style="">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather='target'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Subcategory</span>
                    </a>
                    <ul class="menu-content">
                        <li class="nav-item @yield('SubCategoryList')">
                            <a class="d-flex align-items-center" href="{{route('subcategories.index')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                </svg>
                                <span class="menu-item text-truncate" data-i18n="List">List</span>
                            </a>
                        </li>
                        <li class="@yield('SubCategoryCreate')">
                            <a class="d-flex align-items-center" href="{{route('subcategories.create')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                </svg>
                                <span class="menu-item text-truncate" data-i18n="Add">Create</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- About --}}
                <li class="navigation-header">
                    <span data-i18n="About">About Section</span>
                    <i data-feather="more-horizontal"></i>
                </li>
                {{-- About --}}
                <li class="nav-item @yield('aboutIndex')">
                    <a class="d-flex align-items-center" href="{{ route('about.index') }}"><i data-feather='users'></i>
                        <span class="menu-title text-truncate" data-i18n="Chat">About</span>
                    </a>
                </li>

                {{-- Ads --}}
                <li class="navigation-header">
                    <span data-i18n="Blogs">ads</span>
                    <i data-feather="more-horizontal"></i>
                </li>
                <li class="nav-item has-sub" style="">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather='target'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Ads</span>
                    </a>
                    <ul class="menu-content">
                        <li class="nav-item @yield('ad')">
                            <a class="d-flex align-items-center" href="{{route('adAdmin.index')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                </svg>
                                <span class="menu-item text-truncate" data-i18n="List">Ad List</span>
                            </a>
                        </li>
                        <li class=" nav-item @yield('adRequest')">
                            <a class="d-flex align-items-center" href="{{route('adRequest')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                </svg>
                                <span class="menu-item text-truncate" data-i18n="Add">Requested Ads</span>
                            </a>
                        </li>
                        <li class=" nav-item @yield('adPost')">
                            <a class="d-flex align-items-center" href="{{route('adAdmin.create')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                </svg>
                                <span class="menu-item text-truncate" data-i18n="Add">Post a add</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Blogs --}}
                <li class="navigation-header">
                    <span data-i18n="About">Blogs</span>
                    <i data-feather="more-horizontal"></i>
                </li>
                {{-- Blogs --}}
                <li class="nav-item @yield('reporterblogsIndex')">
                    <a class="d-flex align-items-center" href="{{route('reporter.blog')}}"><i data-feather='users'></i>
                        <span class="menu-title text-truncate" data-i18n="Chat">Reporter Blogs</span>
                    </a>
                </li>
                {{-- Pending Blogs --}}
                <li class="nav-item @yield('reporterblogsPending')">
                    <a class="d-flex align-items-center" href="{{route('reporter.pending_blog')}}"><i
                            data-feather='users'></i>
                        <span class="menu-title text-truncate" data-i18n="Chat">Pending Requist</span>
                    </a>
                </li>

                {{-- Videos--}}
                <li class="navigation-header">
                    <span data-i18n="About">Videos</span>
                    <i data-feather="more-horizontal"></i>
                </li>

                <li class="nav-item has-sub" style="">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather='target'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Videos</span>
                    </a>
                    <ul class="menu-content">
                        <li class="nav-item @yield('videoIndex')">
                            <a class="d-flex align-items-center" href="{{ route('reportervideos.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                </svg>
                                <span class="menu-item text-truncate" data-i18n="List">Aproved Videos</span>
                            </a>
                        </li>
                        <li class="@yield('videoRequest')">
                            <a class="d-flex align-items-center" href="{{ route('admin.videoRequest') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                </svg>
                                <span class="menu-item text-truncate" data-i18n="Add">Pending Videos</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Footer, Logo and favicon--}}
                <li class="navigation-header">
                    <span data-i18n="About">Footer, Logo and Favicon</span>
                    <i data-feather="more-horizontal"></i>
                </li>

                {{-- Logo --}}
                <li class="nav-item @yield('logoIndex')">
                    <a class="d-flex align-items-center" href="{{ route('logo.index') }}"><i data-feather='users'></i>
                        <span class="menu-title text-truncate" data-i18n="Chat">Logo</span>
                    </a>
                </li>

                {{-- Favicon --}}
                <li class="nav-item @yield('faviconIndex')">
                    <a class="d-flex align-items-center" href="{{ route('favicon.index') }}"><i
                            data-feather='users'></i>
                        <span class="menu-title text-truncate" data-i18n="Chat">Favicon</span>
                    </a>
                </li>

                {{-- Footer About us --}}
                <li class="nav-item @yield('footerAboutIndex')">
                    <a class="d-flex align-items-center" href="{{route('footer_about.index')}}"><i
                            data-feather='users'></i>
                        <span class="menu-title text-truncate" data-i18n="Chat">Footer About</span>
                    </a>
                </li>
                {{-- Footer Contact us --}}
                <li class="nav-item @yield('footerContactIndex')">
                    <a class="d-flex align-items-center" href="{{ route('footer_contact.index') }}"><i
                            data-feather='users'></i>
                        <span class="menu-title text-truncate" data-i18n="Chat">Footer Contact</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay">
        </div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            @yield('breadcrumb')

                            <!-- <div class="content-header-left col-md-12 col-12 mb-2">
                            <div class="row breadcrumbs-top">
                                <div class="col-12">
                                    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
                                    <div class="breadcrumb-wrapper">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">Banners</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        {{-- content start from here --}}
                        @yield('content') {{-- content end her
                    e --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END: Content-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0">
            <span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021
                <a class="ml-25" href="https://dgtaltech.com" target="_blank">Digital Tech</a>
                <span class="d-none d-sm-inline-block">, All rights Reserved</span>
            </span>
            <span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i>
            </span>
        </p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('dashboard_assets/vendors/js/vendors.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->

    <script src="{{ asset('dashboard_assets/vendors/js/editors/quill/katex.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/vendors/js/editors/quill/highlight.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/vendors/js/editors/quill/quill.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: DataTable  JS-->
    <script src="{{ asset('dashboard_assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <!-- END:  DataTable JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('dashboard_assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('dashboard_assets/js/core/app.js') }}"></script>

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('dashboard_assets/js/scripts/pages/app-email.js') }}"></script>
    <!-- END: Page JS-->
    <!-- END: Theme JS-->


    {{-- Data Table --}}
    <script>
        $(document).ready(function () {
            $('#data_table').DataTable({
                buttons: [{
                        extend: 'copy',
                        text: 'Copy to clipboard'
                    },
                    'excel',
                    'pdf'
                ]
            });
        })

    </script>
    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->
    <script>
        $(window).on('load',
            function () {
                if (feather) {
                    feather.replace({
                            width: 14,
                            height: 14
                        }

                    );
                }
            }

        )

    </script>

    @yield('js')

</body>

<!-- END: Body-->

</html>
