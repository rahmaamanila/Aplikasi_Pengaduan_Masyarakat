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
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="/user" class="btn btn-outline-primary"><i class='bx bxs-left-arrow-circle'></i> Kembali</a>
                                <h4 class="text-center">Edit user</h4>
                            </div>
                            <!-- Account -->
                            <div class="card-body">
                                <form method="POST" action="/user/show/{{$user->id}}">
                                @csrf
                                @method('PUT')
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input class="form-control" type="text" name="nama" value="{{ $user->nik }}" disabled/>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="email" class="form-label">Email</label>
                                            <input class="form-control" type="text" name="email" value="{{ $user->email }}" disabled/>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="telp">Nomor Telepon</label>
                                            <input type="number" name="telp" class="form-control" value="{{ $user->telp }}" disabled/>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="col-sm-4 col-form-label" for="basic-default-phone">Jenis Kelamin</label>
                                            <input type="text" name="jenis_kel" class="form-control" value="{{ $user->jenis_kel }}" disabled/>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea type="text" class="form-control" name="alamat" disabled>{{ $user->alamat }}</textarea>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="rt" class="form-label">RT</label>
                                            <input class="form-control" type="number" name="rt" value="{{ $user->rt }}" disabled/>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="rw" class="form-label">RW</label>
                                            <input type="number" class="form-control" name="rw" maxlength="6" value="{{ $user->rw }}" disabled/>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="rw" class="form-label">Kode Pos</label>
                                            <input type="number" class="form-control" name="kode_pos" maxlength="6" value="{{ $user->kode_pos }}" disabled/>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="country">Provinsi</label>
                                            <input type="text" class="form-control" name="province_id" value="{{ $user->province->name ?? '' }}" disabled/>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Kabupaten</label>
                                            <input type="text" class="form-control" name="regency_id" value="{{ $user->regency->name ?? '' }}" disabled/>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Kecamatan</label>
                                            <input type="text" class="form-control" name="district_id" value="{{ $user->district->name ?? '' }}" disabled/>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Desa</label>
                                            <input type="text" class="form-control" name="village_id" value="{{ $user->village->name ?? '' }}" disabled/>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <!-- <a href="/user" type="reset" class="btn btn-outline-primary">Kembali</a> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /Account -->
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