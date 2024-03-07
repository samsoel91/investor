@extends('layout.main')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css" />
@endsection
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
                <table class="table table-striped text-center" id="documenttable">
                  <thead>
                    <tr class="text-center">
                      <th>No</th>
                      <th>Document Name</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $k=>$d)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $d->namefile }}</td>
                      <td>{{ $d->date }}</td>
                      <td>
                        <a href="{{ asset('storage/doc-user/'.$d->file)}}" target="_blank" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                        <!-- Button trigger modal -->
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#mymodal{{ $k }}"><i class="fas fa-eye"></i></button>
                        <!-- Modal -->
                        <div class="modal fade" id="mymodal{{ $k }}" tabindex="-1" role="dialog" aria-labelledby="mymodal{{ $k }}{{ $k }}Label" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="mymodal{{ $k }}Label">Modal title</h4> 
                              </div>
                              <div class="modal-body">
                                <div style="text-align: center;">
                                  <iframe src="{{ asset('storage/doc-user/'.$d->file)}}" style="width:500px; height:500px;" frameborder="0"></iframe>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
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
@section('script')
  <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
  <script>
      $(document).ready( function () {
      $('#documenttable').DataTable();
      } );
  </script>
@endsection