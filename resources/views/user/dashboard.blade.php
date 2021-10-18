@extends('layouts.frontend')

@section('title')
{{ config('app.name') }} | About
@endsection

@section('')
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
                    <li>User Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page title end -->

<!-- 1rd Block Wrapper Start -->
<section class="utf_block_wrapper">
    {{-- <div class="container ">
        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                        aria-controls="v-pills-home" aria-selected="true">Home</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                        aria-controls="v-pills-profile" aria-selected="false">Post A Ad</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                        aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                        aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                </div>
            </div>

            <div class="col-6">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="card" style="width: 18rem;">
                                    <!--tips: add .text-center,.text-right to the .card to change card text alignment-->
                                    <div class="card-header bg-info">
                                        Statics
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-muted">Total Add posted
                                            <span class="badge badge-danger ml-4">10</span>
                                        </h6>
                                        <h6 class="card-subtitle mb-2 text-muted mt-4">Tottal Ad Aproved
                                            <span class="badge badge-danger ml-4">10</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                         <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="card" style="width: 18rem;">
                                    <!--tips: add .text-center,.text-right to the .card to change card text alignment-->
                                    <div class="card-header bg-info">
                                       Post A ad
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-muted">Total Add posted
                                            <span class="badge badge-danger ml-4">10</span>
                                        </h6>
                                        <h6 class="card-subtitle mb-2 text-muted mt-4">Tottal Ad Aproved
                                            <span class="badge badge-danger ml-4">10</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        ...</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">
                        ...</div>
                </div>
            </div>
        </div>
    </div> --}}
</section>
<!-- 1rd Block Wrapper End -->
@endsection