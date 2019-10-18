@extends('layouts.template_peternak')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Kambingku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Ternak</li>
              <li class="breadcrumb-item">Data Kambingku</li>
              <li class="breadcrumb-item"><a class="text-dark" href="{{url('/peternak/kambingku')}}">Seluruh Kambingku</a></li>
              <li class="breadcrumb-item active">Detail Kambingku</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">

      <!-- Default box -->
      <form method="get" action="{{url('/peternak/kambingku/'.$kambingku->id.'/edit')}}">
        <div class="form-group">
          <label for="inputName">ID Kambing</label>
          <input type="text" class="form-control" id="inputName" placeholder="{{$kambingku->idkambing}}" readonly>
        </div>
        <div class="form-group">
          <label for="inputAddress">Jenis Kambing</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="{{$kambingku->jeniskambing}}" readonly>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Tanggal Lahir</label>
            <input type="number" class="form-control" id="inputEmail4" placeholder="{{$kambingku->tgllahir}}" readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Berat</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="{{$kambingku->berat}}" readonly>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="username">Jenis Kelamin</label>
            <input type="text" class="form-control" id="username" placeholder="{{$kambingku->jeniskelamin}}" readonly>
          </div>
            <div class="form-group col-md-6">
              <label for="password">Harga</label>
              <input type="password" class="form-control" id="password" placeholder="{{$kambingku->harga}}" readonly>
            </div>
          </div>
        <button type="submit" class="btn btn-success">UBAH</button>
      </form>
      <!-- /.card -->
    </div>

    </section>
    <!-- /.content -->
  </div>
@endsection