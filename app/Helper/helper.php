<?php

function categories(){

    return \App\Models\Category::latest()->get();
  }
function unread(){

    return \App\Models\Blog::where('read_status','unread')->get();
  }
function logo(){

    return \App\Models\Logo::first();
  }
function footerContact(){

    return \App\Models\FooterContact::first();
  }
function footerAbout(){

    return \App\Models\FooterAbout::first();
  }
function favicon(){

    return \App\Models\Favicon::first();
  }
function menueNews(){
    return \App\Models\Blog::where('access_status','published')->latest()->take(4)->get();
  }

  function frontPageTopAd(){

    return \App\Models\Ad::where('ad_position','f_top')->first();
  }
  function frontPageMiddleAd(){

    return \App\Models\Ad::where('ad_position','f_mid')->first();
  }
  function frontPageendAd(){

    return \App\Models\Ad::where('ad_position','f_end')->first();
  }


