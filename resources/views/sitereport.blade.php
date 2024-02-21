@extends('layout.main')
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
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daily Project Report</h3>
              </div>
              <!-- /.card-header -->
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered" text-align="center">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Date of Report</th>
                      <th>Submitted by</th>
                      <th>Approved by</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>2 January 2023</td>
                      <td>Bukhari</td>
                      <td>Givi Andriyanto</td>
                      <td><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">view</button>
                      <!-- Modal -->
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-body">
                              <div style="text-align: center;">
                              <iframe src="{{ asset('lte/docs/assets/img/BKN - KBK Malinau Project Daily Report 02 Jan 2024.pdf') }}" style="width:470px; height:500px;" frameborder="0"></iframe>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>3 January 2023</td>
                      <td>Bukhari</td>
                      <td>Givi Andriyanto</td>
                      <td><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">view</button>
                      <!-- Modal -->
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-body">
                              <div style="text-align: center;">
                              <iframe src="{{ asset('lte/docs/assets/img/KBK20Summary20(Equity202023.pdf') }}" style="width:470px; height:500px;" frameborder="0"></iframe>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>4 January 2023</td>
                      <td>Bukhari</td>
                      <td>Givi Andriyanto</td>
                      <td><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">view</button>
                      <!-- Modal -->
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-body">
                              <div style="text-align: center;">
                              <iframe src="{{ asset('lte/docs/assets/img/KBK20Summary20(Equity202023.pdf') }}" style="width:470px; height:500px;" frameborder="0"></iframe>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    </tr>
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
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Weekly Project Report</h3>
              </div>
              <!-- /.card-header -->
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered" text-align="center">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Date of Report</th>
                      <th>Submitted by</th>
                      <th>Approved by</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>2 January 2023</td>
                      <td>Bukhari</td>
                      <td>Givi Andriyanto</td>
                      <td><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">view</button>
                      <!-- Modal -->
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-body">
                              <div style="text-align: center;">
                              <iframe src="{{ asset('lte/docs/assets/img/public/lte/docs/assets/img/KBK DAILY HEALTH AND SAFETY REPORT 02 Jan 2024.pdff') }}" style="width:470px; height:500px;" frameborder="0"></iframe>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>3 January 2023</td>
                      <td>Bukhari</td>
                      <td>Givi Andriyanto</td>
                      <td><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">view</button>
                      <!-- Modal -->
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-body">
                              <div style="text-align: center;">
                              <iframe src="{{ asset('lte/docs/assets/img/KBK20Summary20(Equity202023.pdf') }}" style="width:470px; height:500px;" frameborder="0"></iframe>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>4 January 2023</td>
                      <td>Bukhari</td>
                      <td>Givi Andriyanto</td>
                      <td><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">view</button>
                      <!-- Modal -->
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-body">
                              <div style="text-align: center;">
                              <iframe src="{{ asset('lte/docs/assets/img/KBK20Summary20(Equity202023.pdf') }}" style="width:470px; height:500px;" frameborder="0"></iframe>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    </tr>
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
          </div>
        </div>
      </div>
    </section>
</div>
@endsection