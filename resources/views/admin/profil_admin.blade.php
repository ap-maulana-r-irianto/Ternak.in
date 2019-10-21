@extends('layouts.template_admin')

@section('profil', 'active')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Profil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="container">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Nur Hidayah Monicawati</h3>

                <p class="text-muted text-center">Admin</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Alamat</b> <a class="float-right">Jember</a>
                  </li>
                  <li class="list-group-item">
                    <b>No. HP</b> <a class="float-right">08123456789</a>
                  </li>
                  <li class="list-group-item">
                    <b>No. KTP</b> <a class="float-right">1209346587091265</a>
                  </li>
                  <li class="list-group-item">
                    <b>Username</b> <a class="float-right">monik</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">monik@gmail.com</a>
                  </li>
                </ul>

                <a href="{{url('admin/profil/'.$admin->id.'/edit')}}" class="btn btn-primary btn-block"><b>Edit</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tentang Saya</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  Information System, Computer Science in Jember University
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Jember, Jawa Timur</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">Administrator</span>
                  <span class="tag tag-success">Manage</span>
                  <span class="tag tag-info">Family</span>
                  <span class="tag tag-warning">Responsible</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Satu-satunya cara untuk melakukan pekerjaan yang hebat adalah dengan mencintai apa yang kamu lakukan.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
      
      <!-- /.card -->

      
    </section>
    <!-- /.content -->

    


  </div>
@endsection