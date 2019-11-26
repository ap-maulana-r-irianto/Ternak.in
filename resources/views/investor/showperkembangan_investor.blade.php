@extends('layouts.template_investor')

@section('content')
  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Perkembangan Kambing Peternakku</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Ternak</li>
                  <li class="breadcrumb-item">Data Kambing Peternakku</li>
                  <li class="breadcrumb-item">Seluruh Kambing Peternakku</li>
                  <li class="breadcrumb-item active">Perkembangan Kambing Peternakku</li>
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
  
          <table id="tabel1" class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">ID Kambing</th>
                <th scope="col">Berat (/kg)</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Kondisi</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>
              @foreach($perkembangan as $k)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$k->idkambing}}</td>
                <td>{{$k->berat}}</td>
                <td>{{$k->tanggal}}</td>
                <td>{{$k->kondisi}}</td>
                <td>{{$k->keterangan}}</td>
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