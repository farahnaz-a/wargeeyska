<?php

namespace App\Http\Controllers;

use App\Models\About;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::first();

        return view('admin.about.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $validated = $request->validate([
            'upper_section' => 'required',
            'lower_section' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif',
        ],
        [
            'image.mimes'=> 'Only Jpeg,Jpg,gif and png'
           

        ]);


      
        $image    = $request->file('image');
    

        if ($image) {

            $filename = hexdec(uniqid()). '-about.' .$image->extension();
            $location = public_path('uploads/about/');
            $image->move($location, $filename); 

            About::find($id)->update([
                'upper_section' => $request->upper_section,
                'lower_section' => $request->lower_section,
                'image'=>$filename, 
            ]);
        return redirect()->route('about.index')->with('update','Update Successfully');


        } 
        else {


          About::find($id)->update([
                'upper_section' => $request->upper_section,
                'lower_section' => $request->lower_section,
               
            ]);

        return redirect()->route('about.index')->with('update','Updated Successfully');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
