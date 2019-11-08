@extends('layouts.template_peternak')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Perkembangan Kambingku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Ternak</li>
              <li class="breadcrumb-item">Data Kambingku</li>
              <li class="breadcrumb-item">Seluruh Kambingku</li>
              <li class="breadcrumb-item">Perkembangan Kambingku</li>
              <li class="breadcrumb-item active">Tambah Perkembangan Kambingku</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container">
      <!-- Default box -->
      <form method="POST" action="{{url('/peternak/perkembangan')}}">
        @csrf
        <input type="hidden" name="idkambing" value="{{$kambing->id}}">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputPassword4">Berat</label>
            <input type="number" name="berat" class="form-control @error('berat') is-invalid @enderror" id="inputPassword4" placeholder="berat" value="{{old('berat')}}">
            @error('berat')
              {{ $message }}
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Tanggal</label>
            <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" id="inputEmail4" placeholder="tanggal" value="{{old('tanggal')}}">
            @error('tanggal')
              {{ $message }}
            @enderror
          </div>
          </div>
            <div class="form-group">
              <label for="kondisi">Kondisi</label>
              <select name="kondisi" class="form-control @error('kondisi') is-invalid @enderror" id="kondisi" value="{{old('kondisi')}}">
                <option value="Baik" selected>Baik</option>
                <option value="Tidak Baik">Tidak Baik</option>
              </select>
              @error('kondisi')
                {{ $message }}
              @enderror
            </div>
          <div class="form-group">
            <label for="inputAddress">Keterangan</label>
            <input type="textarea" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" id="inputAddress" placeholder="keterangan" value="{{old('keterangan')}}">
            @error('keterangan')
              {{ $message }}
            @enderror
          </div>
          
        <button type="submit" class="btn btn-primary">TAMBAH</button>
      </form>
      <!-- /.card -->
    </div>
    </section>
    <!-- /.content -->
  </div>
@endsection