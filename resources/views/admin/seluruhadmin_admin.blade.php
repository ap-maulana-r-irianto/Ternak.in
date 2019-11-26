@extends('layouts.template_admin')
@section('seluruhadmin', 'active')
@section('content')
  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Seluruh Admin</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Ternak</li>
                  <li class="breadcrumb-item">Data Admin</li>
                  <li class="breadcrumb-item active">Seluruh Admin</li>
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
                <th scope="col">Nama</th>
                <th scope="col">No. KTP</th>
                <th scope="col">Username</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($admin as $ptrnk)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$ptrnk->nama}}</td>
                <td>{{$ptrnk->noktp}}</td>
                <td>{{$ptrnk->username}}</td>
                <td>
                  <a href="{{url('/admin/admin/'.$ptrnk->id)}}" class="btn btn-success">DETAIL</a>
                    <form class="d-inline-block" action="{{url('/admin/admin/'.$ptrnk->id)}}" method="POST">
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