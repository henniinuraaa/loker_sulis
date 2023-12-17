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
        <div class="card" style="width: 70rem;">
            <div class="card-header text-center">

        <form action="{{ url('contact/update/'.$contacts -> id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Edit Contact</p>

        <div class="mb-3">
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama " value="{{ $contacts -> nama}}" required>
        </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="pesan" id="pesan" placeholder="Pesan" value="{{ $contacts -> pesan}}" required>
    </div>
    <div class="mb-3">
            @if(file_exists("storage/".$contacts->foto))
            <img src="/storage/{{ $contacts->foto }}" alt="" width="100" height="100"><br>
            @endif
            <input type="file" class="form-control" name="foto" id="foto" placeholder="foto" autofocus required>
        </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</body>
</html>
