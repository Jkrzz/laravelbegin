@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Category</h1>
          </div><!-- /.col -->
       <!-- /.col -->
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
                <a href="{{route('admin.category.create')}}" type='button' class="btn btn-primary btn-flat"><i class="fas fa-plus"></i> Create</a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Data </h3>
      
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
                            <th>Name</th>
                            <th>Posts</th>
                            <th>Action</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                      @foreach ($categories as $key=>$category)
                      <tr>
                        <td class="">{{$key+1}}</td>
                        <td>{{$category->name}}</td>
                        <td>0</td>
                        <td>
                            <div class="btn-group">
                              <a href="{{route('admin.category.show',$category->id)}}" class="btn btn-outline-info btn-flat"><i class="fas fa-eye"></i></button>
                              <a href="{{route('admin.category.edit',$category->id)}}" class="btn btn-outline-info btn-flat"><i class="far fa-edit"></i></a>  
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-outline-success btn-flat"><i class="fas fa-trash"></i></button>
                        </td>
                      </tr>
                      @foreach ($category->childs as $keyc=>$child)
                      <tr>
                      <td class="table-border-left">{{$keyc+1}}</td>
                      <td>{{$child->name}}</td>
                      <td>0</td>
                      <td>
                          <div class="btn-group">
                            <button class="btn btn-outline-info btn-flat"><i class="fas fa-eye"></i></button>
                            <a href="{{route('admin.category.edit',$child->id)}}" class="btn btn-outline-info btn-flat"><i class="far fa-edit"></i></a>    
                          </div>
                      </td>
                      <td>
                          <form action="{{route('admin.category.destroy',$child->id)}} " method="post">
                           {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" onclick='if(!confirm("Are you going to delete it")){
                              event.preventDefault();
                            }' class="btn btn-outline-success btn-flat"><i class="fas fa-trash"></i></button>
                          </form>
                      </td>
                    </tr>
                      @endforeach
                      @endforeach
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
  </div>
@endsection