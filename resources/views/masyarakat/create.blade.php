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
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row justify-content-center">
                <div class="col-lg-10 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Selamat Datang {{ Auth::user()->nama }} 👋🎉</h5>
                          <p class="mb-4">
                            Laporkan masalah terkait lingkungan disekitarmu dan kami siap untuk melayani
                          </p>

                          <!-- <a href="/masyarakat/create" class="btn btn-sm btn-outline-primary">Buat Laporan</a> -->
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img src="{{asset('assets/img/illustrations/welcome.png')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png"/>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-4">
                        <!-- <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Basic Layout</h5>
                        </div> -->
                        <div class="card-body">
                          <!-- <a href="/masyarakat" class="btn btn-outline-primary mb-3"><i class='bx bx-home'></i> Dashboard</a> -->
                          @if(session('Data ditambah'))
                          <div class="alert alert-success" role="alert">
                            <!-- <button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>  -->
                            {{session('Data ditambah')}}
                          </div>
                          @endif
                            
                            <h4 class="text-center">Buat Laporan</h4>

                            <form method="post" action="/masyarakat/store" enctype="multipart/form-data">

                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label>Laporan</label>
                                    <textarea name="isi_laporan" rows="5" class="form-control" placeholder="Isi Laporan" required autofocus></textarea>
                                    
                                    @if($errors->has('isi_laporan'))
                                        <div class="text-danger">
                                            {{ $errors->first('isi_laporan')}}
                                        </div>
                                    @endif
                                  </div>

                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" name="foto" class="form-control" required>

                                    @if($errors->has('foto'))
                                        <div class="text-danger">
                                            {{ $errors->first('foto')}}
                                        </div>
                                    @endif
                                </div>

                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Kirim <i class='bx bxl-telegram'></i></button>
                                    <a href="/masyarakat/laporanku" class="btn btn-primary"><i class='bx bx-detail'></i> Lihat Laporanku</a>
                                </div>
                            </form>
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
    <script>
      window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 3000);
    </script>
  </body>
</html>
