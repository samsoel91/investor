@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
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
                <h3 class="card-title">Sales Report</h3>
              </div>
              <!-- /.card-header -->
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Date of Report</th>
                      <th>Prepared by</th>
                      <th>Approved by</th>
                      <th>action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>18 November 2023</td>
                      <td>Yan Iryanto</td>
                      <td>Zainul Arifin</td>
                      <td><a href="{{ asset('lte/docs/assets/img/Marketing_Sales_Weekly_Report_18_Nov_2023.pdf')}}" target="_blank"><i class="fa fa-eye"></i></a></td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>2</td>
                      <td>25 November 2023</td>
                      <td>Yan Iryanto</td>
                      <td>Zainul Arifin</td>
                      <td>view</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>3</td>
                      <td>08 December 2023</td>
                      <td>Yan Iryanto</td>
                      <td>Zainul Arifin</td>
                      <td>view</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>
@endsection