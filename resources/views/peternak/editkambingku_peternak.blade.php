@extends('layouts.template_peternak')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ubah Kambingku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Ternak</li>
              <li class="breadcrumb-item">Data Kambingku</li>
              <li class="breadcrumb-item"><a class="text-dark" href="{{url('/peternak/kambingku')}}">Seluruh kambingku</a></li>
              <li class="breadcrumb-item">Detail kambingku</li>
              <li class="breadcrumb-item active">Ubah kambingku</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container">

      <!-- Default box -->
      <form method="post" action="{{url('/admin/peternak/'.$peternak->id)}}">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="inputName">ID Kambing</label>
          <input type="text" name="idkambing" class="form-control @error('idkambing') is-invalid @enderror" id="inputName" placeholder="idkambing" value="{{$kambing->idkambing}}">
          @error('idkambing')
            {{ $message }}
          @enderror
        </div>
        <div class="form-group">
          <label for="inputAddress">Jenis Kambing</label>
          <input type="text" name="jeniskambing" class="form-control @error('jeniskambing') is-invalid @enderror" id="inputAddress" placeholder="jeniskambing" value="{{$kambing->jeniskambing}}">
          @error('jeniskambing')
            {{ $message }}
          @enderror
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Tanggal Lahir</label>
            <input type="date" name="tgllahir" class="form-control @error('tgllahir') is-invalid @enderror" id="inputEmail4" placeholder="No. HP" value="{{$kambing->tgllahir}}">
            @error('tgllahir')
              {{ $message }}
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Berat</label>
            <input type="number" name="berat" class="form-control @error('berat') is-invalid @enderror" id="inputPassword4" placeholder="No. KTP" value="{{$kambing->berat}}">
            @error('berat')
              {{ $message }}
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Jenis Kelamin</label>
          <select name="jeniskelamin" id="inputAddress2" class="form-control @error('jeniskelamin') is-invalid @enderror">
              <option value="{{$kambing->jeniskelamin}}" selected>{{$kambing->jeniskelamin}}</option>
              <option value="lakilaki">Laki-laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          @error('jeniskelamin')
            {{ $message }}
          @enderror
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="harga">Harga</label>
            <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="harga" value="{{$kambing->harga}}">
            @error('harga')
              {{ $message }}
            @enderror
          </div>
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">SIMPAN</button>
      </form>
      <!-- /.card -->
    </div>

    </section>
    <!-- /.content -->
  </div>
@endsection