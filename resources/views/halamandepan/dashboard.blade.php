@section('menu','dashboard')
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
            <div class="row">
              <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-primary">Selamat Datang {{ Auth::user()->nama }} 👋🎉</h5>
                        <p class="mb-4">
                          Segera selesaikan masalah terkait pengaduan masyarakat mengenai lingkungan disekitar
                        </p>
                        @if (auth()->user()->level == "admin")
                        <a href="/pengaduan" class="btn btn-sm btn-outline-primary">Lihat Pengaduan</a>
                        @else (auth()->user()->level == "petugas")
                        <a href="/petugas/pengaduan" class="btn btn-sm btn-outline-primary">Lihat Pengaduan</a>
                        @endif
                      </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <!-- pengaduan -->
                <div class="col-md-12 col-lg-4">
                  <div class="card mt-3">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img src="../assets/img/icons/unicons/cc-primary.png" alt="chart success" class="rounded" />
                        </div>
                      </div>
                      <span class="fw-semibold d-block mb-1">Total Pengaduan</span>
                      <h3 class="card-title mb-2">{{ $pengaduan }}</h3>
                      <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
                    </div>
                  </div>
                </div>
                <!-- tanggapan -->
                <div class="col-md-12 col-lg-4">
                  <div class="card mt-3">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img src="../assets/img/icons/unicons/wallet-info.png" alt="chart success" class="rounded" />
                        </div>
                      </div>
                      <span class="fw-semibold d-block mb-1">Total Tanggapan</span>
                      <h3 class="card-title mb-2">{{ $tanggapan }}</h3>
                      <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
                    </div>
                  </div>
                </div>
                <!-- masyarakat -->
                <div class="col-md-12 col-lg-4">
                  <div class="card mt-3">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                        </div>
                      </div>
                      <span class="fw-semibold d-block mb-1">Total Masyarakat</span>
                      <h3 class="card-title text-nowrap mb-2">{{ $masyarakat }}</h3>
                      <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <!-- pending -->
                <div class="col-md-12 col-lg-4">
                  <div class="card mt-3">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img src="../assets/img/icons/unicons/chart-success.png" alt="Credit Card" class="rounded" />
                        </div>
                      </div>
                      <span class="fw-semibold d-block mb-1">Pengaduan Pending</span>
                      <h3 class="card-title text-nowrap mb-2">{{ $pending }}</h3>
                      <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small> -->
                    </div>
                  </div>
                </div>
                <!-- proses -->
                <div class="col-md-12 col-lg-4">
                  <div class="card mt-3">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img src="../assets/img/icons/unicons/chart.png" alt="Credit Card" class="rounded" />
                        </div>
                      </div>
                      <span class="fw-semibold d-block mb-1">Pengaduan Proses</span>
                      <h3 class="card-title text-nowrap mb-2">{{ $proses }}</h3>
                      <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small> -->
                    </div>
                  </div>
                </div>
                <!-- selesai -->
                <div class="col-md-12 col-lg-4">
                  <div class="card mt-3">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img src="../assets/img/icons/unicons/chart-success.png" alt="Credit Card" class="rounded" />
                        </div>
                      </div>
                      <span class="fw-semibold d-block mb-1">Pengaduan Selesai</span>
                      <h3 class="card-title text-nowrap mb-2">{{ $selesai }}</h3>
                      <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <!-- petugas -->
                @if (auth()->user()->level == "admin")
                <div class="col-md-12 col-lg-4">
                  <div class="card mt-3">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                        </div>
                      </div>
                      <span class="fw-semibold d-block mb-1">Total Petugas</span>
                      <h3 class="card-title text-nowrap mb-2">{{ $petugas }}</h3>
                      <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small> -->
                    </div>
                  </div>
                </div>
                @endif
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