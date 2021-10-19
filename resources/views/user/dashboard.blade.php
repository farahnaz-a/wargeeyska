@extends('layouts.frontend')

@section('title')
{{ config('app.name') }} | User Dashboard
@endsection

@section('')
active
@endsection


@section('css')

<style>
    .profile-head {
        transform: translateY(5rem)
    }

    .cover {
        background-image: url(https://images.unsplash.com/photo-1530305408560-82d13781b33a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80);
        background-size: cover;
        background-repeat: no-repeat
    }

    body {
        background: #654ea3;
        background: linear-gradient(to right, #e96443, #904e95);
        min-height: 100vh;
        overflow-x: hidden
    }
</style>

@endsection

@section('content')


<!-- Page Title Start -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>User Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page title end -->

<!-- 1rd Block Wrapper Start -->
<section class="utf_block_wrapper">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12">
                <div class="bg-white shadow rounded overflow-hidden">
                    <div class="px-4 pt-0 pb-4 cover text-center align-items-center justify-content-center">
                        <div class="media align-items-center m-auto profile-head">
                            <div style="margin: 0 auto;" class="profile text-center">
                                <img src="{{ Auth::user()->profile_photo_url }}" alt="..." width="130"
                                    class="rounded mb-2 img-thumbnail">
                                <h4 class="mt-0 mb-0">{{ Auth::user()->name }}</h4>
                            </div>
                        </div>
                        <div class="card-body align-items-center">
                            <a style="text-align: center" href="{{ route('become.reporter') }}"
                                class="btn btn-primary">Become a Reporter ... Now !!</a>
                            <a style="text-align: center" href="{{ url('/user/profile') }}" class="btn btn-success">My
                                Profile Settings !!</a>
                        </div>
                    </div>
                    <div class="py-4 px-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="mb-0">Recent Ads</h5>
                            <a href="{{ route('user.add.create') }}">Add one now (We will charge an small amount to post
                                your ad on our site) !!!</a>
                        </div>
                        <div class="row">

                            @forelse ($ads as $ad)
                            <div class="col-lg-6 mb-2 pr-lg-1"><img src="{{ asset('uploads/ads') }}/{{ $ad->image }}"
                                    alt="" class="img-fluid rounded shadow-sm"></div>
                            @empty
                            <div class="col-lg-12 mb-2 pr-lg-1 w-100" style="margin: 0 auto">
                                <p>You don't have any ads yet !!!</p>
                                <a href="{{ route('user.add.create') }}">Add one now (We will charge an small amount to
                                    post your ad on our site) !!!</a>
                            </div>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 1rd Block Wrapper End -->
@endsection