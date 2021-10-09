<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Blog;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AdController extends Controller
{
    /**
     *  Construct 
     */
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
        if (Auth::user()->role == 'admin') {
           
            $ads = Ad::get();
           
            return view('admin.ad.ad_list',compact('ads'));
        }
        
        else if(Auth::user()->role == 'reporter'){

            $ads = Ad::where('user_id', Auth::user()->id)->get();
           
            return view('reporters.ad.ad_list',compact('ads'));
        }
      
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (Auth::user()->role == 'admin') {
            $ads    = Ad::whereNotNull('blog_id')->pluck('blog_id');
            $blogs = Blog::where('access_status','published')->whereNotin('id',$ads)->latest()->get();
            return view('admin.ad.ad_post',compact('blogs'));
        }
        
        else if(Auth::user()->role == 'reporter'){
            $ads    = Ad::whereNotNull('blog_id')->pluck('blog_id');
            $blogs = Blog::where('access_status','published')->whereNotin('id',$ads)->latest()->get();
            return view('reporters.ad.ad_post',compact('blogs'));
        }
     
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
            'image'              => 'required|image',
            'position'          => 'required',
         ]);

    
         
         $ad = new Ad();
         $ad->user_id           = Auth::user()->id;
         if (Auth::user()->role == 'admin') {
            $ad->payment_status = 'admin_post';
         }
         $ad->ad_position      = $request->position;
         if ($request->blog) 
         {
            $ad->blog_id       = $request->blog;
         }

         $image                = $request->file('image');
         $filename            = hexdec(uniqid()) . '-image.' .$image->extension();
         $location             = public_path('uploads/ads/');
         $image->move($location, $filename); 
 
         // Save Image name in the database 
         $ad->image           = $filename; 
         $ad->save();
 
         if (Auth::user()->role == 'admin') {
            return redirect()->route('adAdmin.index')->with('create','Added Successfully');
         } 
         if (Auth::user()->role == 'reporter') {
            return redirect()->route('adReporter.index')->with('create','Added Successfully');
         } 
        
    }



    public function aprove($id)
    {
      $aprove = Ad::where('id',$id)->first();

      $aprove->aprove_status = 'aproved';
      $aprove->update();
   
      return redirect()->route('adAdmin.index')->with('aprove','Aproved Successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function show(Ad $ad,$id)
    {
        $image = Ad::where('id',$id)->first();

        return view('admin.ad.ad_image',compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ad $ad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad = Ad::find($id);
        $ad->delete();
        if (Auth::user()->role == 'admin') {
            return redirect()->route('adAdmin.index')->with('create','Added Successfully');
        } 
        if (Auth::user()->role == 'reporter') {
            return redirect()->route('adReporter.index')->with('create','Added Successfully');
        } 
        
    }
}
