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
            <h1 class="m-0">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
                <table class="table table-bordered text-center" id="usertable">
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
                        <a href="{{ route('admin.edituser',['id' => $d->id]) }}" class="btn btn-primary"><i class="fas fa-pen"></i> Edit</a>
                        <a data-toggle="modal" data-target="#modal-delete{{ $d->id}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                      </td>
                    </tr>
                        <div class="modal fade" id="modal-delete{{ $d->id}}">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Delete User?</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>Are you sure you want to delete <b>{{$d->name}}</b> from KBK Investor Dashboard User?</p>
                              </div>
                              
                                <form action="{{ route('admin.deleteuser',['id'=>$d->id]) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Yes</button>
                                </form>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    @endforeach
                  </tbody>
                </table>
              </div>
        </div>
    </div>
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('script')
  <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
  <script>
      $(document).ready( function () {
      $('#usertable').DataTable();
      } );
  </script>
@endsection