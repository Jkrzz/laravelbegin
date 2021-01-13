@extends('admin.layouts.app')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Category</h1>
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
        <div class="col-md-12">
            <a href="{{route('admin.category.create')}}" type="button" class="btn btn-primary btn-flat"><i class="fas fa-plus"></i> Create</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card mt-2">
                <div class="card-header">
                  <h3 class="card-title">Category Data</h3>
  
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
  
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Parent Name</th>
                        <th>Name</th>
                        <th>Posts</th>
                        <th>Actions</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Business</td>
                        <td>Business</td>
                        <td><span class="badge badge-info">234</span></td>
                        <td><div class="btn-group">
                            <button type="button" class="btn btn-outline-success btn-flat"><i class="fas fa-eye"></i></button>
                            <button type="button" class="btn btn-outline-info btn-flat"><i class="far fa-edit"></i></button>
                            
                          </div></td>
                          <td>
                            <button type="button" class="btn btn-outline-success btn-flat"><i class="fas fa-trash"></i></button>
                          </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
        </div>
    </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection