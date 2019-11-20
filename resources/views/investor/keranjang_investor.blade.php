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
          
<!--           <form action="{{url('investor/transaksi/1')}}" method="POST">
          @csrf
          <button type="submit" class="btn btn-primary btn-lg" onclick="confirm('Apakah Anda Yakin?')">Checkout</button>
          </form>
          <br>
 -->
                    <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Checkout
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{url('investor/transaksi/create')}}" method="POST">
                  @csrf
                    <div class="form-group">
                      <label for="metode">Metode</label>
                      <input type="text" name="metode" class="form-control @error('metode') is-invalid @enderror" id="metode" placeholder="ID Kambing" value="{{old('metode')}}">
                      @error('metode')
                        {{ $message }}
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="bukti">Bukti</label>
                      <input type="text" name="bukti" class="form-control @error('bukti') is-invalid @enderror" id="bukti" placeholder="ID Kambing" value="{{old('bukti')}}">
                      @error('bukti')
                        {{ $message }}
                      @enderror
                    </div>
                  </form>
                  <br>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>

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
                <td><a href="" class="btn btn-secondary">Lihat</a></td>
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