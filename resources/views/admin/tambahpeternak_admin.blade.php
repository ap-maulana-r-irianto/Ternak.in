@extends('layouts.template_admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Peternak</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Ternak</li>
              <li class="breadcrumb-item">Data Peternak</li>
              <li class="breadcrumb-item active">Tambah Peternak</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <form method="POST" action="{{url('/admin/storepeternak')}}">
        @csrf
        <div class="form-group">
          <label for="inputName">Nama</label>
          <input type="text" name="nama" class="form-control" id="inputName" placeholder="Nama" required>
        </div>
        <div class="form-group">
          <label for="inputAddress">Alamat</label>
          <input type="text" name="alamat" class="form-control" id="inputAddress" placeholder="Alamat" required>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">No. HP</label>
            <input type="number" name="nohp" class="form-control" id="inputEmail4" placeholder="No. HP" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">No. KTP</label>
            <input type="number" name="noktp" class="form-control" id="inputPassword4" placeholder="No. KTP" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Alamat Peternakan</label>
          <input type="text" name="alamatpeternakan" class="form-control" id="inputAddress2" placeholder="Alamat Peternakan" required>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
          </div>
          <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection