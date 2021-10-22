<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Blog;
use App\Models\Category;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;

       

        $blogs = Blog::where('user_id',$user)->latest()->get();

        if (Auth::user()->role == 'admin') {
          
            return view('admin.admin_blog.index',compact('blogs'));

         } 
         
         else 
         {
            return view('reporters.blogs.index',compact('blogs'));

         }

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $categories = Category::get();
        $subcategories = [];

        if (Auth::user()->role == 'admin') {
            return view('admin.admin_blog.create',compact('categories','subcategories'));
        } 
        else {
            return view('reporters.blogs.create',compact('categories','subcategories'));
        }
        
       
    }



    public function subcategories(Request $request){

        $id = $request->id;

        $subcategories = SubCategory::where('category_id',$id)->get();
        $view = view('includes.option',compact('subcategories'));
        $status = $view->render();

        return response()->json(['status'=>$status]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'category_id'        => 'required',
           'title'              => 'required',
           'short_description'  => 'required',
           'description'        => 'required',
           'thumbnail'          => 'required|image',
           'image'              => 'image',
        ]);
        
        $blogs = Blog::create($request->except('_token') + [
            'created_at' => Carbon::now(),
            'user_id'    => Auth::user()->id,
        ]); 

        if (Auth::user()->role == 'admin') 
        {
            $blogs->payment_status = 'admin_post';
        }


        if (Auth::user()->role == 'admin') 
        {
            $blogs->access_status = 'published';
        }

        if (Auth::user()->role == 'reporter') 
        {
            $blogs->payment_status = 'paid';
        }
        
        $thumbnail    = $request->file('thumbnail');
        $filename = $blogs->id. '-thumbnail.' .$thumbnail->extension();
        $location = public_path('uploads/blogs/');
        $thumbnail->move($location, $filename); 

        // Save Thumbnail name in the database 
        $blogs->thumbnail = $filename; 


        if ($request->image) {
        //image Upload
        $image    = $request->file('image');
        $filename2 = $blogs->id. '-image.' .$image->extension();
        $location = public_path('uploads/blogs/');
        $image->move($location, $filename2); 

        // Save Image name in the database 
        $blogs->image = $filename2; 
        }

        // Save Everything In Database
        $blogs->save(); 

        if (Auth::user()->role == 'admin') {
            return redirect()->route('adminBlogs.index')->withSuccess('Added Successfully');
        }
        else{
          // Return Back to Index With Success Message
          return redirect()->route('blogs.index')->withSuccess('Added Successfully');
        }
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $details = Blog::where('id',$id)->first();
       

        if (Auth::user()->role == 'admin') {
            return view('admin.admin_blog.show',compact('details'));
        } 
        else {
            return view('reporters.blogs.show',compact('details'));
        }
    }
       

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::get();
        $subcategories = [];
        $details = Blog::where('id',$id)->first();

        if (Auth::user()->role == 'admin') {
            
            return view('admin.admin_blog.edit',compact('details','categories','subcategories'));
        } 

        else {
            return view('reporters.blogs.edit',compact('details','categories','subcategories'));
        }
    }
        
       

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id'        => 'required',
            'title'              => 'required',
            'short_description'  => 'required',
            'description'        => 'required',
            'quote'              => 'required'
            
         ]);

        
         $blogs = Blog::where('id',$id)->first();
         if ($request->has('thumbnail')) {
             //Thumbnail Upload

            $thumbnail    = $request->file('thumbnail');
            $filename = $blogs->id. '-thumbnail.' .$thumbnail->extension();
            $location = public_path('uploads/blogs/');
            $thumbnail->move($location, $filename); 
    
            // Save Thumbnail name in the database 
            $blogs->thumbnail = $filename; 
         }
         
      
 
 
         if ($request->has('image')) {
         
         //image Upload
         $image    = $request->file('image');
         $filename2 = $blogs->id. '-image.' .$image->extension();
         $location = public_path('uploads/blogs/');
         $image->move($location, $filename2); 
 
         // Save Image name in the database 
         $blogs->image = $filename2; 
         }

         $blogs->category_id       = $request->category_id; 

         if ($request->subcategory_id) 
         {
            $blogs->subcategory_id    = $request->subcategory_id; 
         }
         $blogs->title             = $request->title; 
         $blogs->short_description = $request->short_description; 
         $blogs->description       = $request->description; 
         $blogs->quote             = $request->quote; 
         
         if (Auth::user()->role == 'reporter') 
         {
            $blogs->access_status     = 'not_published'; 
         }
         
        
         
         $blogs->save(); 
 
    
         // Return Back to Index With Success Message
         if (Auth::user()->role == 'admin') {
            if ($blogs->user->role == 'reporter') 
            {
                $blogs = Blog::where('access_status','published')->latest()->get();
                return view('admin.reporter_blogs.index',compact('blogs'))->with('update','Update Successfully'); 
                // return redirect()->route('blogs.index')->with('update','Update Successfully');
            } 

            else {

                return redirect()->route('adminBlogs.index')->with('update','Update Successfully');
            }
           
         } 
         else {
            return redirect()->route('blogs.index')->with('update','Update Successfully');
         }
         
        // return redirect()->route('blogs.index')->with('update','Update Successfully');
        //  }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Blog::find($id)->delete();
        Blog::onlyTrashed()->find($id)->forceDelete();
        if (Auth::user()->role == 'admin') {
            return redirect()->back()->with('delete','Deleted successfully');
        }
         else {
            return redirect()->back()->with('delete','Deleted successfully');
        }
        
        
    }

    public function rejected()
    {
        $blogs = Blog::onlyTrashed()->get();
        return view('reporters.blogs.trash',compact('blogs'));
      
    }
    
    // permanent delete
    public function p_delete($id)
    {
        $blog = Blog::onlyTrashed()->find($id)->forceDelete();
        return redirect()->back()->withSuccess('p_delete','Deleted permanently');
    }


      // restore
      public function restore($id)
      {
          $reservations = Blog::withTrashed()->find($id)->restore();    
          return redirect()->back()->withSuccess('restore','Reservation restore successfully');
      }


     public function blog_comment($id){


     }

}
