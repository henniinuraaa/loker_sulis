<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengajuan</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container d-flex justify-content-center pt-3 mt-3">
        <div class="card" style="width: 70rem;">
            <div class="card-header text-center">

        <form action="/pengajuan/update/{{ $pengajuans->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Edit Pengajuan</p>

        <div class="mb-3">
            <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" value="{{ $pengajuans -> nama_lengkap}}">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="tempat_lahir" value="{{ $pengajuans -> tempat_lahir}}">
        </div>
        <div class="mb-3">
          <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="tgl_lahir" value="{{ $pengajuans -> tgl_lahir }}">
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="alamat"  value="{{ $pengajuans -> alamat}}">
    </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="email" value="{{ $pengajuans -> email}}">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" name="dokumen" id="dokumen" placeholder="dokumen" value="{{ $pengajuans -> dokumen}}">
      </div>
      <div class="mb-3">
        <input type="date" class="form-control" name="tanggal_pengajuan" id="tanggal_pengajuan" placeholder="Tanggal Pengajuan" value="{{ $pengajuans -> tanggal_pengajuan}}">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</body>
</html>
