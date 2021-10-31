@extends('admin.dashboard')

{{-- Title --}}
@section('title')
{{ config('app.name') }} | Copy Right
@endsection

{{-- Menu Active --}}
@section('copyRightIndex')
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
                    <li class="breadcrumb-item">Copy Right</li>
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
                    <h4 class="card-title">Update Copy Right</small></h4>
                    @if (session('update'))
                    <div class="alert alert-warning">{{ session('update') }}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{ route('copyRights.update',$copy_right->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="copy_right">Copy Right</label>
                            <input name="copy_right" type="text" class="form-control" id="copy_right"
                                value="{{ $copy_right->copy_right }}">
                            @error('copy_right')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection