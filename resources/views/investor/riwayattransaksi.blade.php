@extends('layouts.template_investor')
@section('riwayat', 'active')
@section('content')
  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Riwayat Transaksi<h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item active">Riwayat Transaksi</li>
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
                <th scope="col">Foto</th>
                <th scope="col">Peternak</th>
                <th scope="col">Harga Jual</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($kambing as $k)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$k->idkambing}}</td>
                <td><a href="{{asset('fotokambing/'.$k->fotokambing)}}" class="btn btn-secondary"><i class="fa fa-file-image-o"></i>LIHAT</a>

                </td>
                <td>{{$k->nama}}</td>
                <td>{{$k->jual}}</td>
                <td>
                  <a href="" class="btn btn-primary">TELAH TERJUAL</a>
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