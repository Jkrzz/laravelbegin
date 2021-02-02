@extends('admin.layouts.app')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.posts.index')}}">Post</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Post</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                    <div class="form-group">
                        <label>Select Category</label>
                        <select class="form-control" name="category">
                          <option disabled ">Select Category</option>
                          @foreach ($categories as $category)
                          <option disabled @if ($post->category->id=$post->category->id)
                              selected
                          @endif value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" disabled name="image" class="form-control" id="image" placeholder="Enter Title">
                        <img src="{{$post->image}}" width="200px" alt="">
                    </div>  
                    <div class="form-group">
                      <label for="Name">Title</label>
                      <input type="text" disabled value="{{$post->title}}" name="title" class="form-control" id="Name" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" value="" id="description-disable" class="form-control" cols="30" rows="10">{{$post->description}}</textarea>
                      </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <a href="{{route('admin.posts.edit',$post->id)}}" class="btn btn-outline-primary btn-flat">Close</a>
                    <a href="{{route('admin.posts.index')}}" class="btn btn-outline-primary btn-flat">Close</a>
                  </div>
              </div>
        </div>
    </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection