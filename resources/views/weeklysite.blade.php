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
      <section class="content text-center">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daily Project Report</h3>
              </div>
              <!-- /.card-header -->
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered text-center" id="documenttable">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
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
                      <td><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">view</button></td>
                    </tr>
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