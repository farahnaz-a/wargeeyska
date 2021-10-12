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
                                    <th style="width: 10%">Aprove blog</th>
                                    <th style="width: 10%">Reject Blog</th>
                                    <th style="width: 10%">Details</th>
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
                                            <button type="submit" class="btn btn-sm btn-success">Approve</button>
                                        </form>
                                    </td>


                                    <td>
                                        <a type="submit"  href="{{ route('reporter.blog_delete',$blog->id) }}" class="btn btn-danger btn-sm ">Reject</a>
                                    </td>

                                    <td>
                                        <a class="text-secondary" href="{{route('reporter.blog_details',$blog->id)}}">Details</a>
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
