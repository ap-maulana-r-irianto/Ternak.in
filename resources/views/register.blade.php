<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TERNAK.IN | Register</title>
  <link rel="icon" type="image/png" href="{{asset('dist/img/sheep.png')}}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="{{url('/')}}"><b>TERNAK.</b>IN</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="register-box-msg">Daftar Akun {{$user}} Baru</p>
      
      @if ($user == 'peternak')
      <form action="{{url('/store/peternak')}}" method="post">
      @elseif ($user == 'investor')
      <form action="{{url('/store/investor')}}" method="post">
      @else
      <form action="{{url('/store/pembeli')}}" method="post">
      @endif
        @csrf
        <div class="form-group">
          <label for="inputName">Nama</label>
          <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="inputName" placeholder="Nama" value="{{old('nama')}}">
          @error('nama')
            {{ $message }}
          @enderror
        </div>
        <div class="form-group">
          <label for="inputAddress">Alamat</label>
          <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="inputAddress" placeholder="Alamat" value="{{old('alamat')}}">
          @error('alamat')
            {{ $message }}
          @enderror
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">No. HP</label>
            <input type="number" name="nohp" class="form-control @error('nohp') is-invalid @enderror" id="inputEmail4" placeholder="No. HP" value="{{old('nohp')}}">
            @error('nohp')
              {{ $message }}
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">No. KTP</label>
            <input type="number" name="noktp" class="form-control @error('noktp') is-invalid @enderror" id="inputPassword4" placeholder="No. KTP" value="{{old('noktp')}}">
            @error('noktp')
              {{ $message }}
            @enderror
          </div>
        </div>
        @if ($user == 'peternak')
        <div class="form-group">
          <label for="inputAddress">Alamat Peternakan</label>
          <input type="text" name="alamatpeternakan" class="form-control @error('alamatpeternakan') is-invalid @enderror" id="inputAddress" placeholder="Alamat Peternakan" value="{{old('alamatpeternakan')}}">
          @error('alamat')
            {{ $message }}
          @enderror
        </div>
        @endif
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{old('username')}}">
            @error('username')
              {{ $message }}
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" value="{{old('password')}}">
            @error('password')
              {{ $message }}
            @enderror
          </div>
          </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{old('email')}}">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              @error('email')
                {{ $message }}
              @enderror
            </div>
            <div class="form-group">
              <label for="scanktp">Scan KTP</label>
              <input type="file" name="scanktp" class="form-control-file @error('scanktp') is-invalid @enderror" id="scanktp" value="{{old('scanktp')}}">
              @error('scanktp')
                {{ $message }}
              @enderror
          </div>
          <!-- /.col -->
          <div class="row">
          <div class="col-8">
            <!-- <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Ingat Saya
              </label>
            </div> -->
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
          </div>
          <!-- /.col -->
        </div>
          <!-- /.col -->
        </div>
      </form>


      <a href="{{url('login')}}" class="text-center">Saya sudah punya akun</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
