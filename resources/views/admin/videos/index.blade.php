@extends('admin.dashboard')

{{-- Title --}}
@section('title')
{{ config('app.name') }} | Admin ad Section
@endsection

{{-- Menu Active --}}
@section('videoIndex')
active
@endsection

@section('css')
<link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="content-header-left col-md-12 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Aproved Video</li>
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
        <div class="col-lg-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4>List of Aproved video</h4>

                    <a href="{{ route('reportervideos.create') }}" class="btn btn-success">Post A Video</a>

                    @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('update'))
                    <div class="alert alert-warning">{{ session('update') }}</div>
                    @endif
                    @if (session('delete'))
                    <div class="alert alert-danger">{{ session('delete') }}</div>
                    @endif
                    @if (session('deny'))
                    <div class="alert alert-danger">{{ session('deny') }}</div>
                    @endif
                </div>
                <div class="card-body">
                    <p class="card-text">

                    </p>
                    <div class="table-responsive">
                        <table id="data_table" class="table table-bordered">
                            <thead>
                                <tr>

                                    <th>Author Name</th>
                                    <th>Title</th>
                                    <th>Video</th>
                                    <th>Payment Status</th>
                                    <th>Aprove Status</th>
                                    <th>Delete</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($videos as $video)
                                <tr>

                                    <td>
                                        @if ($video->user->role == 'admin')
                                        <span class="font-weight-bold">{{$video->user->name}}(Admin)</span>
                                        @else
                                        <span class="font-weight-bold">{{$video->user->name}}</span>
                                        @endif
                                    </td>

                                    <td>
                                        <span class="font-weight-bold"> {{ $video->title }}</span>
                                    </td>

                                    <td>
                                        <!-- Button trigger modal -->
                                        <a type="button" class="text-info" data-toggle="modal"
                                            data-target="#exampleModalCenter">
                                           View video
                                         </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Video
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <video width="460" height="340" controls>
                                                            <source src="{{ asset('uploads/video/') }}/{{ $video->video }}"
                                                                type="video/mp4">
                                                        </video>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </td>

                                    <td>
                                        @if ($video->payment_status == "pending")
                                        <span class="font-weight-bold text-danger">Pending</span>
                                        @elseif($video->payment_status == "admin_post")
                                        <span class="font-weight-bold text-success">Admin Post</span>
                                        @else
                                        <span class="font-weight-bold text-success">Paid</span>
                                        @endif
                                    </td>

                                    <td>

                                        @if ($video->access_status == "published")
                                        <span class="font-weight-bold text-success">Published</span>
                                        @else
                                        <span class="font-weight-bold text-danger">Not published</span>
                                        @endif

                                    </td>
                                    <td>
                                        <form action="{{route('videos.destroy',$video->id)}}" method="POST">
                                            {{ method_field('DELETE') }}
                                            @csrf
                                            <a class="btn btn-sm btn-danger" href="{{route('videos.destroy',$video->id)}}"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                <span>Delete</span>
                                            </a>
                                        </form>
                                    </td> 
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

{{-- 
@section('js')
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

<script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
@endsection --}}
