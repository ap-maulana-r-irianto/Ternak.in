@extends('layouts.template_investor')
@section('seluruhrequestjual', 'active')
@section('content')
  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Seluruh Request Jual</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Ternak</li>
                  <li class="breadcrumb-item">Data Request Jual</li>
                  <li class="breadcrumb-item active">Seluruh Request Jual</li>
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
                  <a href="{{url('/investor/requestjual/'.$k->id)}}" class="btn btn-primary" onclick="confirm('Apakah Anda Yakin?')">SETUJU</a>
                  <form class="d-inline-block" action="{{url('/investor/requestjual/'.$k->id)}}" method="POST">
                      @csrf
                      @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="confirm('Apakah Anda Yakin?')">TOLAK</button>
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