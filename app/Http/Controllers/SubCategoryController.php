<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');;
        $this->middleware('checkAdmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::latest()->get();
        return view('admin.sub_category.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.sub_category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->category_id == null) {
            return redirect()->back()->with('deny', 'Please select a Category first');
        } 
        else 
        {
            $request->validate([
                'category_id' => 'required', 
                'name' => 'required|unique:sub_categories'  
            ]);
    
            // Pass the data into database
            $subCategory = SubCategory::create($request->except('_token')); 
            // Successful return
            return redirect()->route('subcategories.index')->withSuccess('Create Subcategory Successfully');
        }
    }
        
      

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategories = SubCategory::find($id);
        $categories = Category::get();
        return view('admin.sub_category.edit',compact('subcategories','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required', 
            'name' => 'required|unique:sub_categories'  
        ]);

        // Pass the data into database
        $subCategory = SubCategory::find($id)->update($request->except('_token')); 
   
        // Successful return
        return redirect()->route('subcategories.index')->withSuccess('Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs =Blog::where('subcategory_id',$id)->get();
        foreach ($blogs as $item) 
        {  
            $item->delete();
        }

       $subcategory = SubCategory::find($id)->delete();

        // Succesful Return
        return redirect()->back()->with('delete','Deleted Successfully');
    }
}
