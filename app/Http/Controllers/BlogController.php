<?php

namespace App\Http\Controllers;

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

        $blogs = Blog::latest()->where('user_id',$user)->get();

        return view('reporters.blogs.index',compact('blogs'));

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
        return view('reporters.blogs.create',compact('categories','subcategories'));
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
           'subcategory_id'     => 'required',
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

        //Thumbnail Upload
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

        // Return Back to Index With Success Message
        return redirect()->route('blogs.index')->withSuccess('Added Successfully');
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
        return view('reporters.blogs.show',compact('details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        
    }
}
