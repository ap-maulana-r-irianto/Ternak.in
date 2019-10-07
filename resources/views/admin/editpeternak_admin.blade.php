@extends('layouts.template_admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ubah Peternak</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Ternak</li>
              <li class="breadcrumb-item">Data Peternak</li>
              <li class="breadcrumb-item"><a class="text-dark" href="{{url('/admin/seluruhpeternak')}}">Seluruh Peternak</a></li>
              <li class="breadcrumb-item">Detail Peternak</li>
              <li class="breadcrumb-item active">Ubah Peternak</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <form method="post" action="{{url('/admin/updatepeternak/'.$peternak->id)}}">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="inputName">Nama</label>
          <input type="text" name="nama" class="form-control" id="inputName" value="{{$peternak->nama}}" required>
        </div>
        <div class="form-group">
          <label for="inputAddress">Alamat</label>
          <input type="text" name="alamat" class="form-control" id="inputAddress" value="{{$peternak->alamat}}" required>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">No. HP</label>
            <input type="number" name="nohp" class="form-control" id="inputEmail4" value="{{$peternak->nohp}}" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">No. KTP</label>
            <input type="password" name="noktp" class="form-control" id="inputPassword4" value="{{$peternak->noktp}}" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Alamat Peternakan</label>
          <input type="text" name="alamatpeternakan" class="form-control" id="inputAddress2" value="{{$peternak->alamatpeternakan}}" required>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" value="{{$peternak->username}}" required>
          </div>
          <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" value="{{$peternak->password}}" required>
          </div>
          </div>
            <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$peternak->email}}" required>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">SIMPAN</button>
      </form>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection