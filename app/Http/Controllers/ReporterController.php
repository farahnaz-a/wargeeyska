<?php

namespace App\Http\Controllers;

use App\Models\reporter;
use Illuminate\Http\Request;
use Auth;

class ReporterController extends Controller
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
        return view('reporters.dashboard'); 
        
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
     * @param  \App\Models\reporter  $reporter
     * @return \Illuminate\Http\Response
     */
    public function show(reporter $reporter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reporter  $reporter
     * @return \Illuminate\Http\Response
     */
    public function edit(reporter $reporter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reporter  $reporter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reporter $reporter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reporter  $reporter
     * @return \Illuminate\Http\Response
     */
    public function destroy(reporter $reporter)
    {
        //
    }
}
