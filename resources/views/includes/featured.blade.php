<div class="container">
    <div class="row">
        <div class="col-lg-7 col-md-12 pad-r">
            <div id="utf_featured_slider" class="owl-carousel owl-theme utf_featured_slider">
                @foreach ($featuredNews1 as $key => $blog)

                <div class="item" style="background-image:url({{asset('uploads/blogs')}}/{{ $blog->thumbnail }})">
                    <div class="utf_featured_post">
                        <div class="utf_post_content">{{$blog->subcategory->name}}
                            <h2 class="utf_post_title title-extra-large">
                                <a href="{{ route('frontend.blog_read',$blog->id) }}">{{$blog->title}}</a>
                            </h2>
                            <span class="utf_post_author">
                                <i class="fa fa-user"></i>
                                {{$blog->user->name}}
                            </span>
                            <span class="utf_post_date">
                                <i class="fa fa-clock-o"></i>
                                {{$blog->created_at->format('d M Y, h:i')}}
                            </span>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>


        <div class="col-lg-5 col-md-12 pad-l">
            <div class="row">
                @if ($featuredNews2->count() != 0)
                <div class="col-md-12">
                    <div class="utf_post_overaly_style contentTop hot-post-top clearfix">
                        <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                    src="{{asset('uploads/blogs')}}/{{ $featuredNews2->thumbnail }}" alt="" /></a>
                        </div>
                        <div class="utf_post_content"> <a class="utf_post_cat"
                                href="#">{{ $featuredNews2->subcategory->name}}</a>
                            <h2 class="utf_post_title title-large"> <a
                                    href="{{ route('frontend.blog_read',$blog->id) }}">{{ $featuredNews2->title}}</a>
                            </h2>
                            <span class="utf_post_author"><i
                                    class="fa fa-user"></i>{{ $featuredNews2->user->name}}</span>
                            <span class="utf_post_date"><i
                                    class="fa fa-clock-o"></i>{{$featuredNews2->created_at->format('d M Y, h:i')}}</span>
                        </div>
                    </div>
                </div>

                @else

                <div class="col-md-12">
                    <div class="utf_post_overaly_style contentTop hot-post-top clearfix">

                        <div class="utf_post_content">
                            <h2 class="utf_post_title title-large text-danger">No Latest news </h2>

                        </div>
                    </div>
                </div>

                @endif




                @if ($featuredNews3 != null)
                <div class="col-md-6 pad-r-small">
                    <div class="utf_post_overaly_style contentTop utf_hot_post_bottom clearfix">
                        <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                    src="{{asset('uploads/blogs')}}/{{ $featuredNews3->thumbnail }}" alt="" /></a>
                        </div>
                        <div class="utf_post_content"> <a class="utf_post_cat"
                                href="#">{{ $featuredNews3->subcategory->name}}</a>
                            <h2 class="utf_post_title title-medium"> <a
                                    href="{{ route('frontend.blog_read',$blog->id) }}">{{ $featuredNews3->title}}</a>
                            </h2>
                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                        class="fa fa-user"></i>{{ $featuredNews3->user->name}}</span></div>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-md-6 pad-r-small">
                    <div class="utf_post_overaly_style contentTop utf_hot_post_bottom clearfix">

                        <div class="utf_post_content">
                            <h2 class="utf_post_title title-medium text-danger"> No Latest News </h2>

                        </div>
                    </div>
                </div>
                @endif



                @if ($featuredNews4 != null)
                <div class="col-md-6 pad-r-small">
                    <div class="utf_post_overaly_style contentTop utf_hot_post_bottom clearfix">
                        <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                    src="{{asset('uploads/blogs')}}/{{ $featuredNews4->thumbnail }}" alt="" /></a>
                        </div>
                        <div class="utf_post_content"> <a class="utf_post_cat"
                                href="#">{{ $featuredNews4->subcategory->name}}</a>
                            <h2 class="utf_post_title title-medium"> <a
                                    href="{{ route('frontend.blog_read',$blog->id) }}">{{ $featuredNews4->title}}</a>
                            </h2>
                            <div class="utf_post_meta"> 
                                <span class="utf_post_author">
                                    <i class="fa fa-user"></i>
                                    {{ $featuredNews4->user->name}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-md-6 pad-r-small">
                    <div class="utf_post_overaly_style contentTop utf_hot_post_bottom clearfix">
                        <div class="utf_post_content">
                            <h2 class="utf_post_title title-medium text-danger"> No Latest News </h2>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
