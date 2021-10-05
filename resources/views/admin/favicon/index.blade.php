@extends('admin.dashboard')

{{-- Title --}}
@section('title')
{{ config('app.name') }} | Favicon
@endsection

{{-- Menu Active --}}
@section('faviconIndex')
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
                    <li class="breadcrumb-item">Favicon</li>
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
                    <h4 class="card-title">Update Favicon</small></h4>
                    @if (session('update'))
                    <div class="alert alert-warning">{{ session('update') }}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{route('favicon.update',$favicon->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input name="image" type="file" class="form-control-file" id="image" value="{{$favicon->image}}">
                            @error('iamge')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
    
    
                        <div class="from-group">
                            <img src="{{asset('uploads/favicon/'.$favicon->image)}}" alt="" style="height:170px;width:300px;">
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
