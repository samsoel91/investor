@extends ('layout.main')
@section ('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> <br>
    <!-- Main content -->
    <div class="row">
    <section class="col-lg-6 connectedSortable">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Kaltara Batu Konstruksi Q1 Report</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <iframe src="{{ asset('lte/dist/img/file/KBK Q1 Report.pdf') }}" style="width:600px; height:400px;" frameborder="0"></iframe>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Kaltara Batu Konstruksi Q3 Report</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <iframe src="{{ asset('lte/dist/img/file/KBK Q3 Report.pdf') }}" style="width:600px; height:400px;" frameborder="0"></iframe>
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
        <!-- Main content -->
        <section class="col-lg-6 connectedSortable">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Kaltara Batu Konstruksi Q2 Report</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <iframe src="{{ asset('lte/dist/img/file/KBK Q2 Report.pdf') }}" style="width:600px; height:400px;" frameborder="0"></iframe>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Kaltara Batu Konstruksi Q4 Report</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <iframe src="{{ asset('lte/dist/img/file/KBK Q4 Report.pdf') }}" style="width:600px; height:400px;" frameborder="0"></iframe>
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
    </div>
  </div>
  <!-- /.content-wrapper -->
@endsection