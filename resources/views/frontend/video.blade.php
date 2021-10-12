@extends('layouts.frontend')

@section('title')
{{ config('app.name') }} | Video
@endsection


@section('video')
active
@endsection


@section('content')

<!-- Page Title Start -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Video</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page title end -->

<!-- 1rd Block Wrapper Start -->
<section class="utf_block_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="block category-listing category-style2">
                    <h3 class="utf_block_title">
                        <span>Video</span>
                    </h3>
                  

                    @foreach ($videos as $video)
                    <div class="utf_post_block_style post-list clearfix">
                        <div class="row">
                           
                            <div class="col-lg-12 col-md-12">
                                <div >
                                    
                                    {{-- @if ($blogs->video != null)
                                      <video width="320" height="240" controls>
                                        <source src="" type="video/mp4">
                                      </video>
                                    @else --}}
                                 
                                        <video width="100%" height="400" controls>
                                            <source src="{{ asset('uploads/video') }}/{{ $video->video }}" type="video/mp4">
                                          </video>
                                   
                                    {{-- @endif --}}
                                  
                                  
                                </div>
                                    
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="utf_post_content">
                                    <h2 class="utf_post_title title-large">
                                        
                                        {{ $video->title }}
                                    </h2>
                                    <div class="utf_post_meta">
                                        <span class="utf_post_author">
                                            <i class="fa fa-user"></i>
                                            <a href="#">{{ $video->user->name }}</a>
                                        </span>
                                        <span class="utf_post_date">
                                            <i class="fa fa-clock-o"></i>
                                            {{ $video->created_at->format('d M Y, h:i') }}
                                        </span>

                                    </div>
                                
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- {{ $blogs->links() }} --}}
                </div>      
            </div>
            

            <div class="col-lg-4 col-md-12">
                <div class="sidebar utf_sidebar_right">
                    <div class="widget color-default">
                        <h3 class="utf_block_title"><span>Popular News</span></h3>
                        <div class="utf_list_post_block">
                            <ul class="utf_list_post">
                                <li class="clearfix">
                                    <div class="utf_post_block_style post-float clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/tech/gadget3.jpg" alt=""> </a> <a
                                                class="utf_post_cat" href="#">Lifestyle</a> </div>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop
                                                    also known when smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John Wick</a></span> <span
                                                    class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan,
                                                    2021</span> </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="utf_post_block_style post-float clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/lifestyle/travel5.jpg" alt=""> </a> <a
                                                class="utf_post_cat" href="#">Travel</a> </div>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop
                                                    also known when smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John Wick</a></span> <span
                                                    class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan,
                                                    2021</span> </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="utf_post_block_style post-float clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/tech/robot5.jpg" alt=""> </a> <a
                                                class="utf_post_cat" href="#">Traveling</a> </div>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop
                                                    also known when smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John Wick</a></span> <span
                                                    class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan,
                                                    2021</span> </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="utf_post_block_style post-float clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/lifestyle/food1.jpg" alt=""> </a> <a
                                                class="utf_post_cat" href="#">Food</a> </div>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop
                                                    also known when smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John Wick</a></span> <span
                                                    class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan,
                                                    2021</span> </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                   
                  
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 1rd Block Wrapper End -->

@endsection