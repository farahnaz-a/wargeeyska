@extends('admin.dashboard')

{{-- Title --}}
@section('title')
{{ config('app.name') }} | About
@endsection

{{-- Menu Active --}}
@section('aboutIndex')
active
@endsection



{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="content-header-left col-md-12 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">About</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Page Content --}}
@section('content')
<section id="basic-vertical-layouts">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update About Settings</small></h4>
                </div>
                <div class="card-body">
                    <form action="{{route('about.update',$about->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="text">Upper Description</label>
                            <textarea name="upper_section" class="form-control" id="text" >{{$about->upper_section}}</textarea>
                            @error('text')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
    
                        <div class="form-group">
                            <label for="text">Lower Description</label>
                            <textarea name="lower_section" class="form-control" id="text" >{{$about->lower_section}}</textarea>
                            @error('text')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
    
                     
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input name="image" type="file" class="form-control-file" id="image" value="{{$about->image}}">
                            @error('iamge')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
    
    
                        <div class="from-group">
                            <img src="{{asset('uploads/about/'.$about->image)}}" alt="" style="height:250px;width:160px;">
                        </div>
                        
                        <br>
                        <br>
    
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
