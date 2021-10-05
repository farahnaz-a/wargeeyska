<?php

namespace App\Http\Controllers;

use App\Models\Favicon;
use Illuminate\Http\Request;

class FaviconController extends Controller
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
        $favicon = Favicon::first();
        return view('admin.favicon.index',compact('favicon'));
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
     * @param  \App\Models\favicon  $favicon
     * @return \Illuminate\Http\Response
     */
    public function show(favicon $favicon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\favicon  $favicon
     * @return \Illuminate\Http\Response
     */
    public function edit(favicon $favicon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\favicon  $favicon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'image' => 'mimes:jpeg,jpg,png,gif',
        ],
        [
            'image.mimes'=> 'Only Jpeg,Jpg,gif and png'
        ]);
     
            $image    = $request->file('image');
    
            $filename = hexdec(uniqid()). '-favicon.' .$image->extension();
            $location = public_path('uploads/favicon/');
            $image->move($location, $filename); 

            Favicon::find($id)->update([
                'image'=>$filename, 
            ]);
         
        return redirect()->route('favicon.index')->with('update','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\favicon  $favicon
     * @return \Illuminate\Http\Response
     */
    public function destroy(favicon $favicon)
    {
        //
    }
}
