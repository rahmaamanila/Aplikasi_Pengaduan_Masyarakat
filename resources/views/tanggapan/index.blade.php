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
                  <span class="text-muted fw-light">Tables /</span> Tanggapan Tables
                </h4>
                <div class="card">
                  <!-- <h5 class="card-header"><a href="/tanggapan/create" class="btn btn-primary">Tambah Tanggapan</a></h5> -->
                  <div class="table-responsive text-nowrap">
                    <table class="table">
                      <caption class="ms-4">List of Tanggapan</caption>
                      <thead>
                          <tr>
                            <th>No</th>
                            <th>ID Pengaduan</th>
                            <th>Tanggal Tanggapan</th>
                            <th>Tanggapan</th>
                            <th>OPSI</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($tanggapan as $t)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $t->pengaduan->id_pengaduan }}</td>
                            <td>{{ $t->tgl_tanggapan }}</td>
                            <td>{{ $t->tanggapan }}</td>
                            <td>
                                <a href="/tanggapan/edit/{{ $t->id_tanggapan }}" class="btn btn-sm btn-warning"><i class='bx bx-edit-alt' ></i></a>
                                <a href="/tanggapan/delete/{{ $t->id_tanggapan }}" class="btn btn-sm btn-danger"><i class='bx bxs-trash'></i></a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
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
  </body>
</html>
