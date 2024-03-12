@extends ('layout.main')
@section ('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card row">
        <div class="card-header">
          <h3 class="card-title">Mining Permit</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <section class="content">
        <div class="card-body">
        <iframe src="{{ asset('lte/docs/assets/img/minepermit.pdf') }}#toolbar=0" style="width:100%; height:700px;" frameborder="0"></iframe>
        </div>
        </section>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection