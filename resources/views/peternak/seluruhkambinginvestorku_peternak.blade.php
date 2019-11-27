@extends('layouts.template_peternak')
@section('content')
  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Seluruh Kambing Investorku</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">Ternak</li>
                  <li class="breadcrumb-item">Data Investorku</li>
                  <li class="breadcrumb-item">Seluruh Investorku</li>
                  <li class="breadcrumb-item active">Data Kambing Investorku</li>
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
          
          @if (is_null($kambing))

          @else
          <table id="tabel1" class="table table-hover">
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
                <td><a href="{{asset('fotokambing/'.$kambing->fotokambing)}}" class="btn btn-secondary"><i class="fa fa-file-image-o"></i>LIHAT</a></td>
                <td>
                  @if($kambing->statuspersetujuan1 == 1)
                          
                  @else
                    <!-- Button trigger modal -->
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                    JUAL
                  </button>
                  <br>
                  <br>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Pengajuan Penjualan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        
                          <form action="{{url('peternak/jual/'.$kambing->id)}}" method="POST">
                            <div class="modal-body">
                          @csrf
                          @method('put')

                            <input type="hidden" value="{{Auth::user()->id}}" name="id" id="id">
                            <div class="form-group">
                              <label for="harga">Harga Jual</label>
                              <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Rp. " value="{{old('harga')}}">
                              @error('harga')
                                {{ $message }}
                              @enderror
                            </div>
                            <div class="modal-footer">
                          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button> -->
                          <button class="btn btn-primary">Ajukan</button>
                          </div>
                        </div>
                          </form>
                          <br>
                        </div>
                      </div>
                    </div>
                  
                  @endif
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          @endif
      <!-- /.card -->
    </div>

    </section>
    <!-- /.content -->
  </div>
@endsection