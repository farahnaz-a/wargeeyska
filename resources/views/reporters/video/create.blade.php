@extends('reporters.dashboard')

{{-- Title --}}
@section('title')
{{ config('app.name') }} | Create a Post
@endsection

{{-- Menu Active --}}
@section('videoPost')
active
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="content-header-left col-md-12 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Reporter Dashboard</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Post a Ad</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Page Content --}}
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create a AD</h4>
            </div>
            <div class="card-body">
                <form class="form form-vertical" action="{{ route('videos.store') }}" enctype="multipart/form-data"
                    method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">Video title</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="Video title">
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-group">
                                <label for="image">Upload Video</label>
                                <div class="custom-file">
                                    <input type="file" name="video" class="custom-file-input" id="image">
                                    <label class="custom-file-label" for="ad">Choose a Video</label>
                                    @error('video')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="col-12" id="blogs">
                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                        </div>   
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection