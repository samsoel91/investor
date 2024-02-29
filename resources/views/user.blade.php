@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content text-left">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <a href="{{ route('admin.user.create')}}" class="btn btn-primary mb-3 text-left">Add User</a>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form Add User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr class="text-center">
                      <th style="width: 10px">NO</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $d)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $d->name}}</td>
                      <td>{{ $d->email}}</td>
                      <td>
                        <a href="" class="btn btn-primary"><i class="fas fa-pen"></i> Edit</a>
                        <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
    </section>
    <!-- /.content -->
  </div>
@endsection