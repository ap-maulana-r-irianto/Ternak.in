@extends('layouts.template_admin')
@section('seluruhtransaksi', 'active')
@section('content')
  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Seluruh Transaksi</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Ternak</li>
                  <li class="breadcrumb-item">Data Transaksi</li>
                  <li class="breadcrumb-item active">Seluruh Transaksi</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container">

          <!-- Default box -->
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nomor Transaksi</th>
                <th scope="col">Jenis Transaksi</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <a href="" class="badge badge-success">DETAIL</a>
                </td>
              </tr>
            </tbody>
          </table>
      <!-- /.card -->
    </div>

    </section>
    <!-- /.content -->
  </div>
@endsection