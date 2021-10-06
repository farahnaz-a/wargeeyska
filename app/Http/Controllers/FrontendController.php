<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\ViewCount;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $featuredNews1 = Blog::where('access_status','published')->latest()->take(3)->get();
        $featuredNews2 = Blog::where('access_status','published')->latest()->skip(3)->first();
        $featuredNews3= Blog::where('access_status','published')->latest()->skip(4)->first();
        $featuredNews4 = Blog::where('access_status','published')->latest()->skip(5)->first();
        $latests = Blog::where('access_status','published')->latest()->get();

        return view('frontend.index',
              compact('featuredNews1','featuredNews2','featuredNews3','featuredNews4','latests'));
    }


    public function about()
    {
        $about = About::first();
        return view('frontend.about',compact('about'));
    }


    public function blog_read($id)
    {
        $blog     = Blog::where('id',$id)->first();
        $relateds = Blog::where('subcategory_id',$blog->subcategory_id)->get();

        $viewCount = ViewCount::where('blog_id',$id)->first();
        if ($viewCount != null) {

            $count = $viewCount->view_count + 1;
            $viewCount->view_count = $count;
            $viewCount->update();  
        } 
        else {
            $viewCount = new ViewCount();
            $viewCount->blog_id = $id;
            $viewCount->save();
        }
        
        $viewCount = ViewCount::where('blog_id',$id)->first();
        $populer   =ViewCount::orderBy('view_count','DESC')->take(5)->get();
        return view('frontend.blog_read',compact('blog','relateds','viewCount','populer'));
        }
    
}