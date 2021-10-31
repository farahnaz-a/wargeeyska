<?php

namespace App\Http\Controllers;

use App\Models\CopyRight;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CopyRightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $copy_right = CopyRight::first();

        return view('admin.copy_right.index',compact('copy_right'));
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
     * @param  \App\Models\CopyRight  $copyRight
     * @return \Illuminate\Http\Response
     */
    public function show(CopyRight $copyRight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CopyRight  $copyRight
     * @return \Illuminate\Http\Response
     */
    public function edit(CopyRight $copyRight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CopyRight  $copyRight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'copy_right' => 'required'
        ]);

        $copy_right = CopyRight::find($id);

        $copy_right->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        return redirect()->route('copyRights.index')->with('update','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CopyRight  $copyRight
     * @return \Illuminate\Http\Response
     */
    public function destroy(CopyRight $copyRight)
    {
        //
    }
}
