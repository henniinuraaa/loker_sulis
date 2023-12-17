<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posting</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container d-flex justify-content-center pt-3 mt-3">
        <div class="card" style="width: 30rem;">
            <div class="card-header text-center">

    <form action="posting/post" method="post" enctype="multipart/form-data">
        @csrf
        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Postingan</p>

        <div class="mb-3">
            <input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" placeholder="Nama Perusahaan" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="bidang_usaha" id="bidang_usaha" placeholder="bidang usaha"  required>
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" name="lowongan" id="lowongan" placeholder="Lowongan"  required>
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="lokasi"  required>
    </div>
        <div class="mb-3">
          <input type="date" class="form-control" name="ttl_p" id="ttl_p" placeholder="Tanggal posting"  autofocus required>
      </div>
      <div class="mb-3">
        <input type="date" class="form-control" name="ttl_tp" id="ttl_tp" placeholder="Tanggal tenggat"  autofocus required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi"  autofocus required>
    </div>
        <div class="mb-3">
            <input type="file" class="form-control" name="foto" id="foto" placeholder="foto"                                                                      autofocus required>
        </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>
