@extends('admin.dashboard')

{{-- Title --}}
@section('title')
{{ config('app.name') }} | Create Subcategory
@endsection

{{-- Menu Active --}}
@section('SubCategoryCreate')
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
                    <li class="breadcrumb-item">Create News Subcategory</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Page Content --}}
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create Subcategory</h4>
                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('warning'))
                <div class="alert alert-success">{{ session('warning') }}</div>
                @endif
            </div>
            <div class="card-body">
                <form action="{{route('subcategories.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="from-group">
                        <label for="category">Select category</label>
                        <select class="form-control" aria-label="Default select example" id="category" name="category_id">
                            <option>-Select-</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>    
                        @error('category')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>   
                    
                    <div class="form-group">
                        <label for="subcategory">Subcategory Name</label>
                        <input type="text" name="name" class="form-control" id="subcategory" placeholder="Subcategory name">
                        @error('name')
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
