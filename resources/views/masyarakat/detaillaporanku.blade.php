@section('menu','buatpengaduan')
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<head>
    @include('Template.head')
</head>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar layout-without-menu">
      <div class="layout-container">
        <!-- Menu -->
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

          <!-- Navbar -->
          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
            <!-- <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div> -->

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center ms-auto mt-3">
                <div class="nav-item d-flex align-items-center">
                  <h4>Layanan Pengaduan Masyarakat</h4>
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{asset('assets/img/avatars/profile.jpg')}}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{asset('assets/img/avatars/profile.jpg')}}" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            
                            <span class="fw-semibold d-block">{{ Auth::user()->nama }}</span>
                            <small class="text-muted">{{ Auth::user()->level }}</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="/profile/showmas">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Profile Saya</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('logout')}}" onclick="return confirm('Yakin ingin keluar?')">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container flex-grow-1 container-p-y">
                <div class="card-header">
                    <h4 class="text-center">Detail Laporan Anda</h4>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card mt-2">
                            <div class="card-header">
                              <a href="/masyarakat/laporanku" class="btn btn-outline-primary"><i class='bx bxs-left-arrow-circle'></i> Kembali</a>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>NIK</th>
                                            <td>:</td>
                                            <td>{{$detail_laporanku->user->nik ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Pengaduan</th>
                                            <td>:</td>
                                            <td>{{$detail_laporanku->tgl_pengaduan}}</td>
                                        </tr>
                                        <tr>
                                            <th>Foto</th>
                                            <td>:</td>
                                            <td><a href="{{ asset('image/'. $pengaduan->foto ) }}" target="_blank" rel="noopener noreferrer"><img src="{{ asset('image/'. $pengaduan->foto ) }}" height="100" width="200" alt="Foto Pengaduan"></a></td>
                                        </tr>
                                        <tr>
                                            <th>Isi Laporan</th>
                                            <td>:</td>
                                            <td>{{$detail_laporanku->isi_laporan}}</td>
                                        </tr>
                                        <tr>
                                          <th>Status</th>
                                          <td>:</td>
                                          <td>
                                              @if ($detail_laporanku->status == '0')
                                                  <span class="badge bg-label-primary">Pending</span>
                                              @elseif ($detail_laporanku->status == 'proses')
                                                  <span class="badge bg-label-warning">Proses</span>
                                              @else
                                                  <span class="badge bg-label-success">Selesai</span>
                                              @endif
                                          </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="card-body text-center">
                                    <!-- <p>{{ @$data_tanggapan->tanggapan }}</p> -->
                                    <h4>Tanggapan</h4>

                                    @if (empty(@$data_tanggapan->tanggapan))
                                        <h5>Belum ada tanggapan</h5>
                                    @else
                                        <h5>{{@$data_tanggapan->tanggapan}}</h5>
                                    @endif
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