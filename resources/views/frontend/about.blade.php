@extends('layouts.frontend')

@section('title')
{{ config('app.name') }} | About
@endsection

@section('about')
active
@endsection

@section('content')

<!-- Page Title Start -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page Title End -->

<!-- 1rd Block Wrapper Start -->
<div class="utf_block_wrapper about-block-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="single-post">
                    <div class="utf_post_content-area">
                        <div class="entry-content">
                            <p>{{ $about->upper_section}}</p>
                            <p><img class="pull-left" src="{{asset('uploads/about/'.$about->image)}}" alt=""></p>
                            <p>{{ $about->lower_section}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 1rd Block Wrapper End -->
@endsection
