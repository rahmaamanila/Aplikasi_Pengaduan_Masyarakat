@section('submenu','pengaduanadmin')
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<head>
    @include('Template.head')
</head>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        @include('Template.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

          <!-- Navbar -->
            @include('Template.navbar')
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">         
                <h4 class="fw-bold py-3 mb-4">
                  <span class="text-muted fw-light">Tabel /</span> Tabel Pengaduan
                </h4>
                <div class="card">
                  <div class="card-header">
                    <a href="{{route('pengaduan.pdf')}}" class="btn btn-sm btn-outline-secondary"><i class='bx bx-save'></i></a>
                  </div>
                  <div class="card-body">
                    @if(session('Data dihapus'))
                        <div class="alert alert-danger" role="alert">
                        {{session('Data dihapus')}}
                        </div>
                    @endif
                    <div class="table-responsive text-nowrap">
                      <table class="table" id="myTable">
                        <thead class="table-primary">
                            <tr>
                              <th>No</th>
                              <th>Tanggal Pengaduan</th>
                              <th>Laporan</th>
                              <th>Status</th>
                              <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($pengaduan as $p)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $p->tgl_pengaduan }}</td>
                              <td>{{ $p->isi_laporan }}</td>
                              <td>
                                @if ($p->status == '0')
                                  <span class="badge bg-label-primary">Pending</span>
                                @elseif ($p->status == 'proses')
                                  <span class="badge bg-label-warning">Proses</span>
                                @else
                                  <span class="badge bg-label-success">Selesai</span>
                                @endif
                              </td>
                              <td>
                                  <a href="/pengaduan/detail/{{ $p->id_pengaduan }}" class="btn btn-sm btn-outline-success"><i class='bx bx-show'></i></a>
                                  <a href="/pengaduan/delete/{{ $p->id_pengaduan }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin dihapus?')"><i class='bx bxs-trash'></i></a>
                              </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('Template.footer')
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    @include('Template.script')
     <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 3000);
    </script>
  </body>
</html>
