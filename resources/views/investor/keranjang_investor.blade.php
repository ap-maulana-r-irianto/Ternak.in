@extends('layouts.template_investor')
@section('keranjang', 'active')
@section('content')
  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Keranjang Ternak</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Ternak</li>
                  <li class="breadcrumb-item">Data Peternak</li>
                  <li class="breadcrumb-item active">Keranjang Ternak</li>
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
          
          <a href="{{url('peternak/tambah/'.$kambing->id)}}" class="btn btn-primary btn-lg">Checkout</a>
          <br><br>

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
                <td>
                  <form action="{{url('/investor/keranjang/'.$kambing->id)}}" method="POST">
                      @csrf
                      @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="confirm('Apakah Anda Yakin?')">HAPUS</button>
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