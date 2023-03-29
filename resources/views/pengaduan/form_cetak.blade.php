@section('submenu','cetak')
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
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card mt-5">
                                <div class="card-header">
                                    <h4>Cetak Pengaduan Pertanggal</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group mb-3">
                                        <label>Tanggal Awal</label>
                                        <input type="date" name="tglawal" id="tglawal" class="form-control" value="2014-02-09" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Tanggal Akhir</label>
                                        <input type="date" name="tglakhir" id="tglakhir" class="form-control" value="2014-02-09" required>
                                    </div>
                                    <div>

                                        <a href="#" onclick="this.href='/pengaduan/cetakpertanggal/'+ document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value" class="btn btn-primary"><i class='bx bx-save'></i> Cetak</a>
                                    </div>
                                </div>
                            </div>
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
  </body>
</html>
