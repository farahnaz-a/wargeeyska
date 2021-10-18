<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Ad;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }


    public function index(){
      
            return view('user.dashboard', [
                'ads' => Ad::where('user_id', Auth::id())->get(),
            ]);
    }

    public function create()
    {
        return view('user.ad_create', ['blogs' => Blog::where('access_status','published')->latest()->get()]);
    }

    public function reporter()
    {
        $data = User::find(Auth::id());
        $data->role = 'reporter'; 
        $data->save(); 
        return redirect()->route('reporter.dashboard');
    }
}
