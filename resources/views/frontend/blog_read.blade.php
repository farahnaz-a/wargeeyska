@extends('layouts.frontend')

@section('title')
{{ config('app.name') }} | Full news
@endsection

@section('content')

<!-- Page Title Start -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>{{ $blog->category->name }}</li>
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
                <div class="single-post">
                    <div class="post-media post-featured-image">
                        <img src="{{ asset('uploads/blogs') }}/{{ $blog->thumbnail }}" class="img-fluid" alt="">
                    </div>
                    <div class="utf_post_title-area">
                        @if ($blog->subcategory_id != null)
                        <a class="utf_post_cat" href="#">{{ $blog->subcategory->name }}</a>    
                        @else
                        <a class="utf_post_cat" href="#">{{ $blog->category->name }}</a>
                        @endif
                        <h2 class="utf_post_title">{{ $blog->title }}</h2>
                        <div class="utf_post_meta"> <span class="utf_post_author"> By {{ $blog->user->name }} </span>
                            <span class="utf_post_date"><i class="fa fa-clock-o"></i>
                                {{ $blog->created_at->format('d M Y, h:i') }}
                            </span>
                            <span class="post-hits">
                                <i class="fa fa-eye"> </i>
                                {{ $viewCount->view_count }}
                            </span>
                            <span class="post-comment">
                                <i class="fa fa-comments-o"></i>
                                <a href="#" class="comments-link">
                                    <span>01</span>
                                </a>
                            </span>
                        </div>
                    </div>

                    <div class="utf_post_content-area">
                        <div class="entry-content">

                            <blockquote>{{ $blog->quote }}</blockquote>
                            <p>{{ $blog->short_description }}</p>
                            @if ($blog->image != null)
                            <p><img class="pull-left" src="{{ asset('uploads/blogs/')}}/{{ $blog->image }}" alt=""></p>
                            @endif
                            <p>{{ $blog->description }}</p>


                        </div>

                        {{-- <div class="tags-area clearfix">
                        <div class="post-tags">
                            <span>Tags:</span>
                            <a href="#"># Business</a>
                            <a href="#"># Corporate</a>
                            <a href="#"># Services</a>
                            <a href="#"># Customer</a>
                        </div>
                    </div> --}}

                        {{-- <div class="share-items clearfix">
                        <ul class="post-social-icons unstyled">
                            <li class="facebook"> <a href="#"> <i class="fa fa-facebook"></i> <span
                                        class="ts-social-title">Facebook</span></a> </li>
                            <li class="twitter"> <a href="#"> <i class="fa fa-twitter"></i> <span
                                        class="ts-social-title">Twitter</span></a> </li>
                            <li class="gplus"> <a href="#"> <i class="fa fa-google-plus"></i> <span
                                        class="ts-social-title">Google +</span></a> </li>
                            <li class="pinterest"> <a href="#"> <i class="fa fa-pinterest"></i> <span
                                        class="ts-social-title">Pinterest</span></a> </li>
                        </ul>
                    </div> --}}
                    </div>
                </div>


                <nav class="post-navigation clearfix">
                    {{-- <div class="post-previous">
                        <a href="#"> <span><i class="fa fa-angle-left"></i>Previous Post</span>
                            <h3>Zhang social media pop also known when smart innocent...</h3>
                        </a>
                    </div>
                    <div class="post-next">
                        <a href="#"> <span>Next Post <i class="fa fa-angle-right"></i></span>
                            <h3>Zhang social media pop also known when smart innocent...</h3>
                        </a>
                    </div> --}}
                </nav>

                <div class="author-box">
                    {{-- <div class="author-img pull-left"> 
                      <img src="images/news/author.png" alt=""> 
                    </div>
                    <div class="author-info">
                        <h3>Miss Lisa Doe</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since It has survived not only five centuries,
                            but also the leap into electronic type setting, remaining essentially unchanged.</p>
                    </div> --}}
                </div>

                <div class="related-posts block">
                    <h3 class="utf_block_title"><span>Related Posts</span></h3>
                    <div id="utf_latest_news_slide" class="owl-carousel owl-theme utf_latest_news_slide">
                        @foreach ($relateds as $related)
                       
                        <div class="item">
                            <div class="utf_post_block_style clearfix">
                                <div class="utf_post_thumb">
                                    <a href="{{route('frontend.blog_read',$related->id)}}">
                                        <img class="img-fluid"
                                            src="{{ asset('uploads/blogs/')}}/{{ $related->thumbnail}}" alt="" />
                                    </a>
                                </div>
                                @if ($related->subcategory_id != null)
                                <a class="utf_post_cat" href="#">{{ $related->subcategory->name }}</a>    
                                @else
                                <a class="utf_post_cat" href="#">{{ $related->category->name }}</a>
                                @endif
                                
                                <div class="utf_post_content">
                                    <h2 class="utf_post_title title-medium">
                                        <a href="{{route('frontend.blog_read',$related->id)}}">{{ $related->title }}</a>
                                    </h2>
                                    <div class="utf_post_meta">
                                        <span class="utf_post_date">
                                            <i class="fa fa-clock-o"></i>
                                            {{ $related->created_at->format('d M Y, h:i') }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>  
                 
                        @endforeach
                    </div>
                </div>

                <!-- Post comment start -->
                <div id="comments" class="comments-area block">
                    <h3 class="utf_block_title"><span>03 Comments</span></h3>
                    <ul class="comments-list">

                        @foreach ($comments as $comment)
                        <li>
                            <div class="comment"> 
                                <div class="comment-body">
                                    <div class="meta-data">
                                         <span class="comment-author">{{$comment->name}}</span>
                                         <span class="comment-date">{{ $comment->email}}</span>
                                         <span class="comment-date pull-right">{{ $comment->created_at->format('d M, Y')}}</span> 
                                    </div>
                                    <div class="comment-content">
                                        <p>{{ $comment->text }}</p>
                                    </div>
                                    <div class="text-left"> 
                                        <a class="comment-reply" href="#">
                                          <i class="fa fa-share"></i> Reply
                                        </a> 
                                    </div>
                                </div>
                            </div>
                             
                              <ul class="comments-reply">
                                <li>
                                    <div class="comment"> 
                                        <div class="comment-body">
                                            <div class="meta-data"> <span class="comment-author">Miss Lisa Doe</span>
                                                <span class="comment-date pull-right">15 Jan, 2021</span> </div>
                                            <div class="comment-content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever since It has survived not only five centuries, but also the
                                                    leap into electronic type setting, remaining essentially unchanged.
                                                </p>
                                            </div>
                                            <div class="text-left"> <a class="comment-reply" href="#"><i
                                                        class="fa fa-share"></i> Reply</a> </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                             
                           
                            {{-- <div class="comment last"> <img class="comment-avatar pull-left" alt=""
                                    src="images/news/user1.png">
                                <div class="comment-body">
                                    <div class="meta-data"> <span class="comment-author">Miss Lisa Doe</span> <span
                                            class="comment-date pull-right">15 Jan, 2021</span> </div>
                                    <div class="comment-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since It has
                                            survived not only five centuries, but also the leap into electronic type
                                            setting, remaining essentially unchanged.</p>
                                    </div>
                                    <div class="text-left"> <a class="comment-reply" href="#"><i
                                                class="fa fa-share"></i> Reply</a> </div>
                                </div>
                            </div> --}}
                        </li>
                        @endforeach
                        
                    </ul>
                </div>
                <!-- Post comment end -->

                <!-- Comments Form Start -->
                <div class="comments-form">
                    <h3 class="title-normal">Leave a comment</h3>
                    <form action="{{ route('frontend.comment',$blog->id)}}" method="POST" >
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" placeholder="Name" type="text"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" placeholder="Email" type="email"
                                        required>
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Phone" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Subject" type="text" required>
                                </div>
                            </div> --}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control required-field" id="message" placeholder="Comment" name="text"
                                        rows="10" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                            <button class="comments-btn btn btn-primary" type="submit">Post Comment</button>
                        </div>
                    </form>
                </div>
                <!-- Comments form end -->
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="sidebar utf_sidebar_right">
                    {{-- <div class="widget">
                        <h3 class="utf_block_title"><span>Follow Us</span></h3>
                        <ul class="social-icon">
                            <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div> --}}

                    <div class="widget color-default">
                        <h3 class="utf_block_title"><span>Popular News</span></h3>
                        <div class="utf_list_post_block">
                            <ul class="utf_list_post">
                                @foreach ( $populer as $item)
                                @if ($item->blog_id != $blog->id)
                                <li class="clearfix">
                                    <div class="utf_post_block_style post-float clearfix">
                                        <div class="utf_post_thumb"> <a href="{{route('frontend.blog_read',$item->blog_id)}}">
                                                <img class="img-fluid" src="{{asset('uploads/blogs/')}}/{{ $item->blog->thumbnail }}" alt=""/>
                                                {{-- <a class="utf_post_cat" href="#">{{ $item->blog->subcategoy->name }}</a>--}}
                                        </div> 
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title title-small"> <a
                                                    href="{{route('frontend.blog_read',$item->blog_id)}}">{{ $item->blog->title}}</a> </h2>
                                            <div class="utf_post_meta"> 
                                                {{-- <span class="utf_post_author">
                                                    <i class="fa fa-user"></i>
                                                    <a href="#">{{ $item->blog->user->name }}</a>
                                                </span> --}}
                                                <span class="utf_post_date"><i class="fa fa-clock-o">
                                                    </i>{{ $item->created_at->format('d M Y, h:i') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div > 
                        <img src="{{ asset('frontend_assets/images/banner-ads/ad-sidebar.png')}}" alt="" />
                        {{-- <img src="https://static.remove.bg/remove-bg-web/8fb1a6ef22fefc0b0866661b4c9b922515be4ae9/assets/start_remove-c851bdf8d3127a24e2d137a55b1b427378cd17385b01aec6e59d5d4b5f39d2ec.png" alt=""/> --}}
                    </div>

                    <div class="widget widget-tags">
                        <h3 class="utf_block_title"><span>Popular Tags</span></h3>
                        <ul class="unstyled clearfix">
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Corporate</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Customer</a></li>
                            <li><a href="#">Money</a></li>
                            <li><a href="#">Health</a></li>
                            <li><a href="#">Lifestyles</a></li>
                            <li><a href="#">Traveling</a></li>
                            <li><a href="#">Partners</a></li>
                            <li><a href="#">Wordpress</a></li>
                            <li><a href="#">Customer</a></li>
                        </ul>
                    </div>

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
