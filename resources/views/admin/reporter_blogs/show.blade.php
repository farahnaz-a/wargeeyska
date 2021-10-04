@extends('admin.dashboard')

{{-- Title --}}
@section('title')
{{ config('app.name') }} | Blogs Details
@endsection

{{-- Menu Active --}}
@section('reporterblogsIndex')
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
                    <li class="breadcrumb-item">Blogs Details</li>
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
                    <h4>Bloga Details</h4>

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
                        <table id="" class="table table-striped table-bordered">

                            <tbody>
                                <tr>
                                    <th class="font-weight-bold" >Author Name</th>
                                    <td>{{$details->user->name}}</td>
                                </tr>
                                <tr>
                                    <th class="font-weight-bold" >Category</th>
                                    <td>{{$details->category->name}}</td>
                                </tr>
                                <tr>
                                    <th class="font-weight-bold">Subcategory</th>
                                    <td>{{$details->subcategory->name}}</td>
                                </tr>
                                <tr>
                                    <th class="font-weight-bold">Title</th>
                                    <td>{{$details->title}}</td>
                                </tr>
                                <tr>
                                    <th class="font-weight-bold">Quote</th>
                                    <td>{{$details->quote}}</td>
                                </tr>
                                <tr>
                                    <th class="font-weight-bold">Short Description</th>
                                    <td>{{$details->short_description}}</td>
                                </tr>
                                <tr>
                                    <th class="font-weight-bold">Description</th>
                                    <td>{{$details->description}}</td>
                                </tr>
                                <tr>
                                    <th class="font-weight-bold">Thumbnail</th>
                                    <td><img src="{{ asset('uploads/blogs/'.$details->thumbnail) }}" width="150"
                                            alt="Thumbnail"></td>
                                </tr>
                                <tr>
                                    <th class="font-weight-bold">Image</th>
                                    @if ($details->image == 'null')
                                    <td><img src="{{ asset('uploads/blogs/'.$details->image) }}" width="150"
                                        alt="Image"></td>
                                    @else
                                    <td><span class="">No Image</span></td>
                                    @endif
                                   
                                </tr>
                                <tr>
                                    <th class="font-weight-bold">Payment Status</th>
                                    @if ($details->payment_status == 'pending')
                                    <td class="text-danger">Pending</td>
                                    @else
                                    <td class="text-success">Paid</td>
                                    @endif
                                </tr>

                                <tr>
                                    <th class="font-weight-bold">Post Status</th>
                                    @if ($details->access_status == 'not_published')
                                    <td class="text-danger">Not published yet</td>
                                    @else
                                    <td class="text-success">Published</td>
                                    @endif
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
