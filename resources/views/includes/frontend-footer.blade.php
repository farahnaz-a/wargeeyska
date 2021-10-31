<!-- Footer Start -->
<footer id="footer" class="footer">
    <div class="utf_footer_main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-xs-12 footer-widget contact-widget">
                    <h3 class="widget-title">About Us</h3>
                    <ul>
                        <li>{{ footerAbout()->description }}</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-12 col-xs-12 footer-widget contact-widget">
                    <h3 class="widget-title">Contact Us</h3>
                    <ul>
                        
                        <li><i class="fa fa-home"></i> {{ footerContact()->address }}</li>
                        <li><i class="fa fa-phone"></i> <a href="#">{{ footerContact()->phone }}</a></li>
                        <li><i class="fa fa-envelope-o"></i> <a href="#">{{ footerContact()->email }}</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-12 col-xs-12 footer-widget contact-widget">
                    <h3 class="widget-title">Social Midia</h3>
                   
                    <ul class="unstyled utf_footer_social">
                        <li><a title="Facebook" href="{{ footerContact()->facebook_link }}"><i class="fa fa-facebook"></i></a></li>
                        <li><a title="Twitter" href="{{ footerContact()->twiter_link }}"><i class="fa fa-twitter"></i></a></li>
                        <li><a title="Google+" href="{{ footerContact()->goole_link }}"><i class="fa fa-google-plus"></i></a></li>
                        <li><a title="Linkdin" href="{{ footerContact()->linkdin_link }}"><i class="fa fa-linkedin"></i></a></li>
                        <li><a title="Skype" href="{{ footerContact()->skyp_link }}"><i class="fa fa-skype"></i></a></li>
                        <li><a title="Instagram" href="{{ footerContact()->instagram_link }}"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>

                {{-- <div class="col-lg-4 col-sm-12 col-xs-12 footer-widget widget-categories">
                    <h3 class="widget-title">Popular Categories</h3>
                    <ul>
                        <li><i class="fa fa-angle-double-right"></i><a href="#"><span
                                    class="catTitle">Make-Up</span><span class="catCounter"> (05)</span></a> </li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#"><span
                                    class="catTitle">Health</span><span class="catCounter"> (06)</span></a> </li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#"><span class="catTitle">Audio</span><span
                                    class="catCounter"> (15)</span></a> </li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#"><span
                                    class="catTitle">Travel</span><span class="catCounter"> (25)</span></a> </li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#"><span
                                    class="catTitle">Health</span><span class="catCounter"> (05)</span></a> </li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#"><span
                                    class="catTitle">Gadgets</span><span class="catCounter"> (12)</span></a> </li>
                        <li><i class="fa fa-angle-double-right"></i><a href="#"><span class="catTitle">Food</span><span
                                    class="catCounter"> (14)</span></a> </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-sm-12 col-xs-12 footer-widget">
                    <h3 class="widget-title">Popular Post</h3>
                    <div class="utf_list_post_block">
                        <ul class="utf_list_post">
                            <li class="clearfix">
                                <div class="utf_post_block_style post-float clearfix">
                                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                src="images/news/lifestyle/health2.jpg" alt="" /> </a> </div>
                                    <div class="utf_post_content">
                                        <h2 class="utf_post_title title-small"> <a href="#">Santino loganne legan an
                                                year old resident...</a> </h2>
                                        <div class="utf_post_meta"> <span class="utf_post_date"><i
                                                    class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                                    </div>
                                </div>
                            </li>

                            <li class="clearfix">
                                <div class="utf_post_block_style post-float clearfix">
                                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                src="images/news/lifestyle/health3.jpg" alt="" /> </a> </div>
                                    <div class="utf_post_content">
                                        <h2 class="utf_post_title title-small"> <a href="#">Santino loganne legan an
                                                year old resident...</a> </h2>
                                        <div class="utf_post_meta"> <span class="utf_post_date"><i
                                                    class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                                    </div>
                                </div>
                            </li>

                            <li class="clearfix">
                                <div class="utf_post_block_style post-float clearfix">
                                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                src="images/news/lifestyle/health4.jpg" alt="" /> </a> </div>
                                    <div class="utf_post_content">
                                        <h2 class="utf_post_title title-small"> <a href="#">Santino loganne legan an
                                                year old resident...</a> </h2>
                                        <div class="utf_post_meta"> <span class="utf_post_date"><i
                                                    class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 text-center">
                <div class="utf_copyright_info"> <span>{{ copyRight()->copy_right }}</span> </div>
            </div>
        </div>
        <div id="back-to-top" class="back-to-top">
            <button class="btn btn-primary" title="Back to Top"> <i class="fa fa-angle-up"></i> </button>
        </div>
    </div>
</div>
<!-- Copyright End -->
</div>


<!-- Javascript Files -->
<script src="{{ asset('frontend_assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/jquery.colorbox.js') }}"></script>
<script src="{{ asset('frontend_assets/js/smoothscroll.js') }}"></script>
@yield('js')
<script src="{{ asset('frontend_assets/js/custom_script.js') }}"></script>
<script>
    /* Loading Js*/
    $(window).on('load', function () {
        setTimeout(function () {
            $(".preloader").delay(700).fadeOut(700).addClass('loaded');
        }, 800);
    });

</script>
</body>

<!-- Mirrored from utouchdesign.com/themes/envato/altroz_news/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Sep 2021 20:18:00 GMT -->

</html>
