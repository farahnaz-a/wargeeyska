@extends('admin.dashboard')

{{-- Title --}}
@section('title')
{{ config('app.name') }} | Pending Reporter Blogs
@endsection

{{-- Menu Active --}}
@section('reporterblogsPending')
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
                    <li class="breadcrumb-item">Pending Reporters Blogs</li>
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
                    <h4>List of all Pending Reporters Blogs</h4>

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
                                    <th>Sl.</th>
                                    <th style="width: 20%">Reporter Name</th>
                                    <th style="width: 30%">Title</th>
                                    <th style="width: 20%">Thumbnail</th>
                                    <th style="width: 10%">Payment Status</th>
                                    <th style="width: 10%">Publish Status</th>
                                    <th style="width: 10%">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                <tr>
                                    <td>
                                        {{ $loop->index + 1 }}
                                    </td>

                                    <td>
                                        <span class="font-weight-bold">{{$blog->user->name}}</span>
                                        <input type="hidden" id="user_id" value="{{ $blog->id }}">
                                    </td>

                                    <td>
                                        <span class="font-weight-bold">{{$blog->title}}</span>
                                    </td>
                                    <td>
                                        <img src="{{ asset('uploads/blogs/'.$blog->thumbnail) }}" width="150"
                                            alt="Thumbnail">
                                    </td>
                                    <td>
                                        @if ($blog->payment_status == "paid")
                                        <span class="font-weight-bold">Paid</span>
                                        @else
                                        <span class="font-weight-bold">Unpaid</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{route('reporter.blog_published')}}" method="POST">
                                            @csrf
                                            <input  type="hidden" name="id" value="{{ $blog->id }}">
                                            <button type="submit" class="btn btn-danger waves-effect waves-float waves-light">No Publishd</button>
                                        </form>
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

                                                <a class="dropdown-item" href="{{route('reporter.blog_details',$blog->id)}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-edit-2 mr-50">
                                                        <path
                                                            d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                        </path>
                                                    </svg>
                                                    <span>Details</span>
                                                </a>


                                                
                                                    <a class="dropdown-item" href="{{ route('reporter.blog_delete',$blog->id) }}">
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
