@extends('reporters.dashboard')

{{-- Title --}}
@section('title')
{{ config('app.name') }} | Create Blog
@endsection

{{-- Menu Active --}}
@section('blogsCreate')
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
                    <li class="breadcrumb-item">Create Blogs</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Page Content --}}
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create Blog</h4>
                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('warning'))
                <div class="alert alert-success">{{ session('warning') }}</div>
                @endif
            </div>
            <div class="card-body">
                <form action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class=form-group">
                                <label for="category">Select category</label>
                                <select class="form-control" aria-label="Default select example" id="category"
                                    name="category_id">
                                    <option>-Select-</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class=form-group">
                                <label for="subcategory">Select subcategory</label>
                                <select class="form-control" aria-label="Default select example" id="subcategory"
                                    name="subcategory_id">
                                    
                                  @include('includes.option')
                                </select>
                                @error('subcategory')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="Blog Title">
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="short description">Short Description</label>
                                <textarea name="short_description" class="form-control" id="short description"
                                    placeholder="Short Description"></textarea>
                                @error('short_description')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                         
                        <div class="col-12">
                            <div class="form-group">
                                <label for="quote">Quote</label>
                                <textarea name="quote" class="form-control" id="quote"
                                    placeholder="Quote"></textarea>
                                @error('quote')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description"
                                    placeholder="Description"></textarea>
                                @error('description')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                       
                        <div class="col-12">
                            <div class="form-group">
                                <label for="thumbnail">Thumbnail</label>
                                <div class="custom-file">
                                    <input type="file" name="thumbnail" class="custom-file-input" id="thumbnail">
                                    <label class="custom-file-label" for="customFile">Choose Thumbnail</label>
                                </div>
                                @error('thumbnail')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="image">Image (Optional)</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="iamge">
                                    <label class="custom-file-label" for="customFile">Choose Image</label>
                                </div>
                                @error('image')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection

@section('js')
<script>
    $(document).ready(function() {
        $("#category").change(function(e){
            e.preventDefault(); 
            let id = $(this).val();

            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            url: "{{route('blog.subcategories')}}",
            type: 'post',
            data: {
                'id': id
            },
            success: function (response) {
               
            $('#subcategory').html(response.status);

            },

        });
        });
    });
</script>
@endsection
