@extends('layouts.frontend')

@section('title')
{{ config('app.name') }} | {{ $category->name }}
@endsection

@section('content')

<!-- Page Title Start -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>{{ $category->name }}</li>
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
                    <h3 class="utf_block_title"><span>{{ $category->name }}</span></h3>
                    <ul class="subCategory unstyled">
                        @foreach ($subcategories as $subcategory)
                        <li><a href="#">{{ $subcategory->name }}</a></li>
                        @endforeach
                    </ul>

                    @foreach ($blogs as $blog)
                    <div class="utf_post_block_style post-list clearfix">
                        <div class="row">
                           
                            <div class="col-lg-5 col-md-6">
                                <div class="utf_post_thumb thumb-float-style">
                                    
                                    {{-- @if ($blogs->video != null)
                                      <video width="320" height="240" controls>
                                        <source src="" type="video/mp4">
                                      </video>
                                    @else --}}
                                    <a href="{{route('frontend.blog_read',$blog->id)}}">
                                        <img class="img-fluid"
                                            src="{{ asset('uploads/blogs/')}}/{{ $blog->thumbnail}}" alt="">
                                    </a>
                                    {{-- @endif --}}
                                  
                                    @if ($blog->subcategory_id != null)
                                    <a class="utf_post_cat" href="#">{{ $blog->subcategory->name }}</a> 
                                    @else
                                    <a class="utf_post_cat" href="#">{{ $blog->category->name }}</a> 
                                    @endif
                                </div>
                                    
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="utf_post_content">
                                    <h2 class="utf_post_title title-large">
                                        
                                        <a href="{{route('frontend.blog_read',$blog->id)}}">{{ $blog->title }}</a>
                                    </h2>
                                    <div class="utf_post_meta">
                                        <span class="utf_post_author">
                                            <i class="fa fa-user"></i>
                                            <a href="#">{{ $blog->user->name }}</a>
                                        </span>
                                        <span class="utf_post_date">
                                            <i class="fa fa-clock-o"></i>
                                            {{ $blog->created_at->format('d M Y, h:i') }}
                                        </span>

                                    </div>
                                    @if ($blog->short_description != null)
                                    <p>{{ Str::limit($blog->short_description, 110) }}</p>
                                    @else
                                    
                                    @endif
                                    
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

                    <div class="widget text-center"> <img class="banner img-fluid"
                            src="images/banner-ads/ad-sidebar.png" alt=""> </div>
                    <div class="widget m-bottom-0">
                        <h3 class="utf_block_title"><span>Newsletter</span></h3>
                        <div class="utf_newsletter_block">
                            <div class="utf_newsletter_introtext">
                                <h4>Subscribe Newsletter!</h4>
                                <p>Lorem ipsum dolor sit consectetur adipiscing elit Maecenas in pulvinar neque Nulla
                                    finibus lobortis pulvinar.</p>
                            </div>
                            <div class="utf_newsletter_form">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" id="utf_newsletter_form-email"
                                            class="form-control form-control-lg" placeholder="E-Mail Address"
                                            autocomplete="off">
                                        <button class="btn btn-primary">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 1rd Block Wrapper End -->

@endsection