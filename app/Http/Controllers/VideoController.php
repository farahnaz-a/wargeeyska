<?php

namespace App\Http\Controllers;


use App\Models\Video;
use Illuminate\Http\Request;
use Auth;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;

      
        if (Auth::user()->role == 'admin')
         {
            $videos = Video::where('access_status','published')->latest()->get();

            return view('admin.videos.index',compact('videos'));

        }
        elseif (Auth::user()->role == 'reporter') {
            $videos = Video::where('user_id',$user)->where('access_status','published')->latest()->get();
            return view('reporters.video.index',compact('videos'));
        } 
    }

    //pending video Request
    public function videoRequest()
    {
        $videos = Video::where('access_status','not_published')->get();
        if (Auth::user()->role == 'admin')
        {
            return view('admin.videos.video_pending_list',compact('videos'));

       }
       elseif (Auth::user()->role == 'reporter') {
        return view('reporters.videos.video_pending_list',compact('videos'));
       } 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->role == 'admin'){
            return view('admin.videos.post_video');
        } 
        else {
            return view('reporters.video.create');
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
            'video'             => 'required|mimes:mp4,mov,ogg,3gp',
            'title'             => 'required',
         ]);

    
         
         $video = new Video();
         $video->user_id           = Auth::user()->id;

         if (Auth::user()->role == 'admin') {
         $video->payment_status = 'admin_post';
         $video->access_status  = 'published';
         }

         $video->title = $request->title;
         $image                = $request->file('video');
         $filename             = hexdec(uniqid()) . '-video.' .$image->extension();
         $location             = public_path('uploads/video/');
         $image->move($location, $filename); 
 
         // Save video name in the database 
         $video->video           = $filename; 
         $video->save();
 
         if (Auth::user()->role == 'admin') {
          
            $videos = Video::where('access_status','published')->latest()->get();

            return view('admin.videos.index',compact('videos'))->with('create','Added Successfully');;
         } 

         if (Auth::user()->role == 'reporter') {
            return redirect()->route('videos.index')->with('create','Added Successfully');
         } 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
       

    }



    public function published($id){
      

        
        $status = Video::where('id',$id)->first();

        $status->access_status = 'published';

        $status->update();
       
        return redirect()->back()->with('success','Approved Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        Video::find($id)->delete();
        return redirect()->back()->with('delete','Deleted successfully');
    }
}
