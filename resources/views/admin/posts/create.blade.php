@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create</h1>
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
                    <form role="form" action={{route('admin.posts.store')}} method="post">
                      {{csrf_field()}}
                      <div class="card-body">
                        <div class="form-group">
                          <label for="image">Image</label>
                          <input type="file" name="image" class="form-control" id="image" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                          <label for="Name">Title</label>
                          <input type="text" name="title" class="form-control" id="Name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                          <label for="description">Description</label>
                         <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                          <label>Category Name</label>
                          <select name="category" class="form-control">
                            <option value="0">Select Category</option>
                              @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                              @endforeach
                          </select>
                        </div>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" name='save' class="btn btn-outline-danger">Save</button>
                        <button type="submit" name='saveclose' class="btn btn-outline-primary">Save & close</button>
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