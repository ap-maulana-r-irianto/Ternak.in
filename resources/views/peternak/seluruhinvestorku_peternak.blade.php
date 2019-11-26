@extends('layouts.template_peternak')
@section('seluruhinvestorku', 'active')
@section('content')
  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Seluruh Investorku</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Ternak</li>
                  <li class="breadcrumb-item">Data Investorku</li>
                  <li class="breadcrumb-item active">Seluruh Investorku</li>
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
                <th scope="col">Scan KTP</th>
                <th scope="col">No. HP</th>
                <th scope="col">Kambing</th>
              </tr>
            </thead>
            <tbody>
              @foreach($investor as $inv)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$inv->nama}}</td>
                <td><a href="" class="btn btn-primary">Lihat</a></td>
                <td>{{$inv->nohp}}</td>
                <td><a href="{{url('/peternak/investorku/'.$inv->id)}}" class="btn btn-danger">Lihat</a></td>
                
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