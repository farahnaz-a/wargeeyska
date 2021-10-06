@extends('layouts.frontend')

@section('title')
{{ config('app.name') }} | About
@endsection

@section('about')
active
@endsection

@section('content')


<!-- Page Title Start -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Login</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page title end -->

<!-- 1rd Block Wrapper Start -->
<section class="utf_block_wrapper">
    <div class="container">
        <div class="row" style="justify-content: center;">
            <div class="col-lg-6 col-md-12 mrb-40">
                <h3>Login</h3>
                <p>Your email address will not be published. Required fields are marked <span style="color:red">*</span>
                </p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input name="email" class="form-control" placeholder="Email*" type="email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password*"  required>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                </form>
            </div>

            {{-- <div class="col-lg-6 col-md-12">
                <h3>Register</h3>
                <p>Your email address will not be published. Required fields are marked <span style="color:red">*</span>
                </p>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" placeholder="Name*" type="text"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input  name="email" class="form-control" placeholder="Email*" type="email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input name="password" class="form-control" placeholder="Password*" type="password" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input name="password_confirmation" class="form-control" placeholder="Confirm Password*" type="password" required>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <button class="btn btn-primary" type="submit">Signup</button>
                    </div>
                </form>

            </div> --}}
        </div>
    </div>
</section>
<!-- 1rd Block Wrapper End -->
@endsection
