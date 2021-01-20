@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Home</a></li>
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
                      <h3 class="card-title">Edit Category</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action={{route('admin.category.store')}} method="post">
                      {{csrf_field()}}
                      <div class="card-body">
                        <div class="form-group">
                          <label for="Name">Name</label>
                          <input type="text" name="name" class="form-control" id="Name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                          <label>Parent Name</label>
                          <select name="parent" class="form-control">
                            <option value="0">Select Parent Name</option>
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
                        <a href="{{route('admin.category.index')}}" class="btn btn-outline-danger">Close</a>
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