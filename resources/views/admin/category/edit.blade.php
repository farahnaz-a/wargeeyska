@extends('admin.dashboard')

{{-- Title --}}
@section('title')
{{ config('app.name') }} | Edit News Category
@endsection

{{-- Menu Active --}}
@section('CategoryCreate')
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
                    <li class="breadcrumb-item">Edit News Categories</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Page Content --}}
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit {{ ucfirst($category->name) }}</small></h4>
            </div>
            <div class="card-body">
                    <form action="{{route('categories.update',$category->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Category Name</label>
                            <input type="text" name="name" class="form-control" id="title" aria-describedby="emailHelp" value="{{$category->name}}">
                            @error('title')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
