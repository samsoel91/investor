@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Document</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Document</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form action="{{ route('admin.updatedocument',['id' => $data->id]) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Form Edit Document</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name File</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="namefile" value="{{ $data->namefile }}">
                      @error('namefile')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Date</label>
                      <input type="date" class="form-control" id="exampleInputEmail1" name="date" value="{{ $data->date }}">
                      @error('date')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Upload</label>
                      <input type="file" class="form-control" id="exampleInputEmail1" name="file">
                      @error('file')
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