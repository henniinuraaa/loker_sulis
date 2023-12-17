@extends('template')
@section('content')
    
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <title>Postingan</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <script src="../assets/vendor/js/helpers.js"></script>

    <script src="../assets/js/config.js"></script>
  </head>

  <body>
   
    <div class="card py-3">
      {{-- <a href="/posting"><button class="btn btn-primary">+ Tambah Data</button></a>       --}}
      <div class="card-body mb-8">
        <div class="table-responsive text-nowrap">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Perusahaan</th>
                <th>Bidang Usaha</th>
                <th>lowongan</th>
                <th>lokasi</th>
                <th>tanggal posting</th>
                <th>tanggal tenggat</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Foto</th>
                <th>Aksi</th>

              </tr>
            </thead>
            <tbody>
              
                @foreach ($postings as $key=> $item) 
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{  $item->nama_perusahaan }}</td>
                    <td>{{  $item->bidang_usaha }}</td>
                    <td>{{  $item->lowongan }}</td>
                    <td>{{  $item->lokasi }}</td>
                    <td>{{  $item->ttl_p }}</td>
                    <td>{{  $item->ttl_tp }}</td>
                    <td>{{  $item->deskripsi }}</td>
                <td>
                      @if ($item['status'] == 'Dikonfirmasi')
                      <button class="btn btn-success">Dikonfirmasi</button>
                          @else
                          <button class="btn btn-warning"><a href="/posting/{{ $item->id }}/Dikonfirmasi">{{ $item->status }}</a></button>
                      @endif
                  </td>
                    <td><img src="/storage/{{ $item->foto }}" width="70px" alt=""></td>
                    <td><a style="margin:5px;" href="/postinghapus/{{ $item['id'] }}"><button class="btn btn-danger">Hapus</button>
                        </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endsection
   
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
