<?php

namespace App\Http\Controllers;

// use App\Models\admin;
use App\Models\Blog;
use App\Models\User;
use App\Models\ViewCount;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Str;

class AdminController extends Controller
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
        $count = [];
        $day = [];
        $view =ViewCount::orderBy('view_count','DESC')->take(7)->get();
        // $blog =ViewCount::orderBy('view_count','DESC')->take(7);

        $view_count = [];
        $blog_name  = [];
        foreach ($view as  $item) {
            $blog_name[] = Str::limit($item->blog->title, 10);
            $view_count[] = $item->view_count;
        }

       $reporter_count = [];
    
        for ($i=6; $i >= 0; $i--) { 
          
          $count[] =  Blog::whereDate('created_at' ,   Carbon::now()->subDays($i))->get()->count(); 
          $day[]   =  Carbon::today()->subdays($i)->format('d-M');
          $reporter_count[] =  User::where('role', 'reporter')->whereDate('created_at' ,   Carbon::now()->subDays($i))->get()->count();
          
        }

       
        return view('admin.index', compact('count', 'day','view','view_count','blog_name','reporter_count'));
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
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
}
