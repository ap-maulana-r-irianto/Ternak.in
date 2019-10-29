@extends('layouts.template_investor')

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
                       src="{{asset('scanktpinvestor/'.$investor->scanktp)}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$investor->nama}}</h3>

                <p class="text-muted text-center">Investor</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Alamat</b> <a class="float-right">{{$investor->alamat}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>No. HP</b> <a class="float-right">{{$investor->nohp}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>No. KTP</b> <a class="float-right">{{$investor->noktp}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Username</b> <a class="float-right">{{$investor->username}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{$investor->email}}</a>
                  </li>
                </ul>

                <a href="{{url('investor/profil/'.$investor->id.'/edit')}}" class="btn btn-primary btn-block"><b>Edit</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
      
      <!-- /.card -->

      
    </section>
    <!-- /.content -->

    


  </div>
@endsection