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
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Tambahkan Petugas</h4>
                <div class="row">
                    <div class="col-xxl">
                        <div class="card mb-4">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">Basic Layout</h5>
                            </div>
                            <div class="card-body">
                                <form method="post" action="/tanggapan/store">
    
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label>Pengadu</label>
                                          <select class="form-control" name="id_pengaduan">
                                              @foreach($pengaduan as $u)
                                              <option value="{{ $u->id_pengaduan }}" selected>{{ $u->id }}</option>
                                            @endforeach
                                        </select>
                                    </div>
            
                                    <div class="form-group">
                                        <label>Tanggal tanggapan</label>
                                        <input type="date" name="tgl_tanggapan" class="form-control">
            
                                    </div>
            
                                    <div class="form-group">
                                        <label>Tanggapan</label>
                                        <textarea name="tanggapan" class="form-control" placeholder="isi tanggapan .."></textarea>
                                    </div>
            
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" value="Simpan">
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
  </body>
</html>
