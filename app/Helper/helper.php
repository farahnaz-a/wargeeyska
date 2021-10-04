<?php

function categories(){

    return \App\Models\Category::latest()->get();
  }
function unread(){

    return \App\Models\Blog::where('read_status','unread')->get();
  }
?>