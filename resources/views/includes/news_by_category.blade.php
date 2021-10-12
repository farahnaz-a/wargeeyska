<section class="utf_block_wrapper p-bottom-0">
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-lg-4">
                <div class="block color-dark-blue">

                    <h3 class="utf_block_title">
                        <span>{{ $category->name }}</span>
                    </h3>

                    @foreach ($category->getblogs->take(1) as  $blog)  
                        <div class="utf_post_overaly_style clearfix">
                            <div class="utf_post_thumb"> <a href="{{ route('frontend.blog_read',$blog->id) }}"> 
                                <img class="img-fluid"
                                        src="{{ asset('uploads/blogs/')}}/{{ $blog->thumbnail }}" alt=""/> </a> 
                                    </div>
                            <div class="utf_post_content">
                                <h2 class="utf_post_title"> 
                                    <a href="{{ route('frontend.blog_read',$blog->id) }}">{{ $blog->title }}</a>
                                </h2>
                                <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> 
                                    <a href="#">{{ $blog->user->name }}</a></span> 
                                    <span class="utf_post_date">
                                        <i class="fa fa-clock-o"></i> {{$blog->created_at->format('d M, Y')}}
                                    </span>
                                </div>
                            </div>
                        </div> 
                        
                    @endforeach


                    <div class="utf_list_post_block">
                        <ul class="utf_list_post">
                            <?php $i=1 ?>
                            @foreach ($category->getblogs->skip(1) as $blog)
                            @if ($blog->category_id == $category->id)
                            @if ($i <= 4) 
                            <?php $i++ ?> 
                                <li class="clearfix">
                                    <div class="utf_post_block_style post-float clearfix">
                                        <div class="utf_post_thumb">
                                            <a href="{{ route('frontend.blog_read',$blog->id) }}">
                                                <img class="img-fluid"
                                                    src="{{ asset('uploads/blogs/')}}/{{ $blog->thumbnail }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title title-small">
                                                <a href="{{ route('frontend.blog_read',$blog->id) }}">{{ $blog->title }}</a>
                                            </h2>
                                            <div class="utf_post_meta">
                                                <span class="utf_post_author">
                                                    <i class="fa fa-user"></i>
                                                    <a href="#">{{ $blog->user->name }}</a>
                                                </span>
                                                <span class="utf_post_date">
                                                    <i class="fa fa-clock-o"></i>{{$blog->created_at->format('d M, Y')}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endif
                                @endif
                                @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


























<!-- 2rd Block Wrapper Start -->
{{-- <section class="utf_block_wrapper p-bottom-0">
    <div class="container">
        <div class="row">


            @foreach ($categories as $category)
            <div class="col-lg-4">
                <div class="block color-dark-blue">
                    <h3 class="utf_block_title">
                        <span>{{ $category->name }}</span>
</h3>

<div class="utf_list_post_block">
    <ul class="utf_list_post">
        @foreach ($blogs as $key => $blog)
        @if ($key > 1)
        @if ($blog->category_id == $category->id)
        <li class="clearfix">
            <div class="utf_post_block_style post-float clearfix">
                <div class="utf_post_thumb"> <a href="{{ route('frontend.blog_read',$blog->id) }}">
                        <img class="img-fluid" src="{{ asset('uploads/blogs') }}/{{ $blog->image }}" alt="" /> </a>
                </div>
                <div class="utf_post_content">
                    <h2 class="utf_post_title title-small"> <a
                            href="{{ route('frontend.blog_read',$blog->id) }}">{{$blog->title}}</a>
                    </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i>
                            <a href="#">{{ $blog->user->name }}</a></span> <span class="utf_post_date"><i
                                class="fa fa-clock-o"></i>
                            {{ $blog->created_at->format('d M Y') }}</span>
                    </div>
                </div>
            </div>
        </li>
        @endif
        @endif
        @endforeach
    </ul>
</div>
</div>
@endforeach
</div>
</div>
</section> --}}
<!-- 2rd Block Wrapper End -->
