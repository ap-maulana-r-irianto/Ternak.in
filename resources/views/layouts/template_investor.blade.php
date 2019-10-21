<!DOCTYPE html>
<html><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TERNAK.IN | Investor</title>
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

    

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{asset('dist/img/sheep.png')}}"
           alt="Ternak.in Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">INVESTOR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('scanktpinvestor/2015-11-22 16.33.55-1-2.JPG')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">Ervian Akbar</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{url('/investor/dashboard')}}" class="nav-link  @yield('dashboard')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          <li class="nav-item">
            <a href="{{url('/investor/profil')}}" class="nav-link @yield('profil')">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          <li class="nav-header">TERNAK</li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Peternak
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=".{{url('/investor/caripeternak')}}" class="nav-link @yield('caripeternak')">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Cari Peternak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/investor/tambahpeternak')}}" class="nav-link @yield('dashboard')">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Tambah Peternak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/investor/seluruhpeternak')}}" class="nav-link @yield('dashboard')">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Seluruh Peternak</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Peternakku
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/investor/peternakku')}}" class="nav-link @yield('caripeternakku')">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Cari Peternakku</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/investor/peternakku')}}" class="nav-link @yield('seluruhpeternakku')">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Seluruh Peternakku</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Request Jual
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/investor/requestjual')}}" class="nav-link @yield('carirequestjual')">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Cari Request Jual</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/investor/requestjual')}}" class="nav-link @yield('tambahrequestjual')">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Tambah Request Jual</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/investor/requestjual')}}" class="nav-link @yield('seluruhrequestjual')">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Seluruh Request Jual</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Perm. Investasi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/investor/perminvestasi')}}" class="nav-link @yield('cariperminvestasi')">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Cari Perm. Investasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/investor/perminvestasi')}}" class="nav-link @yield('seluruhperminvestasi')">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Seluruh Perm. Investasi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{url('/investor/keranjang')}}" class="nav-link @yield('keranjang')">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Keranjang Ternak
              </p>
            </a>
          </li>
          </li>
          <li class="nav-header">Riwayat</li>
          <li class="nav-item">
            <a href="{{url('/investor/riwayattransaksi')}}" class="nav-link @yield('riwayat')">
              <i class="nav-icon fas fa-file"></i>
              <p>Riwayat Transaksi</p>
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
</body>
</html>
