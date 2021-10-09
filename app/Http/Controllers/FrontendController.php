<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\SubCategory;
use App\Models\ViewCount;
use Facade\FlareClient\View;
use Illuminate\Auth\Events\Validated;
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
        
        $viewCount  = ViewCount::where('blog_id',$id)->first();
        $populer    = ViewCount::orderBy('view_count','DESC')->take(5)->get();
        $comments   = Comment::where('blog_id',$id)->get();
     

        return view('frontend.blog_read',compact('blog','relateds','viewCount','populer','comments'));
        }


        public function blog_comment(Request $request, $id){


            $request->validate([
                'name'         => 'required',
                'email'        => 'required',
                'text'         => 'required',
             ]);
    
          $comment = new Comment();
          $comment->blog_id = $id;
          $comment->name = $request->name;
          $comment->email = $request->email;
          $comment->text= $request->text;

          $comment->save();


          return redirect()->back();
        }


        public function blogByCategory($id){

            $blogs       = Blog::where('category_id',$id)->latest()->paginate(3);
            $category    = Category::where('id',$id)->first();
            $subcategories = SubCategory::where('category_id',$id)->get();

            return view('frontend.news_by_category',compact('blogs','category','subcategories'));
        }

    
}