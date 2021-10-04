<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');;
        $this->middleware('checkAdmin');
    }
    public function index(){
      
        $blogs = Blog::get();
        return view('admin.reporter_blogs.index',compact('blogs'));

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
}