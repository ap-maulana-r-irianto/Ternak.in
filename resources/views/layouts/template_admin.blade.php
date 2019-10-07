<!DOCTYPE html>
<html><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TERNAK.IN | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="{{asset('dist/img/sheep.png')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-black navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Cari" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{asset('dist/img/sheep.png')}}"
           alt="Ternak.in Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">TERNAK.IN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/avatar3.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Nur Hidayah Monic</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{url('/admin/dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Grafik
              </p>
            </a>
          </li>
          <li class="nav-header">TERNAK</li>
          <li class="nav-item has-treeview menu-open">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Peternak
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/caripeternak')}}" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Cari Peternak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/tambahpeternak')}}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Tambah Peternak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/seluruhpeternak')}}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Seluruh Peternak</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Investor
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/cariinvestor')}}" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Cari Investor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/tambahinvestor')}}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Tambah Investor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/seluruhinvestor')}}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Seluruh Investor</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Pembeli
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/caripembeli')}}" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Cari Pembeli</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/tambahpembeli')}}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Tambah Pembeli</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/seluruhpembeli')}}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Seluruh Pembeli</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Transaksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/caritransaksi')}}" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Cari Transaksi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/seluruhtransaksi')}}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Seluruh Transaksi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
              </p>
            </a>
          </li>
          </li>
          <li class="nav-header">Rekap Data</li>
          <li class="nav-item">
            <a href="{{url('/admin/datatransaksiinvestor')}}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Data Transaksi Investor</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/admin/datatransaksipembeli')}}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Data Transaksi Pembeli </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  @yield('content')
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2019 <a href="#">MRafaELIR</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#tabel1").DataTable();
  });
</script>
</body>
</html>
