<?php

function categories(){

    return \App\Models\Category::latest()->get();
  }
function unread(){

    return \App\Models\Blog::where('read_status','unread')->get();
  }
function logo(){

    return \App\Models\logo::first();
  }
function footerContact(){

    return \App\Models\FooterContact::first();
  }
function footerAbout(){

    return \App\Models\FooterAbout::first();
  }
function favicon(){

    return \App\Models\favicon::first();
  }
function menueNews(){
    return \App\Models\Blog::where('access_status','published')->latest()->take(4)->get();
  }


?>