<?php

namespace App\Http\Controllers;

use App\Models\FooterAbout;
use Illuminate\Http\Request;

class FooterAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = FooterAbout::first();
        return view('admin.footer_about.index',compact('about'));
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
     * @param  \App\Models\FooterAbout  $footerAbout
     * @return \Illuminate\Http\Response
     */
    public function show(FooterAbout $footerAbout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FooterAbout  $footerAbout
     * @return \Illuminate\Http\Response
     */
    public function edit(FooterAbout $footerAbout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FooterAbout  $footerAbout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'description' => 'required',
            
        ]);
      

            FooterAbout::find($id)->update([
                'description' => $request->description,
               
            ]);
        return redirect()->route('footer_about.index')->with('update','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FooterAbout  $footerAbout
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterAbout $footerAbout)
    {
        //
    }
}
