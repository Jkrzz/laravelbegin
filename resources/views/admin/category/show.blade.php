@extends('admin.layouts.app')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Category</a></li>
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
                  <h3 class="card-title">Create Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                  <div class="card-body">
                    <div class="form-group">
                      <label for="Name">Name</label>
                      <input disabled type="text" name="name" value="{{$result->name}}" class="form-control" id="Name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label>Select Parent Category</label>
                      <input disabled type="text" value="{{$result->parent->name ?? ''}}" name="name" class="form-control" id="Name" placeholder="Enter Name" >
                      </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <a href="{{route('admin.category.edit',$result->id)}}" class="btn btn-outline-primary btn-flat">Edit</a>
                    <a href="{{route('admin.category.index')}}" class="btn btn-outline-primary btn-flat">Close</a>
                  </div>
              </div>
        </div>
    </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection