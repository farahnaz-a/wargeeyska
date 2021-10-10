@extends('reporters.dashboard')

{{-- Title --}}
@section('title')
{{ config('app.name') }} | Reporter ad Request
@endsection

{{-- Menu Active --}}
@section('adReporterRequest')
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
                    <li class="breadcrumb-item">Ads</li>
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
                    <h4>List of your Ads</h4>

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
                                    <th>Ad Position</th>
                                    <th>Blog Title(Optional)</th>
                                    <th>Ad image</th>
                                    <th>Payment Status</th>
                                    <th>Aprove Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ads as $ad)
                                <tr>
                                   
                                    <td>
                                        @if ($ad->user->role == 'Admin')
                                        <span class="font-weight-bold">{{$ad->user->name}}(Admin)</span> 
                                        @else
                                        <span class="font-weight-bold">{{$ad->user->name}}</span>
                                        @endif
                                        
                                        
                                    </td>
                                    <td>
                                        @if ($ad->ad_position == 'f_top')
                                        <span class="font-weight-bold">Front Page Top</span>
                                        @elseif($ad->ad_position == 'f_mid')
                                        <span class="font-weight-bold">Front Page Middle</span>
                                        @else
                                        <span class="font-weight-bold">In Blog</span>
                                        @endif
                                        
                                    </td>
                                    <td>
                                        @if ($ad->blog_id != null)
                                        <span class="font-weight-bold">{{$ad->blog->title}}</span>
                                        @else
                                        <span class="font-weight-bold">This Ad Not For Any Blog</span>
                                        @endif
                                        
                                    </td>
                                    <td>
                                       
                                        <img src="{{ asset('uploads/ads') }}/{{ $ad->image }}" alt="Ad Image" height="130px" width="220px">
                                    </td>
                                    <td>
                                        @if ($ad->payment_status == "pending")
                                        <span class="font-weight-bold text-danger">Pending</span>
                                        @elseif($ad->payment_status == "admin_post")
                                        <span class="font-weight-bold text-success">Admin Post</span>
                                        @else
                                        <span  class="font-weight-bold text-success">Paid</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if ($ad->aprove_status == "pending")
                                        <span class="font-weight-bold text-danger">Pending</span>
                                        @else
                                        <span  class="font-weight-bold text-success">Aproved</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button"
                                                class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                                data-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <form action="{{route('adReporter.destroy',$ad->id)}}" method="POST">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    <a class="dropdown-item" href="{{route('adAdmin.destroy',$ad->id)}}"
                                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-trash mr-50">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                        </svg>
                                                        <span>Delete</span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
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
