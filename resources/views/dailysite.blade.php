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
            <h1 class="m-0">Report</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
          <a href="{{ route('admin.dailysitecreate')}}" class="btn btn-primary mb-3 text-left">Add Report</a>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daily Project Report</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered text-center" id="documenttable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Date</th>
                      <th>Submitted by</th>
                      <th>Approved by</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $d)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $d->date }}</td>
                      <td>{{ $d->submitted }}</td>
                      <td>{{ $d->sign }}</td>
                      <td>
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"><i class="fas fa-eye"></i></button>
                        <a data-toggle="modal" data-target="#modal-delete{{ $d->id}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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
                                <p>Are you sure you want to delete report date <b>{{$d->date}}</b>?</p>
                              </div>
                              
                                <form action="{{ route('admin.dailysitedelete',['id'=>$d->id]) }}" method="POST">
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
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
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