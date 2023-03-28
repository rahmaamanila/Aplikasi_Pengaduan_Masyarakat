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
                  <span class="text-muted fw-light">Tabel /</span> Tabel Petugas
                </h4>
                <div class="card">
                  <div class="card-header">
                    <a href="/petugas/create" class="btn btn-sm btn-primary"><i class='bx bx-plus'></i>Tambah Petugas</a>
                  </div>
                  <div class="table-responsive text-nowrap">
                    <table class="table">
                      <caption class="ms-4">Daftar Petugas</caption>
                      <thead>
                          <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($petugas as $p)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $p->nik }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->email }}</td>
                            <td>{{ $p->telp }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td>
                                <!-- <a href="/petugas/edit/{{ $p->id }}" class="btn btn-warning">Edit</a> -->
                                <a href="/petugas/show/{{ $p->id }}" class="btn btn-sm btn-success" title="Detail"><i class='bx bx-show'></i></a>
                                <a href="/petugas/delete/{{ $p->id }}" class="btn btn-sm btn-danger" title="Hapus" onclick="return confirm('Yakin ingin dihapus?')"><i class='bx bxs-trash'></i></a>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{ $petugas->links() }}
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
