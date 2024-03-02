@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add User</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form action="{{ route('admin.storedocument') }}" method="POST"  enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Form Add Document</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Document Name</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                      @error('email')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Date</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Name">
                      @error('name')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Upload</label>
                      <input type="file" class="form-control" id="exampleInputEmail1" name="photo">
                      @error('photo')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
          </div>
        </form>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection