@extends('layouts.template_admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Peternak</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Ternak</li>
              <li class="breadcrumb-item">Data Peternak</li>
              <li class="breadcrumb-item"><a class="text-dark" href="{{url('/admin/peternak')}}">Seluruh Peternak</a></li>
              <li class="breadcrumb-item active">Detail Peternak</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">

      <!-- Default box -->
      <form method="get" action="{{url('/admin/peternak/'.$peternak->id.'/edit')}}">
        <div class="form-group">
          <label for="inputName">Nama</label>
          <input type="text" class="form-control" id="inputName" placeholder="{{$peternak->nama}}" readonly>
        </div>
        <div class="form-group">
          <label for="inputAddress">Alamat</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="{{$peternak->alamat}}" readonly>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">No. HP</label>
            <input type="number" class="form-control" id="inputEmail4" placeholder="{{$peternak->nohp}}" readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">No. KTP</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="{{$peternak->noktp}}" readonly>
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Alamat Peternakan</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="{{$peternak->alamatpeternakan}}" readonly>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="{{$peternak->username}}" readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="{{$peternak->password}}" readonly>
          </div>
          </div>
            <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$peternak->email}}" readonly>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-success">UBAH</button>
      </form>
      <!-- /.card -->
    </div>

    </section>
    <!-- /.content -->
  </div>
@endsection