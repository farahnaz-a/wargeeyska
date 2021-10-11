<section class="utf_block_wrapper p-bottom-0">
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-lg-4">
                <div class="block color-dark-blue">
                    <h3 class="utf_block_title">{{ $category->name }}</h3>
                    {{-- <div class="utf_post_overaly_style clearfix">
                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                    src="images/news/lifestyle/travel1.jpg" alt="" /> </a> </div>
                        <div class="utf_post_content">
                            <h2 class="utf_post_title"> <a href="#">Zhang social media pop also known when smart
                                    innocent...</a>
                            </h2>
                            <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a
                                        href="#">John
                                        Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25
                                    Jan, 2021</span>
                            </div>
                        </div>
                    </div> --}}

                    <div class="utf_list_post_block">
                        <ul class="utf_list_post">
                            @foreach ($blogs as $key => $blog)
                            @if ($key < 10)
                            @if ($blog->category_id == $category->id)
                        
                            <li class="clearfix">
                                <div class="utf_post_block_style post-float clearfix">
                                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                src="{{ asset('uploads/blogs/')}}/{{ $blog->thumbnail }}" alt="" /> </a> </div>
                                    <div class="utf_post_content">
                                        <h2 class="utf_post_title title-small"><a href="#">{{ $blog->title }}</a> </h2>
                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                    class="fa fa-user"></i> <a href="#">John Wick</a></span> <span
                                                class="utf_post_date"><i class="fa fa-clock-o"></i> 25
                                                Jan, 2021</span> </div>
                                    </div>
                                </div>
                            </li> 
                            @endif
                            @endif
                            @endforeach
                           

                            {{-- <li class="clearfix">
                                <div class="utf_post_block_style post-float clearfix">
                                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                src="images/news/lifestyle/travel3.jpg" alt="" /> </a> </div>
                                    <div class="utf_post_content">
                                        <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also
                                                known when smart
                                                innocent...</a> </h2>
                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                    class="fa fa-user"></i> <a href="#">John Wick</a></span> <span
                                                class="utf_post_date"><i class="fa fa-clock-o"></i> 25
                                                Jan, 2021</span> </div>
                                    </div>
                                </div>
                            </li>

                            <li class="clearfix">
                                <div class="utf_post_block_style post-float clearfix">
                                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                src="images/news/lifestyle/travel4.jpg" alt="" /> </a> </div>
                                    <div class="utf_post_content">
                                        <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also
                                                known when smart
                                                innocent...</a> </h2>
                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                    class="fa fa-user"></i> <a href="#">John Wick</a></span> <span
                                                class="utf_post_date"><i class="fa fa-clock-o"></i> 25
                                                Jan, 2021</span> </div>
                                    </div>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                </div>
                
                
            </div>
            @endforeach

            {{-- <div class="col-lg-4">
                <div class="block color-aqua">
                    <h3 class="utf_block_title"><span>Lifestyle News</span></h3>
                    <div class="utf_post_overaly_style clearfix">
                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                    src="images/news/tech/gadget1.jpg" alt="" /> </a> </div>
                        <div class="utf_post_content">
                            <h2 class="utf_post_title"> <a href="#">Zhang social media pop also known when smart
                                    innocent...</a>
                            </h2>
                            <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a
                                        href="#">John
                                        Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25
                                    Jan, 2021</span>
                            </div>
                        </div>
                    </div>

                    <div class="utf_list_post_block">
                        <ul class="utf_list_post">
                            <li class="clearfix">
                                <div class="utf_post_block_style post-float clearfix">
                                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                src="images/news/tech/gadget2.jpg" alt="" /> </a> </div>
                                    <div class="utf_post_content">
                                        <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also
                                                known when smart
                                                innocent...</a> </h2>
                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                    class="fa fa-user"></i> <a href="#">John Wick</a></span> <span
                                                class="utf_post_date"><i class="fa fa-clock-o"></i> 25
                                                Jan, 2021</span> </div>
                                    </div>
                                </div>
                            </li>

                            <li class="clearfix">
                                <div class="utf_post_block_style post-float clearfix">
                                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                src="images/news/tech/gadget3.jpg" alt="" /> </a> </div>
                                    <div class="utf_post_content">
                                        <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also
                                                known when smart
                                                innocent...</a> </h2>
                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                    class="fa fa-user"></i> <a href="#">John Wick</a></span> <span
                                                class="utf_post_date"><i class="fa fa-clock-o"></i> 25
                                                Jan, 2021</span> </div>
                                    </div>
                                </div>
                            </li>

                            <li class="clearfix">
                                <div class="utf_post_block_style post-float clearfix">
                                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                src="images/news/tech/gadget4.jpg" alt="" /> </a> </div>
                                    <div class="utf_post_content">
                                        <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also
                                                known when smart
                                                innocent...</a> </h2>
                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                    class="fa fa-user"></i> <a href="#">John Wick</a></span> <span
                                                class="utf_post_date"><i class="fa fa-clock-o"></i> 25
                                                Jan, 2021</span> </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="block color-violet">
                    <h3 class="utf_block_title"><span>Health News</span></h3>
                    <div class="utf_post_overaly_style clearfix">
                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                    src="images/news/lifestyle/health1.jpg" alt="" /> </a> </div>
                        <div class="utf_post_content">
                            <h2 class="utf_post_title"> <a href="#">That wearable on your wrist could soon track your
                                    health as
                                    …</a> </h2>
                            <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a
                                        href="#">John
                                        Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25
                                    Jan, 2021</span>
                            </div>
                        </div>
                    </div>

                    <div class="utf_list_post_block">
                        <ul class="utf_list_post">
                            <li class="clearfix">
                                <div class="utf_post_block_style post-float clearfix">
                                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                src="images/news/lifestyle/health2.jpg" alt="" /> </a> </div>
                                    <div class="utf_post_content">
                                        <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also
                                                known when smart
                                                innocent...</a> </h2>
                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                    class="fa fa-user"></i> <a href="#">John Wick</a></span> <span
                                                class="utf_post_date"><i class="fa fa-clock-o"></i> 25
                                                Jan, 2021</span> </div>
                                    </div>
                                </div>
                            </li>

                            <li class="clearfix">
                                <div class="utf_post_block_style post-float clearfix">
                                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                src="images/news/lifestyle/health3.jpg" alt="" /> </a> </div>
                                    <div class="utf_post_content">
                                        <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also
                                                known when smart
                                                innocent...</a> </h2>
                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                    class="fa fa-user"></i> <a href="#">John Wick</a></span> <span
                                                class="utf_post_date"><i class="fa fa-clock-o"></i> 25
                                                Jan, 2021</span> </div>
                                    </div>
                                </div>
                            </li>

                            <li class="clearfix">
                                <div class="utf_post_block_style post-float clearfix">
                                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                src="images/news/lifestyle/health4.jpg" alt="" /> </a> </div>
                                    <div class="utf_post_content">
                                        <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also
                                                known when smart
                                                innocent...</a> </h2>
                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                    class="fa fa-user"></i> <a href="#">John Wick</a></span> <span
                                                class="utf_post_date"><i class="fa fa-clock-o"></i> 25
                                                Jan, 2021</span> </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
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
                                            <img class="img-fluid" src="{{ asset('uploads/blogs') }}/{{ $blog->image }}"
                                                alt="" /> </a> </div>
                                    <div class="utf_post_content">
                                        <h2 class="utf_post_title title-small"> <a
                                                href="{{ route('frontend.blog_read',$blog->id) }}">{{$blog->title}}</a>
                                        </h2>
                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                    class="fa fa-user"></i>
                                                <a href="#">{{ $blog->user->name }}</a></span> <span
                                                class="utf_post_date"><i class="fa fa-clock-o"></i>
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