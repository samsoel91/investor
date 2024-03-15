@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Buyer LOI & MOU</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th style="width: 20px">No</th>
                    <th>Name File</th>
                    <th style="width: 30px">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>1</td>
                      <td>Auditor Report 2019-2018 Final</td>
                      <td>
                      <a href="https://drive.google.com/file/d/1JSD6N-Qd6DtmdMfgu-EwH24IppIPj95J/preview" target="_blank" class="btn btn-primary fas fa-eye">
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Auditor Report 2020-2019 Final</td>
                      <td>
                      <a href="https://drive.google.com/file/d/1iXpQOuyZwZc1GqaHoQMla0JNhY_ju0ci/preview" target="_blank" class="btn btn-primary fas fa-eye">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
          </div>
        </div>
      </section>
</div>
@endsection