@extends('template')
@section('content')
  <body>
    <div class="card py-3">
      <a href="/tampilperusahaan"><button class="btn btn-primary">+ Tambah Data</button></a>      
      <div class="card-body mb-3">
        <div class="table-responsive text-nowrap">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Pesan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              
                @foreach ($contacts as $key=> $item) 
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{  $item->nama }}</td>
                    <td>{{  $item->pesan }}</td>
                    <td><a style="margin:5px;" href="/contacthapus/{{ $item['id'] }}"><button class="btn btn-danger">Hapus</button>
                        <a href="/contact/edit/{{ $item['id'] }}"><button class="btn btn-primary">Edit</button></td>
                           
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
