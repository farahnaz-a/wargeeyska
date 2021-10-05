{{-- {{ asset('frontend_assets/') }} --}}
<section class="utf_latest_new_area pb-bottom-20">
    <div class="container">
        <div class="utf_latest_news block color-red">
            <h3 class="utf_block_title"><span>Latest News</span></h3>
            <div id="utf_latest_news_slide" class="owl-carousel owl-theme utf_latest_news_slide">

                @foreach ($latests->chunk(2) as $latest)
                <div class="item">
                    <ul class="utf_list_post">
                        @foreach ($latest as $item)
                        <li class="clearfix">
                            <div class="utf_post_block_style clearfix">
                                <div class="utf_post_thumb">
                                    <a href="{{ route('frontend.blog_read',$item->id) }}">
                                        <img class="img-fluid" src="{{ asset('uploads/blogs/')}}/{{ $item->thumbnail }}"alt="" />
                                    </a>
                                </div>
                                <a class="utf_post_cat" href="#">{{ $item->subcategory->name }}</a>
                                <div class="utf_post_content">
                                    <h2 class="utf_post_title title-medium">
                                        <a href="{{ route('frontend.blog_read',$item->id) }}">{{ $item->title }}</a> </h2>
                                    <div class="utf_post_meta">
                                        <span class="utf_post_author">
                                            <i class="fa fa-user"></i>
                                            {{ $item->user->name }}
                                        </span> <span class="utf_post_date">
                                            <i class="fa fa-clock-o"></i>{{ $item->created_at->format('d M Y, h:i') }}</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>


                @endforeach

            </div>
        </div>
    </div>
   
</section>
