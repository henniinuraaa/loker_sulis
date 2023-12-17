@extends('template')
@section('content')
  <body>
   
    <div class="card py-3">
      <div class="card-body mb-8">
        <div class="table-responsive text-nowrap">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Alamat Email</th>
                <th>Nama Perusahaan</th>
                <th>No Handphone</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Nilai Rata-rata Ijazah</th>
                <th>Jurusan</th>
                <th>Jenis Kelamin</th>
                <th>Tahun Lulus</th>
                <th>Tinggi Badan</th>
                <th>Berat Badan</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($pengajuans as $key=> $item) 
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{  $item->nama_lengkap }}</td>
                    <td>{{  $item->email }}</td>
                    <td>{{  $item->nama_perusahaan }}</td>
                    <td>{{  $item->no_hp }}</td>
                    <td>{{  $item->tempat_lahir }}</td>
                    <td>{{  $item->tgl_lahir }}</td>
                    <td>{{  $item->nilai_rata }}</td>
                    <td>{{  $item->jurusan }}</td>
                    <td>{{  $item->jk }}</td>
                    <td>{{  $item->thn_lulus }}</td>
                    <td>{{  $item->tinggi_badan }}</td>
                    <td>{{  $item->berat_badan }}</td>
                    <td>
                      @if ($item['status'] == 'Dikonfirmasi')
                      <button class="btn btn-success">Dikonfirmasi</button>
                          @else
                          <button class="btn btn-warning"><a href="/pengajuan/{{ $item->id }}/Dikonfirmasi">{{ $item->status }}</a></button>
                      @endif
                    </td>
                    <td><a style="margin:5px;" href="/pengajuanhapus/{{ $item['id'] }}"><button class="btn btn-danger">Hapus</button>
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
