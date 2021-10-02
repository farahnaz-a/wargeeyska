@extends('layouts.frontend')

@section('title')
{{ config('app.name') }} | Home
@endsection

@section('content')
    
  
  <!-- Featured Post Area Start --> 
  <section class="utf_featured_post_area pt-4 no-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-12 pad-r">
          <div id="utf_featured_slider" class="owl-carousel owl-theme utf_featured_slider">
            <div class="item" style="background-image:url(images/news/lifestyle/health5.jpg)">
              <div class="utf_featured_post">
                <div class="utf_post_content"> <a class="utf_post_cat" href="#">Health</a>
                  <h2 class="utf_post_title title-extra-large"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                  <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span>	
				  <span class="utf_post_date"><i class="fa fa-clock-o"></i> 20 Jan, 2021</span> 
				</div>
              </div>              
            </div>
            
            <div class="item" style="background-image:url(images/news/tech/gadget2.jpg)">
              <div class="utf_featured_post">
                <div class="utf_post_content"> <a class="utf_post_cat" href="#">Gadget</a>
                  <h2 class="utf_post_title title-extra-large"> <a href="#">Samsung Gear S3 review: A whimper, when smartwatches need a bang</a> </h2>
				  <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span>	
				  <span class="utf_post_date"><i class="fa fa-clock-o"></i> 20 Jan, 2021</span> 
				</div>
              </div>
            </div>
            
            <div class="item" style="background-image:url(images/news/lifestyle/travel5.jpg)">
              <div class="utf_featured_post">
                <div class="utf_post_content"> <a class="utf_post_cat" href="#">Travel</a>
                  <h2 class="utf_post_title title-extra-large"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                  <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span>	
				  <span class="utf_post_date"><i class="fa fa-clock-o"></i> 20 Jan, 2021</span> 
				</div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-5 col-md-12 pad-l">
          <div class="row">
            <div class="col-md-12">
              <div class="utf_post_overaly_style contentTop hot-post-top clearfix">
                <div class="utf_post_thumb"> <a href="#"><img class="img-fluid" src="images/news/tech/gadget4.jpg" alt="" /></a> </div>
                <div class="utf_post_content"> <a class="utf_post_cat" href="#">Gadget</a>
                  <h2 class="utf_post_title title-large"> <a href="#">Why The iPhone X Will Force Apple To Choose Between Good Or Evil</a> </h2>
                  <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span>	
				  <span class="utf_post_date"><i class="fa fa-clock-o"></i> 20 Jan, 2021</span> 
				</div>
              </div>
            </div>
            
            <div class="col-md-6 pad-r-small">
              <div class="utf_post_overaly_style contentTop utf_hot_post_bottom clearfix">
                <div class="utf_post_thumb"> <a href="#"><img class="img-fluid" src="images/news/lifestyle/travel2.jpg" alt="" /></a> </div>
                <div class="utf_post_content"> <a class="utf_post_cat" href="#">Travel</a>
                  <h2 class="utf_post_title title-medium"> <a href="#">Early tourists choices to the sea of Maldiv…</a> </h2>
				  <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span></div>
                </div>
              </div>
            </div>
            
            <div class="col-md-6 pad-l-small">
              <div class="utf_post_overaly_style contentTop utf_hot_post_bottom clearfix">
                <div class="utf_post_thumb"> <a href="#"><img class="img-fluid" src="images/news/lifestyle/health1.jpg" alt="" /></a> </div>
                <div class="utf_post_content"> <a class="utf_post_cat" href="#">Health</a>
                  <h2 class="utf_post_title title-medium"> <a href="#">That wearable on your wrist could soon...</a> </h2>
				  <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </section>
  <!-- Featured Post Area End --> 
  
  <!-- Latest News Area Start --> 
  <section class="utf_latest_new_area pb-bottom-20">
   <div class="container">
	<div class="utf_latest_news block color-red">
	  <h3 class="utf_block_title"><span>Latest News</span></h3>
		<div id="utf_latest_news_slide" class="owl-carousel owl-theme utf_latest_news_slide">
		  <div class="item">
			<ul class="utf_list_post">
			  <li class="clearfix">
				<div class="utf_post_block_style clearfix">
				  <div class="utf_post_thumb"> <a href="#"><img class="img-fluid" src="images/news/lifestyle/health5.jpg" alt="" /></a> </div>
				  <a class="utf_post_cat" href="#">Health</a>
				  <div class="utf_post_content">
					<h2 class="utf_post_title title-medium"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
					<div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
				  </div>
				</div>
			  </li>
			  
			  <li class="clearfix">
				<div class="utf_post_block_style clearfix">
				  <div class="utf_post_thumb"> <a href="#"><img class="img-fluid" src="images/news/lifestyle/travel4.jpg" alt="" /></a> </div>
				  <a class="utf_post_cat" href="#">Travel</a>
				  <div class="utf_post_content">
					<h2 class="utf_post_title title-medium"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
					<div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
				  </div>
				</div>
			  </li>
			</ul>			
		  </div>
		  
		  <div class="item">
			<ul class="utf_list_post">
			  <li class="clearfix">
				<div class="utf_post_block_style clearfix">
				  <div class="utf_post_thumb"> <a href="#"><img class="img-fluid" src="images/news/lifestyle/travel5.jpg" alt="" /></a> </div>
				  <a class="utf_post_cat" href="#">Travel</a>
				  <div class="utf_post_content">
					<h2 class="utf_post_title title-medium"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
					<div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
				  </div>
				</div>
			  </li>
			  
			  <li class="clearfix">
				<div class="utf_post_block_style clearfix">
				  <div class="utf_post_thumb"> <a href="#"><img class="img-fluid" src="images/news/lifestyle/health4.jpg" alt="" /></a> </div>
				  <a class="utf_post_cat" href="#">Health</a>
				  <div class="utf_post_content">
					<h2 class="utf_post_title title-medium"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
					<div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
				  </div>
				</div>
			  </li>
			</ul>			
		  </div>
		  
		  <div class="item">
			<ul class="utf_list_post">
			  <li class="clearfix">
				<div class="utf_post_block_style clearfix">
				  <div class="utf_post_thumb"> <a href="#"><img class="img-fluid" src="images/news/tech/gadget2.jpg" alt="" /></a> </div>
				  <a class="utf_post_cat" href="#">Gadget</a>
				  <div class="utf_post_content">
					<h2 class="utf_post_title title-medium"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
					<div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
				  </div>
				</div>
			  </li>
			  
			  <li class="clearfix">
				<div class="utf_post_block_style clearfix">
				  <div class="utf_post_thumb"> <a href="#"><img class="img-fluid" src="images/news/lifestyle/architecture3.jpg" alt="" /></a> </div>
				  <a class="utf_post_cat" href="#">Architecture</a>
				  <div class="utf_post_content">
					<h2 class="utf_post_title title-medium"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
					<div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
				  </div>
				</div>
			  </li>
			</ul>			
		  </div>
		  
		  <div class="item">
			<ul class="utf_list_post">
			  <li class="clearfix">
				<div class="utf_post_block_style clearfix">
				  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/food3.jpg" alt="" /> </a> </div>
				  <a class="utf_post_cat" href="#">Food</a>
				  <div class="utf_post_content">
					<h2 class="utf_post_title title-medium"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
					<div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
				  </div>
				</div>
			  </li>
			  
			  <li class="clearfix">
				<div class="utf_post_block_style clearfix">
				  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/game1.jpg" alt="" /> </a> </div>
				  <a class="utf_post_cat" href="#">Health</a>
				  <div class="utf_post_content">
					<h2 class="utf_post_title title-medium"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
					<div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
				  </div>
				</div>
			  </li>
			</ul>			
		  </div>
		  
		  <div class="item">
			<ul class="utf_list_post">
			  <li class="clearfix">
				<div class="utf_post_block_style clearfix">
				  <div class="utf_post_thumb"> <a href="#"><img class="img-fluid" src="images/news/lifestyle/travel5.jpg" alt="" /></a> </div>
				  <a class="utf_post_cat" href="#">Travel</a>
				  <div class="utf_post_content">
					<h2 class="utf_post_title title-medium"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
					<div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
				  </div>
				</div>
			  </li>
			  
			  <li class="clearfix">
				<div class="utf_post_block_style clearfix">
				  <div class="utf_post_thumb"> <a href="#"><img class="img-fluid" src="images/news/lifestyle/health4.jpg" alt="" /></a> </div>
				  <a class="utf_post_cat" href="#">Health</a>
				  <div class="utf_post_content">
					<h2 class="utf_post_title title-medium"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
					<div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
				  </div>
				</div>
			  </li>
			</ul>			
		  </div>
		</div>
	  </div>
	</div>		
  </section>
  <!-- Latest News Area End -->
  
  <!-- Ad Content Area Start -->
  <div class="utf_ad_content_area text-center utf_banner_area no-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> <img class="img-fluid" src="images/banner-ads/ad-content-one.jpg" alt="" /> </div>
      </div>
    </div>
  </div>
  <!-- Ad Content Area End -->
  
  <!-- 1rd Block Wrapper Start -->
  <section class="utf_block_wrapper p-bottom-0">
    <div class="container">
      <div class="row">		
        <div class="col-lg-8 col-md-12">
          <div class="utf_featured_tab color-blue">
            <h3 class="utf_block_title"><span>Technology News</span></h3>
            <ul class="nav nav-tabs">
              <li class="nav-item"> <a class="nav-link animated fadeIn active" href="#tab_a" data-toggle="tab"> <span class="tab-head"> <span class="tab-text-title">Lifestyle</span> </span> </a> </li>
              <li class="nav-item"> <a class="nav-link animated fadeIn" href="#tab_b" data-toggle="tab"> <span class="tab-head"> <span class="tab-text-title">Traveling</span> </span> </a> </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active animated fadeInRight" id="tab_a">
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="utf_post_block_style clearfix">
                      <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/gadget1.jpg" alt="" /> </a> </div>
                      <a class="utf_post_cat" href="#">Lifestyle</a>
                      <div class="utf_post_content">
                        <h2 class="utf_post_title"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                        <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</p>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-lg-6 col-md-6">
                    <div class="utf_list_post_block">
                      <ul class="utf_list_post">
                        <li class="clearfix">
                          <div class="utf_post_block_style post-float clearfix">
                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/gadget2.jpg" alt="" /> </a> </div>                            
                            <div class="utf_post_content">
                              <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                              <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                            </div>
                          </div>
                        </li>
                        
                        <li class="clearfix">
                          <div class="utf_post_block_style post-float clearfix">
                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/gadget3.jpg" alt="" /> </a> </div>                            
                            <div class="utf_post_content">
                              <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                              <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                            </div>
                          </div>
                        </li>   
						
                        <li class="clearfix">
                          <div class="utf_post_block_style post-float clearfix">
                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/gadget4.jpg" alt="" /> </a> </div>                           
                            <div class="utf_post_content">
                              <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                              <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                            </div>
                          </div>
                        </li>
                        
                        <li class="clearfix">
                          <div class="utf_post_block_style post-float clearfix">
                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/gadget5.jpg" alt="" /> </a> </div>                            
                            <div class="utf_post_content">
                              <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                              <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="tab-pane animated fadeInLeft" id="tab_b">
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="utf_post_block_style clearfix">
                      <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/robot1.jpg" alt="" /> </a> </div>
                      <a class="utf_post_cat" href="#">Traveling</a>
                      <div class="utf_post_content">
                        <h2 class="utf_post_title"> <a href="#">Ratcliffe to be Director nation intelligence Trump ignored...</a> </h2>
                        <div class="utf_post_meta"> <span class="utf_post_author"><a href="#">John Wick</a></span> <span class="utf_post_date">25 Jan, 2021</span> </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</p>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-lg-6 col-md-6">
                    <div class="utf_list_post_block">
                      <ul class="utf_list_post">
                        <li class="clearfix">
                          <div class="utf_post_block_style post-float clearfix">
                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/robot2.jpg" alt="" /> </a> </div>                            
                            <div class="utf_post_content">
                              <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                              <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                            </div>
                          </div>
                        </li>
                        
                        <li class="clearfix">
                          <div class="utf_post_block_style post-float clearfix">
                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/robot3.jpg" alt="" /> </a> </div>                            
                            <div class="utf_post_content">
                              <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                              <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                            </div>
                          </div>
                        </li>
                        
                        <li class="clearfix">
                          <div class="utf_post_block_style post-float clearfix">
                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/robot4.jpg" alt="" /> </a> </div>                            
                            <div class="utf_post_content">
                              <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                              <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                            </div>
                          </div>
                        </li>
                        
                        <li class="clearfix">
                          <div class="utf_post_block_style post-float clearfix">
                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/robot5.jpg" alt="" /> </a> </div>                            
                            <div class="utf_post_content">
                              <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                              <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
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
          
          <div class="gap-30"></div>
          <div class="block color-orange">
            <h3 class="utf_block_title"><span>Lifestyle News</span></h3>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="utf_post_overaly_style clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/travel1.jpg" alt="" /> </a> </div>
                  <div class="utf_post_content"> <a class="utf_post_cat" href="#">Travel</a>
                    <h2 class="utf_post_title"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                  </div>
                </div>
                
                <div class="utf_list_post_block">
                  <ul class="utf_list_post">
                    <li class="clearfix">
                      <div class="utf_post_block_style post-float clearfix">
                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/food1.jpg" alt="" /> </a> <a class="utf_post_cat" href="#">Food</a> </div>                        
                        <div class="utf_post_content">
                          <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent... </a> </h2>
                          <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                        </div>
                      </div>
                    </li>
                    
                    <li class="clearfix">
                      <div class="utf_post_block_style post-float clearfix">
                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/health1.jpg" alt="" /> </a> <a class="utf_post_cat" href="#">Health</a> </div>                        
                        <div class="utf_post_content">
                          <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                          <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                        </div>
                      </div>
                    </li>
                    
                    <li class="clearfix">
                      <div class="utf_post_block_style post-float clearfix">
                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/travel2.jpg" alt="" /> </a> <a class="utf_post_cat" href="#">Travel</a> </div>
                        <div class="utf_post_content">
                          <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                          <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                        </div>                        
                      </div>                      
                    </li>
                    
                    <li class="clearfix">
                      <div class="utf_post_block_style post-float clearfix">
                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/architecture2.jpg" alt="" /> </a> <a class="utf_post_cat" href="#">Architecture</a> </div>
                        <div class="utf_post_content">
                          <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                          <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                        </div>
                      </div>
                    </li>                    
                  </ul>
                </div>
              </div>
              
              <div class="col-lg-6 col-md-6">
                <div class="utf_post_overaly_style last clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/architecture3.jpg" alt="" /> </a> </div>
                  <div class="utf_post_content"> <a class="utf_post_cat" href="#">Architecture</a>
                    <h2 class="utf_post_title"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                  </div>
                </div>
                
                <div class="utf_list_post_block">
                  <ul class="utf_list_post">
                    <li class="clearfix">
                      <div class="utf_post_block_style post-float clearfix">
                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/health2.jpg" alt="" /> </a> <a class="utf_post_cat" href="#">Health</a> </div>
                        <div class="utf_post_content">
                          <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                          <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                        </div>
                      </div>
                    </li>
                    
                    <li class="clearfix">
                      <div class="utf_post_block_style post-float clearfix">
                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/food2.jpg" alt="" /> </a> <a class="utf_post_cat" href="#">Food</a> </div>
                        <div class="utf_post_content">
                          <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                          <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                        </div>
                      </div>
                    </li>
                    
                    <li class="clearfix">
                      <div class="utf_post_block_style post-float clearfix">
                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/architecture1.jpg" alt="" /> </a> <a class="utf_post_cat" href="#">Architecture</a> </div>
                        <div class="utf_post_content">
                          <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                          <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                        </div>
                      </div>
                    </li>
                    
                    <li class="clearfix">
                      <div class="utf_post_block_style post-float clearfix">
                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/travel5.jpg" alt="" /> </a> <a class="utf_post_cat" href="#">Travel</a> </div>
                        <div class="utf_post_content">
                          <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                          <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-12">
          <div class="sidebar utf_sidebar_right">
            <div class="widget">
              <h3 class="utf_block_title"><span>Follow Us</span></h3>
              <ul class="social-icon">
                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
              </ul>
            </div>
            
            <div class="widget color-default">
              <h3 class="utf_block_title"><span>Popular News</span></h3>
              <div class="utf_post_overaly_style clearfix">
                <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/health4.jpg" alt="" /> </a> </div>
                <div class="utf_post_content"> <a class="utf_post_cat" href="#">Health</a>
                  <h2 class="utf_post_title"> <a href="#">Smart packs parking sensor tech and beeps when col…</a> </h2>
                  <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                </div>
              </div>
              
              <div class="utf_list_post_block">
                <ul class="utf_list_post">
                  <li class="clearfix">
                    <div class="utf_post_block_style post-float clearfix">
                      <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/gadget3.jpg" alt="" /> </a> <a class="utf_post_cat" href="#">Lifestyle</a> </div>                      
                      <div class="utf_post_content">
                        <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                        <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                      </div>
                    </div>
                  </li>
                  
                  <li class="clearfix">
                    <div class="utf_post_block_style post-float clearfix">
                      <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/travel5.jpg" alt="" /> </a> <a class="utf_post_cat" href="#">Travel</a> </div>
                      <div class="utf_post_content">
                        <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                        <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                      </div>
                    </div>
                  </li>
                  
                  <li class="clearfix">
                    <div class="utf_post_block_style post-float clearfix">
                      <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/robot5.jpg" alt="" /> </a> <a class="utf_post_cat" href="#">Traveling</a> </div>
                      <div class="utf_post_content">
                        <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                        <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                      </div>
                    </div>
                  </li>
                  
                  <li class="clearfix">
                    <div class="utf_post_block_style post-float clearfix">
                      <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/food1.jpg" alt="" /> </a> <a class="utf_post_cat" href="#">Food</a> </div>
                      <div class="utf_post_content">
                        <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                        <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            
            <div class="widget color-default m-bottom-0">
              <h3 class="utf_block_title"><span>Trending News</span></h3>
              <div id="utf_post_slide" class="owl-carousel owl-theme utf_post_slide">
                <div class="item">
                  <div class="utf_post_overaly_style text-center clearfix">
                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/gadget1.jpg" alt="" /> </a> </div>
                    <div class="utf_post_content"> <a class="utf_post_cat" href="#">Lifestyle</a>
                      <h2 class="utf_post_title"> <a href="#">The best MacBook Pro alternatives in 2021 for Appl…</a> </h2>
                      <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    </div>
                  </div>
                </div>
                
                <div class="item">
                  <div class="utf_post_overaly_style text-center clearfix">
                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/health5.jpg" alt="" /> </a> </div>
                    <div class="utf_post_content"> <a class="utf_post_cat" href="#">Health</a>
                      <h2 class="utf_post_title"> <a href="#">Netcix cuts out the chill with an integrated perso…</a> </h2>
                      <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 1rd Block Wrapper End -->
  
  <!-- 2rd Block Wrapper Start -->
  <section class="utf_block_wrapper p-bottom-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="block color-dark-blue">
            <h3 class="utf_block_title"><span>Travel News</span></h3>
            <div class="utf_post_overaly_style clearfix">
              <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/travel1.jpg" alt="" /> </a> </div>
              <div class="utf_post_content">
                <h2 class="utf_post_title"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
              </div>
            </div>
            
            <div class="utf_list_post_block">
              <ul class="utf_list_post">
                <li class="clearfix">
                  <div class="utf_post_block_style post-float clearfix">
                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/travel2.jpg" alt="" /> </a> </div>                    
                    <div class="utf_post_content">
                      <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                      <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    </div>
                  </div>
                </li>
                
                <li class="clearfix">
                  <div class="utf_post_block_style post-float clearfix">
                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/travel3.jpg" alt="" /> </a> </div>                    
                    <div class="utf_post_content">
                      <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                      <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    </div>
                  </div>
                </li>
                
                <li class="clearfix">
                  <div class="utf_post_block_style post-float clearfix">
                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/travel4.jpg" alt="" /> </a> </div>                    
                    <div class="utf_post_content">
                      <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                      <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4">
          <div class="block color-aqua">
            <h3 class="utf_block_title"><span>Lifestyle News</span></h3>
            <div class="utf_post_overaly_style clearfix">
              <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/gadget1.jpg" alt="" /> </a> </div>
              <div class="utf_post_content">
                <h2 class="utf_post_title"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
              </div>
            </div>
            
            <div class="utf_list_post_block">
              <ul class="utf_list_post">
                <li class="clearfix">
                  <div class="utf_post_block_style post-float clearfix">
                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/gadget2.jpg" alt="" /> </a> </div>                    
                    <div class="utf_post_content">
                      <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                      <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    </div>
                  </div>
                </li>
                
                <li class="clearfix">
                  <div class="utf_post_block_style post-float clearfix">
                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/gadget3.jpg" alt="" /> </a> </div>                    
                    <div class="utf_post_content">
                      <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                      <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    </div>
                  </div>
                </li>
                
                <li class="clearfix">
                  <div class="utf_post_block_style post-float clearfix">
                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/gadget4.jpg" alt="" /> </a> </div>                    
                    <div class="utf_post_content">
                      <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                      <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
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
              <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/health1.jpg" alt="" /> </a> </div>
              <div class="utf_post_content">
                <h2 class="utf_post_title"> <a href="#">That wearable on your wrist could soon track your health as …</a> </h2>
                <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
              </div>
            </div>
            
            <div class="utf_list_post_block">
              <ul class="utf_list_post">
                <li class="clearfix">
                  <div class="utf_post_block_style post-float clearfix">
                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/health2.jpg" alt="" /> </a> </div>                    
                    <div class="utf_post_content">
                      <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                      <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    </div>
                  </div>
                </li>
                
                <li class="clearfix">
                  <div class="utf_post_block_style post-float clearfix">
                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/health3.jpg" alt="" /> </a> </div>                    
                    <div class="utf_post_content">
                      <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                      <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    </div>
                  </div>
                </li>
                
                <li class="clearfix">
                  <div class="utf_post_block_style post-float clearfix">
                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/health4.jpg" alt="" /> </a> </div>                    
                    <div class="utf_post_content">
                      <h2 class="utf_post_title title-small"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                      <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </section>
  <!-- 2rd Block Wrapper End -->
  
  <!-- 3rd Block Wrapper Start -->
  <section class="utf_block_wrapper p-bottom-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <div class="utf_more_news block color-default">
            <h3 class="utf_block_title"><span>View More News</span></h3>
            <div id="utf_more_news_slide" class="owl-carousel owl-theme utf_more_news_slide">
              <div class="item">
                <div class="utf_post_block_style utf_post_float_half clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/video/video1.jpg" alt="" /> </a> </div>
                  <a class="utf_post_cat" href="#">Video</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title"> <a href="#">Ratcliffe to be Director of intelligence Trump ignored smart innocent...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</p>
                  </div>
                </div>
                
                <div class="utf_post_block_style utf_post_float_half clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/game5.jpg" alt="" /> </a> </div>
                  <a class="utf_post_cat" href="#">Health</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title"> <a href="#">Ratcliffe to be Director of intelligence Trump ignored smart innocent...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</p>
                  </div>
                </div>
                
                <div class="utf_post_block_style utf_post_float_half clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/game4.jpg" alt="" /> </a> </div>
                  <a class="utf_post_cat" href="#">Health</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</p>
                  </div>
                </div>
                
                <div class="utf_post_block_style utf_post_float_half clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/robot5.jpg" alt="" /> </a> </div>
                  <a class="utf_post_cat" href="#">Traveling</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</p>
                  </div>
                </div>
				
                <div class="utf_post_block_style utf_post_float_half clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/game5.jpg" alt="" /> </a> </div>
                  <a class="utf_post_cat" href="#">Health</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title"> <a href="#">Ratcliffe to be Director of intelligence Trump ignored smart innocent...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</p>
                  </div>
                </div>
              </div>
              
              <div class="item">
                <div class="utf_post_block_style utf_post_float_half clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/video/video2.jpg" alt="" /> </a> </div>
                  <a class="utf_post_cat" href="#">Video</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title"> <a href="#">Ratcliffe to be Director of intelligence Trump ignored smart innocent...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</p>
                  </div>
                </div>
                
                <div class="utf_post_block_style utf_post_float_half clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/video/video3.jpg" alt="" /> </a> </div>
                  <a class="utf_post_cat" href="#">Video</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title"> <a href="#">Breeze through 17 locations in Europe in this breathtaking v…</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</p>
                  </div>
                </div>
                
                <div class="utf_post_block_style utf_post_float_half clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/architecture1.jpg" alt="" /> </a> </div>
                  <a class="utf_post_cat" href="#">Architecture</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title"> <a href="#">Science meets architecture in robotically woven, solar...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</p>
                  </div>
                </div>
                
                <div class="utf_post_block_style utf_post_float_half clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/game1.jpg" alt="" /> </a> </div>
                  <a class="utf_post_cat" href="#">Traveling</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title"> <a href="#">Historical heroes and robot dinosaurs: New games on our…</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</p>
                  </div>
                </div>
              </div> 

			  <div class="item">
                <div class="utf_post_block_style utf_post_float_half clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/video/video1.jpg" alt="" /> </a> </div>
                  <a class="utf_post_cat" href="#">Video</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title"> <a href="#">Ratcliffe to be Director of intelligence Trump ignored smart innocent...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</p>
                  </div>
                </div>
                
                <div class="utf_post_block_style utf_post_float_half clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/game5.jpg" alt="" /> </a> </div>
                  <a class="utf_post_cat" href="#">Health</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title"> <a href="#">Ratcliffe to be Director of intelligence Trump ignored smart innocent...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</p>
                  </div>
                </div>
                
                <div class="utf_post_block_style utf_post_float_half clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/game4.jpg" alt="" /> </a> </div>
                  <a class="utf_post_cat" href="#">Health</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</p>
                  </div>
                </div>
                
                <div class="utf_post_block_style utf_post_float_half clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/robot5.jpg" alt="" /> </a> </div>
                  <a class="utf_post_cat" href="#">Traveling</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title"> <a href="#">Zhang social media pop also known when smart innocent...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</p>
                  </div>
                </div>
				
                <div class="utf_post_block_style utf_post_float_half clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/game5.jpg" alt="" /> </a> </div>
                  <a class="utf_post_cat" href="#">Health</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title"> <a href="#">Ratcliffe to be Director of intelligence Trump ignored smart innocent...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</p>
                  </div>
                </div>
              </div>
			  
			  <div class="item">
                <div class="utf_post_block_style utf_post_float_half clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/video/video2.jpg" alt="" /> </a> </div>
                  <a class="utf_post_cat" href="#">Video</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title"> <a href="#">Ratcliffe to be Director of intelligence Trump ignored smart innocent...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</p>
                  </div>
                </div>
                
                <div class="utf_post_block_style utf_post_float_half clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/video/video3.jpg" alt="" /> </a> </div>
                  <a class="utf_post_cat" href="#">Video</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title"> <a href="#">Breeze through 17 locations in Europe in this breathtaking v…</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</p>
                  </div>
                </div>
                
                <div class="utf_post_block_style utf_post_float_half clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/lifestyle/architecture1.jpg" alt="" /> </a> </div>
                  <a class="utf_post_cat" href="#">Architecture</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title"> <a href="#">Science meets architecture in robotically woven, solar...</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</p>
                  </div>
                </div>
                
                <div class="utf_post_block_style utf_post_float_half clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/tech/game1.jpg" alt="" /> </a> </div>
                  <a class="utf_post_cat" href="#">Traveling</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title"> <a href="#">Historical heroes and robot dinosaurs: New games on our…</a> </h2>
                    <div class="utf_post_meta"> <span class="utf_post_author"><i class="fa fa-user"></i> <a href="#">John Wick</a></span> <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2021</span> </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since has five...</p>
                  </div>
                </div>
              </div>	
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-sm-12">
          <div class="sidebar utf_sidebar_right">
            <div class="widget color-default">
              <h3 class="utf_block_title"><span>Latest Reviews</span></h3>
              <div class="utf_list_post_block">
                <ul class="utf_list_post review-post-list">
                  <li class="clearfix">
                    <div class="utf_post_block_style post-float clearfix">
                      <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/review/review1.jpg" alt="" /> </a> </div>                      
                      <div class="utf_post_content">
                        <h2 class="utf_post_title"> <a href="#">Zhang social media pop known innocent...</a> </h2>
                        <div class="utf_post_meta">
                          <div class="review-stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  
                  <li class="clearfix">
                    <div class="utf_post_block_style post-float clearfix">
                      <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/review/review2.jpg" alt="" /> </a> </div>
                      <div class="utf_post_content">
                        <h2 class="utf_post_title"> <a href="#">Zhang social media pop known innocent...</a> </h2>
                        <div class="utf_post_meta">
                          <div class="review-stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  
                  <li class="clearfix">
                    <div class="utf_post_block_style post-float clearfix">
                      <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/review/review3.jpg" alt="" /> </a> </div>
                      <div class="utf_post_content">
                        <h2 class="utf_post_title"> <a href="#">Zhang social media pop known innocent...</a> </h2>
                        <div class="utf_post_meta">
                          <div class="review-stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  
                  <li class="clearfix">
                    <div class="utf_post_block_style post-float clearfix">
                      <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/review/review4.jpg" alt="" /> </a> </div>
                      <div class="utf_post_content">
                        <h2 class="utf_post_title"> <a href="#">Zhang social media pop known innocent...</a> </h2>
                        <div class="utf_post_meta">
                          <div class="review-stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        </div>
                      </div>
                    </div>
                  </li>
				  
				  <li class="clearfix">
                    <div class="utf_post_block_style post-float clearfix">
                      <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/review/review2.jpg" alt="" /> </a> </div>                      
                      <div class="utf_post_content">
                        <h2 class="utf_post_title"> <a href="#">Zhang social media pop known innocent...</a> </h2>
                        <div class="utf_post_meta">
                          <div class="review-stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div>
                        </div>
                      </div>
                    </div>
                  </li>
				  
				  <li class="clearfix">
                    <div class="utf_post_block_style post-float clearfix">
                      <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="images/news/review/review3.jpg" alt="" /> </a> </div>                      
                      <div class="utf_post_content">
                        <h2 class="utf_post_title"> <a href="#">Zhang social media pop known innocent...</a> </h2>
                        <div class="utf_post_meta">
                          <div class="review-stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            
            <div class="widget m-bottom-0">
              <h3 class="utf_block_title"><span>Newsletter</span></h3>
              <div class="utf_newsletter_block">
                <div class="utf_newsletter_introtext">
				  <h4>Subscribe Newsletter!</h4>
                  <p>Lorem ipsum dolor sit consectetur adipiscing elit Maecenas in pulvinar neque Nulla finibus lobortis pulvinar.</p>
                </div>
                <div class="utf_newsletter_form">
                  <form action="#" method="post">
                    <div class="form-group">
                      <input type="email" name="email" id="utf_newsletter_form-email" class="form-control form-control-lg" placeholder="E-Mail Address" autocomplete="off">
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
  <!-- 3rd Block Wrapper End -->
  
  <!-- Ad Content Area Start -->
  <div class="utf_ad_content_area text-center utf_banner_area">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> <img class="img-fluid" src="images/banner-ads/ad-content-two.png" alt="" /> </div>
      </div>
    </div>
  </div>
  <!-- Ad Content Area End -->
  

@endsection