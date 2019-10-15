@extends('layouts.template_admin')
@section('caripeternak', 'active')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cari Peternak</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Ternak</li>
              <li class="breadcrumb-item">Data Ternak</li>
              <li class="breadcrumb-item active">Cari Peternak</li>
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
              @foreach($peternak as $ptrnk)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$ptrnk->nama}}</td>
                <td>{{$ptrnk->noktp}}</td>
                <td>{{$ptrnk->username}}</td>
                <td>
                  <a href="{{url('/admin/peternak/'.$ptrnk->id)}}" class="badge badge-success">DETAIL</a>
                    <form class="d-inline-block" action="{{url('/admin/peternak/'.$ptrnk->id)}}" method="POST">
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