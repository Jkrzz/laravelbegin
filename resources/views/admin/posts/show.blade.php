@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Show</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.posts.index')}}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
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
        <!-- /.row (main row) -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Create Post</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action={{route('admin.posts.update' ,$request->id)}} method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                      {{method_field('PUT')}}
                      <div class="card-body">
                        <div class="form-group">
                          <label for="image">Image</label>
                          <img src="{{asset('images/'.$request->image.'')}}"  width="200px" height="auto" alt="">
                        </div>
                        {{$request->image}}
                        <div class="form-group">
                          <label for="Name">Title</label>
                          <input disabled type="text" value="{{$request->title}}" name="title" class="form-control" id="Name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                          <label for="description">Description</label>
                         <input type="text" value='{{$request->description}}' disabled class="form-control"> 
                        </div>
                        
                        <div class="form-group">
                          <label>Category Name</label>
                          <select disabled name="category" class="form-control">
                            <option value="0" disabled>Select Category</option>
                              @foreach ($categories as $category)
                                <option value="{{$category->id}}" @if ($request->category=$category->id)
                                    selected
                                @endif>{{$category->name}}</option>
                              @endforeach
                          </select>
                        </div>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer"> 
                        <a href="{{route('admin.posts.index')}}" class="btn btn-outline-danger">Close</a>
                      </div>
                    </form>
                    
                  </div>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection