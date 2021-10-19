<div class="utf_ad_content_area text-center utf_banner_area no-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                @if (frontPageMiddleAd() != null)
                <a href="{{ frontPageMiddleAd()->link }}" target="_blank">
                    <img src="{{ asset('uploads/ads')}}/{{ frontPageMiddleAd()->image }}" class="img-fluid"
                        alt="">
                </a>
                @else
                <a href="">
                    <img src="{{ asset('frontend_assets/images/banner-ads/ad-content-one.jpg')}}" class="img-fluid"
                        alt="">
                </a>
                @endif
              
            </div>
        </div>
    </div>
</div>