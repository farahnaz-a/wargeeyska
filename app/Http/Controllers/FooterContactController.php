<?php

namespace App\Http\Controllers;

use App\Models\FooterContact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FooterContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer_contact = FooterContact::first();
        return view('admin.footer_contact.index',compact('footer_contact'));
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
     * @param  \App\Models\FooterContact  $footerContact
     * @return \Illuminate\Http\Response
     */
    public function show(FooterContact $footerContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FooterContact  $footerContact
     * @return \Illuminate\Http\Response
     */
    public function edit(FooterContact $footerContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FooterContact  $footerContact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'address'        => 'required',
            'phone'          => 'required',
            'email'          => 'required',
            'facebook_link'  => 'required',
            'twitter_link'   => 'required',
            'google_link'    => 'required',
            'linkdin_link'   => 'required',
            'skyp_link'      => 'required',
            'instagram_link' => 'required',
            
        ]);

        $blogs = FooterContact::find($id)->update($request->except('_token') + [
                'updated_at' => Carbon::now(),
            
        ]); 
        return redirect()->route('footer_contact.index')->with('update','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FooterContact  $footerContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(FooterContact $footerContact)
    {
        //
    }
}
