@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Documents</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Documents</li>
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
        <a href="{{ route('admin.document.create')}}" class="btn btn-primary mb-3 text-left">Add Document</a>
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Document List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr class="text-center">
                      <th style="width: 10px">No</th>
                      <th>Document Name</th>
                      <th>Date</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $d)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $d->namefile }}</td>
                      <td>{{ $d->date }}</td>
                      <td><a href=""><i class="fa fa-eye"></i></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
        </div>
        <!-- /.content -->
    </div>
    </section>


  </div>
@endsection