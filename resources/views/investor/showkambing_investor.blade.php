@extends('layouts.template_investor')
@section('content')
  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Seluruh Peternak</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Ternak</li>
                  <li class="breadcrumb-item">Data Peternak</li>
                  <li class="breadcrumb-item">Seluruh Peternak</li>
                  <li class="breadcrumb-item active">Data Kambing Peternak</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container">

          <!-- Default box -->

          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif
          
          @if (is_null($kambing))

          @else
          <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">ID Kambing</th>
                <th scope="col">Jenis Kambing</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Berat</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Harga</th>
                <th scope="col">Foto Kambing</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($kambing as $kambing)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$kambing->idkambing}}</td>
                <td>{{$kambing->jeniskambing}}</td>
                <td>{{$kambing->tgllahir}}</td>
                <td>{{$kambing->berat}}</td>
                <td>{{$kambing->jeniskelamin}}</td>
                <td>{{$kambing->harga}}</td>
                <td><a href="" class="btn btn-primary">Lihat</a></td>
                <td><a href="" class="btn btn-danger">Beli</a></td>
                <td>
              </tr>
              @endforeach
            </tbody>
          </table>
          @endif
      <!-- /.card -->
    </div>

    </section>
    <!-- /.content -->
  </div>
@endsection