@extends('admin.dashboard')

{{-- Title --}}
@section('title')
{{ config('app.name') }} | About
@endsection

{{-- Menu Active --}}
@section('footerContactIndex')
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
                    @if (session('update'))
                    <div class="alert alert-warning">{{ session('update') }}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{route('footer_contact.update',$footer_contact->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Address</label>
                            <input type="text" name="address" class="form-control" id="title" value="{{ $footer_contact->address }}">
                            @error('address')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="title" value="{{ $footer_contact->phone }}">
                            @error('phone')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Email</label>
                            <input type="text" name="email" class="form-control" id="title" value="{{ $footer_contact->email }}">
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Facebook link</label>
                            <input type="text" name="facebook_link" class="form-control" id="title" value="{{ $footer_contact->facebook_link }}">
                            @error('facebook_link')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Google link</label>
                            <input type="text" name="google_link" class="form-control" id="title" value="{{ $footer_contact->google_link }}">
                            @error('google_link')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Twitter link</label>
                            <input type="text" name="twitter_link" class="form-control" id="title" value="{{ $footer_contact->twitter_link }}">
                            @error('twitter_link')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Linkedin link</label>
                            <input type="text" name="linkdin_link" class="form-control" id="title" value="{{ $footer_contact->linkdin_link }}">
                            @error('linkidn_link')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Skyp link</label>
                            <input type="text" name="skyp_link" class="form-control" id="title" value="{{ $footer_contact->skyp_link }}">
                            @error('skyp_link')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Instagram link</label>
                            <input type="text" name="instagram_link" class="form-control" id="title" value="{{ $footer_contact->instagram_link}}">
                            @error('instagram_link')
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
