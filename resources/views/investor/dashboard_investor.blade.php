@extends('layouts.template_investor')

@section('dashboard', 'active')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container">
      <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$kambing->count()}}<sup style="font-size: 20px">ekor</sup></h3>

                <p>Kambingku</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{url('/peternak/kambingku')}}" class="small-box-footer">Lihat Detail<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$peternakku->count()}}<sup style="font-size: 20px">orang</sup></h3>

                <p>Peternakku</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="" class="small-box-footer">Lihat Detail<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$peternak->count()}}<sup style="font-size: 20px">++</sup></h3>

                <p>Peternak</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="" class="small-box-footer">Lihat Detail<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$request->count()}}<sup style="font-size: 20px">++</sup></h3>

                <p>Request Jual</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="" class="small-box-footer">Lihat Detail<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

        <div class="jumbotron">
          <h1 class="display-4">Selamat Datang di <strong>TERNAK.IN</strong></h1>
          <p class="lead">Website yang menyediakan investasi kambing bagi para investor.</p>
          <hr class="my-4">
          <p>Seseorang akan menjadi orang yang lebih baik jika dalam melakukan pekerjaan selalu melakukan yang terbaik!!!</p>
          <a class="btn btn-primary btn-lg" href="{{url('/investor/profil')}}" role="button">Lihat Profil</a>
        </div>

      <!-- Default box -->
      <!-- <div class="card">
        <div class="card-header">
          <h3 class="card-title">Informasi Kambingku</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae similique pariatur ducimus eum culpa quam ea iusto laudantium maiores dolore excepturi, voluptas natus itaque repudiandae deleniti rerum aliquid eveniet inventore!
        </div>
        <-- /.card-body -->
        <!-- <div class="card-footer">
          Aksi
        </div> -->
        <!-- /.card-footer-->
      <!-- </div> -->
      <!-- /.card -->
    </div>

    </section>
    <!-- /.content -->
  </div>
@endsection