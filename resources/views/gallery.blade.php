@extends('layout.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gallery</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gallery</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title">First Buyer Ceremony</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-4">
                    <a href="#" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="{{ asset('lte/docs/assets/img/2.jpg') }}" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-4">
                    <a href="#" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
                      <img src="{{ asset('lte/docs/assets/img/1.jpg') }}" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                  <div class="col-sm-4">
                    <a href="#" data-toggle="lightbox" data-title="sample 3 - red" data-gallery="gallery">
                      <img src="{{ asset('lte/docs/assets/img/3.jpg') }}" class="img-fluid mb-2" alt="red sample"/>
                    </a>
                  </div>
                  <div class="col-sm-6">
                    <a href="#" data-toggle="lightbox" data-title="sample 9 - red" data-gallery="gallery">
                      <img src="{{ asset('lte/docs/assets/img/4.jpg') }}" class="img-fluid mb-2" alt="red sample"/>
                    </a>
                  </div>
                  <div class="col-sm-6">
                    <a href="#" data-toggle="lightbox" data-title="sample 5 - black" data-gallery="gallery">
                      <img src="{{ asset('lte/docs/assets/img/5.jpg') }}" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                  <div class="col-sm-4">
                    <a href="#" data-toggle="lightbox" data-title="sample 6 - white" data-gallery="gallery">
                      <img src="{{ asset('lte/docs/assets/img/6.jpg') }}" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-4">
                    <a href="#" data-toggle="lightbox" data-title="sample 7 - white" data-gallery="gallery">
                      <img src="{{ asset('lte/docs/assets/img/7.jpg') }}" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-4">
                    <a href="#" data-toggle="lightbox" data-title="sample 8 - black" data-gallery="gallery">
                      <img src="{{ asset('lte/docs/assets/img/8.jpg') }}" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                  <div class="col-sm-6">
                      <iframe width="100%" height="315" src="https://www.youtube.com/embed/UVp_Nr_CaTo?si=mBodWJkqax9Tcbh7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  </div>
                  <div class="col-sm-6">
                  <iframe width="100%" height="315" src="https://www.youtube.com/embed/NlQIEPCQjXQ?si=Zsr5cDOAIQMUrUWX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection