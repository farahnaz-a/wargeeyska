<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Auth;

class AdminBlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');;
        $this->middleware('checkAdmin');
    }

    public function edit($id){

        $categories = Category::get();
        $subcategories = [];
        $details = Blog::where('id',$id)->first();

       
        return view('admin.admin_blog.edit',compact('details','categories','subcategories'));

    }

    public function index(){
      
        $blogs = Blog::where('access_status','published')->latest()->get();
        return view('admin.reporter_blogs.index',compact('blogs'));
    }

    

     public function pending()
    {
        $blogs = Blog::where('access_status','not_published')->where('payment_status','!=','pending')->get();
        return view('admin.reporter_blogs.pending_request',compact('blogs'));
    }

    public function published(Request $request){
      

        
        $status = Blog::where('id',$request->id)->first();

        $status->access_status = 'published';

        $status->update();
       
        return redirect()->route('reporter.blog');

    }

    public function details($id){
      
        $details = Blog::where('id',$id)->first();

        $details->read_status = 'read';
        $details->update();
        return view('admin.reporter_blogs.show',compact('details'));

    }
    public function delete($id){
      
        $details = Blog::find($id);
        $details->delete();

        if (Auth::user()->role == 'admin') {
            return redirect()->route('reporter.blog')->withSuccess('Added Successfully');
        }
        else{
          // Return Back to Index With Success Message
          return redirect()->route('blogs.index')->withSuccess('Added Successfully');
        }

    }
}
