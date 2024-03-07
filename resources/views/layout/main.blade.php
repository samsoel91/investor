<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KBK Portal Investor | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ Asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ Asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ Asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ Asset('lte/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ Asset('lte/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ Asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ Asset('lte/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ Asset('lte/plugins/summernote/summernote-bs4.min.css') }}">
  @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin.dashboard') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://kbkquarry.com/contact.html" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('logout') }}" class="nav-link">Logout</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
      <img src="{{ asset('lte/dist/img/logo-v1.png') }}" alt="KBK Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PT KBK </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('lte/dist/img/avatar5.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Samsul Arifin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('admin.dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Report
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.dailysite') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Daily Site Reports</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.weeklysite') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Weekly Site Reports</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.dailysafety') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Daily Safety Reports</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.weeklysafety') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Weekly Safety Reports</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.salesreport') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Sales Reports</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.shareholder') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Shareholders Reports</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.shareholder') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Tenement Report</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.document') }}" class="nav-link">
              <i class="nav-icon far fa-file"></i>
              <p>
                Document
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.dailysite') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Executive Summary</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.weeklysite') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p><small>Mineral Resources Estimate</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.dailysafety') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p><small>Asset Technical Valuation</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.weeklysafety') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p><small>Technical Economical Model</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.salesreport') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Mine Model</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.shareholder') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Cost Model</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.shareholder') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Block Model</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.shareholder') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Port Visualization</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.shareholder') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Layout 3D</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.shareholder') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Buyer LOI & MOU</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.shareholder') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>KBK Audited Financials</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.shareholder') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p><small>OZINDO Audited Financials</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.shareholder') }}" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>KBK Constitution</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Design
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.quarry')}}" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Quarry 3D</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Hub 3D</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Port 3D</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.gallery') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.user') }}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    Copyright &copy; 2016-2024 <strong>Kaltara Batu Konstruksi</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ Asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ Asset('lte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ Asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ Asset('lte/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ Asset('lte/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ Asset('lte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ Asset('lte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ Asset('lte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ Asset('lte/plugins/moment/moment.min.js') }}"></script>
<script src="{{ Asset('lte/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ Asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ Asset('lte/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ Asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ Asset('lte/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ Asset('lte/dist/js/pages/dashboard.js') }}"></script>
<script language="JavaScript">
  $(document).ready(function() {
  var url = window.location;

// for sidebar menu entirely but not cover treeview
$('ul.nav-sidebar a').filter(function() {
    if (this.href) {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }
}).addClass('active');

// for the treeview
$('ul.nav-treeview a').filter(function() {
    if (this.href) {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }
}).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
  })

</script>
@yield('script')
</body>
</html>
