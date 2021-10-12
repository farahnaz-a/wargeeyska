@extends('admin.dashboard')

{{-- Title --}}
@section('title')
{{ config('app.name') }} | Create a Post
@endsection

{{-- Menu Active --}}
@section('adPost')
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
                    <li class="breadcrumb-item">Create News Subcategory</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Page Content --}}
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create a AD</h4>
            </div>
            <div class="card-body">
                <form class="form form-vertical" action="{{ route('adAdmin.store') }}" enctype="multipart/form-data"
                    method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="image">Ad Image</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="image">
                                    <label class="custom-file-label" for="ad">Choose Ad photo</label>
                                    @error('iamge')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="favicon">Select Ad Position</label>
                                <select class="form-control" id="position" name="position" >
                                    <option value="f_top">Top Of The Front Page</option>
                                    <option value="f_mid">Middle of The Front Page</option>
                                    <option value="f_end">End of The Front Page</option>
                                    <option class="blog" value="blog"> Select Blog</option>
                                </select>
                                @error('position')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                            </div>
                        </div>

                        <div class="col-12" id="blogs">
                            <div class="form-group option d-none" id="option">
                                <label for="favicon">Select A Blog</label>
                                <select class="form-control" id="selectDefault" name="blog">
                                    <option value="null">Select A Blog</option>
                                    @foreach ($blogs as $blog)
                                    <option value="{{$blog->id }}">{{ $blog->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="image">Ad Link</label>
                                <input type="text" name="link" class="form-control" id="title" placeholder="Link">
                                    @error('link')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                            </div>
                        </div>

                        <div class="col-12" id="blogs">
                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                        </div>   
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
   
   $(document).ready(function() {
        $("#position").change(function(e){
            e.preventDefault(); 
        

         if ($("#position").val() == 'blog') {
             $('#option').removeClass('d-none');
         }
         else{
             $('#option').addClass('d-none');
         }
        });
    });
  
</script>
@endsection