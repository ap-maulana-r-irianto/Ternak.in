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
              <li class="breadcrumb-item"><a class="text-dark" href="{{url('/admin/peternak')}}">Seluruh Peternak</a></li>
              <li class="breadcrumb-item">Detail Peternak</li>
              <li class="breadcrumb-item active">Ubah Peternak</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container">

      <!-- Default box -->
      <form method="post" action="{{url('/admin/peternak/'.$peternak->id)}}">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="inputName">Nama</label>
          <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="inputName" value="{{$peternak->nama}}">
          @error('nama')
            {{ $message }}
          @enderror
        </div>
        <div class="form-group">
          <label for="inputAddress">Alamat</label>
          <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="inputAddress" value="{{$peternak->alamat}}">
          @error('alamat')
            {{ $message }}
          @enderror
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">No. HP</label>
            <input type="number" name="nohp" class="form-control @error('nohp') is-invalid @enderror" id="inputEmail4" value="{{$peternak->nohp}}">
            @error('nohp')
              {{ $message }}
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">No. KTP</label>
            <input type="number" name="noktp" class="form-control @error('noktp') is-invalid @enderror" id="inputPassword4" value="{{$peternak->noktp}}">
            @error('noktp')
              {{ $message }}
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Alamat Peternakan</label>
          <input type="text" name="alamatpeternakan" class="form-control @error('alamatpeternakan') is-invalid @enderror" id="inputAddress2" value="{{$peternak->alamatpeternakan}}">
          @error('alamatpeternakan')
            {{ $message }}
          @enderror @error('username') is-invalid @enderror
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" value="{{$peternak->username}}">
            @error('username')
              {{ $message }}
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" value="{{$peternak->password}}">
            @error('password')
              {{ $message }}
            @enderror
          </div>
          </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$peternak->email}}">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              @error('email')
                {{ $message }}
              @enderror
            </div>
        <button type="submit" name="simpan" class="btn btn-primary">SIMPAN</button>
      </form>
      <!-- /.card -->
    </div>

    </section>
    <!-- /.content -->
  </div>
@endsection