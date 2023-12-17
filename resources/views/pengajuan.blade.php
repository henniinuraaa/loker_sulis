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
    {{-- <div class="container d-flex justify-content-center pt-3 mt-3">
        <div class="card" style="width: 30rem;">
            <div class="card-header text-center"> --}}
                
    <div class="container d-flex justify-content-center pt-3 mt-3">
        <div  style="width: 50rem;">
            <div class="card-header text-center">


    <form action="pengajuan/post" method="post" enctype="multipart/form-data">
        @csrf
        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-6 mt-6">Pengajuan</p>

        <div class="mb-3">
            <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" required>
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email"  autofocus required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" placeholder="Nama Perusahaan" required>
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="No Handphone" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir"  required>
        </div>
        <div class="mb-3">
          <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir"  required>
      </div>
      <div class="mb-3">
        <input type="number" class="form-control" name="nilai_rata" id="nilai_rata" placeholder="Nilai Rata-rata Ijazah"  required>
    </div>
        <div class="mb-3">
          <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan"  autofocus required>
      </div>  
      <div class="mb-3">
        <input type="text" class="form-control" name="jk" id="jk" placeholder="Jenis kelamin"  autofocus required>
    </div>
      <div class="mb-3">
        <input type="date" class="form-control" name="thn_lulus" id="thn_lulus" placeholder="Tahun Lulus"  autofocus required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="Tingggi Badan"  autofocus required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="berat_badan" id="berat_badan" placeholder="Berat Badan"  autofocus required>
    </div>
    <button type="submit" class="btn btn-primary ">Simpan</button>

</div>
</div>
</div>

    </form>

</body>
</html>
