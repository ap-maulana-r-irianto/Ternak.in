@extends('layouts.template_peternak')
@section('carikambingku', 'active')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cari Kambingku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Ternak</li>
              <li class="breadcrumb-item">Data Ternak</li>
              <li class="breadcrumb-item active">Cari Kambingku</li>
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
              <th scope="col">No</th>
                <th scope="col">ID Kambing</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Berat</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Harga</th>
                <th scope="col">Jenis Kambing</th>
                <th scope="col">Peternak</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
              @foreach($kambing as $k)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$k->idkambing}}</td>
                <td>{{$k->tgllahir}}</td>
                <td>{{$k->berat}}</td>
                <td>{{$k->jeniskelamin}}</td>
                <td>{{$k->harga}}</td>
                <td>{{$k->jeniskambing}}</td>
                <td>{{$k->idpeternak}}</td>
                <td>{{$k->fotokambing}}</td>
                <td>
                  <a href="{{url('/peternak/kambingku/'.$k->id.'/edit')}}" class="badge badge-success">UBAH</a>
                    <form class="d-inline-block" action="{{url('/peternak/kambingku/'.$k->id)}}" method="POST">
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