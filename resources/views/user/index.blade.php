@section('submenu','user')
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
    <head>
        @include('template.head')
    </head>

<body>

  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">
    <!-- Menu -->
    @include('template.sidebar')
    <!-- / Menu -->
    <!-- Layout container -->
    <div class="layout-page">
      
    <!-- Navbar -->
        @include('template.navbar')
    <!-- / Navbar -->
      <!-- Content wrapper -->
        <div class="content-wrapper">

            <!-- Content -->
            <div class="container">
                    <h4 class="fw-bold py-3 mb-4">
                        <span class="text-muted fw-light">Tabel /</span> Tabel Masyarakat
                    </h4>
                <div class="card">
                    <!-- <div class="card-header text-center">
                        Pengaduan Masyarakat
                    </div> -->
                    <div class="card-body">
                        @if(session('Data dihapus'))
                        <div class="alert alert-danger" role="alert">
                        <!-- <button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>  -->
                        {{session('Data dihapus')}}
                        </div>
                        @endif
                        <!-- <a href="/petugas/pengaduan/pdf"  class="btn btn-primary mb-5"><i class='bx bxs-cloud-download'></i> Unduh Laporan</a> -->
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover" id="myTable">
                                <thead class="table-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama Masyarakat</th>
                                        <th>Email</th>
                                        <th>No. Telp</th>
                                        <th>Alamat</th>
                                        <th>OPSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user as $p)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $p->nik }}</td>
                                        <td>{{ $p->nama}}</td>
                                        <td>{{ $p->email }}</td>
                                        <td>{{ $p->telp }}</td>
                                        <td>{{$p->alamat}}</td>
                                        <td>
                                            <a href="/user/show/{{ $p->id }}" class="btn btn-sm btn-outline-success"><i class='bx bx-show'></i></a>
                                            <a href="/user/destroy/{{ $p->id }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin dihapus?')"><i class='bx bxs-trash'></i></a>
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
                @include('template.footer')
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
  @include('template.script')
  
</body>

</html>