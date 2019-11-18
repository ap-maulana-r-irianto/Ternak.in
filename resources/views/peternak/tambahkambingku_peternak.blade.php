@extends('layouts.template_peternak')
@section('tambahkambingku', 'active')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Kambingku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Ternak</li>
              <li class="breadcrumb-item">Data Kambingku</li>
              <li class="breadcrumb-item active">Tambah Kambingku</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container">
      <!-- Default box -->
      <form method="POST" action="{{url('/peternak/kambingku')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="inputName">ID Kambing</label>
          <input type="text" name="idkambing" class="form-control @error('idkambing') is-invalid @enderror" id="inputName" placeholder="ID Kambing" value="{{old('idkambing')}}">
          @error('idkambing')
            {{ $message }}
          @enderror
        </div>
        <div class="form-group">
          <label for="inputEmail4">Tanggal Lahir</label>
          <input type="date" name="tgllahir" class="form-control @error('tgllahir') is-invalid @enderror" id="inputEmail4" placeholder="No. HP" value="{{old('tgllahir')}}">
          @error('tgllahir')
            {{ $message }}
          @enderror
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputPassword4">Berat</label>
            <input type="number" name="berat" class="form-control @error('berat') is-invalid @enderror" id="inputPassword4" placeholder="Berat" value="{{old('berat')}}">
            @error('berat')
              {{ $message }}
            @enderror
          </div>
        <div class="form-group col-md-6">
          <label for="inputAddress2">Jenis Kelamin</label>
          <select name="jeniskelamin" id="inputAddress2" class="form-control @error('jeniskelamin') is-invalid @enderror" value="{{old('jeniskelamin')}}">
              <option selected disabled>--Pilih--</option>
              <option value="Jantan">Jantan</option>
              <option value="Betina">Betina</option>
            </select>
          @error('jeniskelamin')
            {{ $message }}
          @enderror
        </div>
        </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="harga">Harga</label>
              <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Harga" value="{{old('harga')}}">
              @error('harga')
                {{ $message }}
              @enderror
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Jenis Kambing</label>
            <input type="text" name="jeniskambing" class="form-control @error('jeniskambing') is-invalid @enderror" id="inputAddress" placeholder="Jenis Kambing" value="{{old('jeniskambing')}}">
            @error('jeniskambing')
              {{ $message }}
            @enderror
          </div>
          <input type="hidden" name="idpeternak" value="1">
          <div class="form-group">
            <label for="fotokambing">Foto Kambing</label>
            <input type="file" name="fotokambing" class="form-control-file @error('fotokambing') is-invalid @enderror" id="fotokambing" value="{{old('fotokambing')}}">
            @error('fotokambing')
              {{ $message }}
            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
      <!-- /.card -->
    </div>
    </section>
    <!-- /.content -->
  </div>
@endsection