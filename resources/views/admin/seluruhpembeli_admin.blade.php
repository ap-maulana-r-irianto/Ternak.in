@extends('layouts.template_admin')
@section('seluruhpembeli', 'active')
@section('content')
  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Seluruh Pembeli</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Ternak</li>
                  <li class="breadcrumb-item">Data Pembeli</li>
                  <li class="breadcrumb-item active">Seluruh Pembeli</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container">

          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif

          <!-- Default box -->
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">No. KTP</th>
                <th scope="col">Username</th>
                <th scope="col">Aksi</th>
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