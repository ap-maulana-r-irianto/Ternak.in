@extends('layouts.template_peternak')

@section('content')
  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Seluruh Kambingku</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Ternak</li>
                  <li class="breadcrumb-item">Data Kambingku</li>
                  <li class="breadcrumb-item active">Seluruh Kambingku</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">ID Kambing</th>
                <th scope="col">Umur</th>
                <th scope="col">Berat</th>
                <th scope="col">Investor</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <a href="" class="badge badge-primary">UBAH</a>
                  <a href="" class="badge badge-danger">HAPUS</a>
                </td>
              </tr>
            </tbody>
          </table>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection