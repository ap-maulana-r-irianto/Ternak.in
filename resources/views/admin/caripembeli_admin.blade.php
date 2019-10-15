@extends('layouts.template_admin')
@section('caripembeli', 'active')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cari Pembeli</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Ternak</li>
              <li class="breadcrumb-item">Data Pembeli</li>
              <li class="breadcrumb-item active">Cari Pembeli</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">

      <table id="tabel1" class="table table-hover">
            <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>No. KTP</th>
              <th>Username</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
              @foreach($pembeli as $pmbl)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$pmbl->nama}}</td>
                <td>{{$pmbl->noktp}}</td>
                <td>{{$pmbl->username}}</td>
                <td>
                  <a href="{{url('/admin/pembeli/'.$pmbl->id)}}" class="badge badge-success">DETAIL</a>
                    <form class="d-inline-block" action="{{url('/admin/pembeli/'.$pmbl->id)}}" method="POST">
                    @csrf
                    @method('delete')
                      <button type="submit" class="badge badge-danger" onclick="confirm('Apakah Anda Yakin?')">HAPUS</button>
                    </form>
                </td>
              </tr>
              @endforeach
              </tbody>
            </table>
      <!-- /.card -->
    </div>

    </section>
    <!-- /.content -->
  </div>
@endsection