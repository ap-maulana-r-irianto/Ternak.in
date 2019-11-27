@extends('layouts.template_investor')
@section('seluruhpeternakku', 'active')
@section('content')
  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Seluruh Peternakku</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Ternak</li>
                  <li class="breadcrumb-item">Data Peternak</li>
                  <li class="breadcrumb-item active">Seluruh Peternakku</li>
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
              @foreach($kambing as $ptrnk)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$ptrnk->nama}}</td>
                <td><a href="{{asset('scanktppeternak/'.$ptrnk->scanktp)}}" class="btn btn-secondary"><i class="fa fa-file-image-o"></i>LIHAT</a></td>
                <td>{{$ptrnk->nohp}}</td>
                <td><a href="{{url('/investor/kambingku/'.$ptrnk->id)}}" class="btn btn-danger">Lihat</a></td>
                
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