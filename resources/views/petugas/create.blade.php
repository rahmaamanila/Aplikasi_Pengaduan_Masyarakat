@section('submenu','petugas')
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
                <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Tambahkan Petugas</h4> -->
                <div class="row">
                    <div class="col-xxl">
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="/petugas" class="btn btn-outline-primary"><i class='bx bxs-left-arrow-circle'></i></a>
                                <h4 class="text-center">Tambah Petugas</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="/petugas/store">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="nik" class="form-label">NIK</label>
                                            <input class="form-control" type="number" name="nik" value="{{ old('nik') }}" autocomplete="off" autofocus/>
                                            @if($errors->has('nik'))
                                                <div class="text-danger">
                                                    {{ $errors->first('nik')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input class="form-control" type="text" name="nama" value="{{ old('nama') }}" autocomplete="off"/>
                                            @if($errors->has('nama'))
                                                <div class="text-danger">
                                                    {{ $errors->first('nama')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="email" class="form-label">Email</label>
                                            <input class="form-control" type="email" name="email" value="{{ old('email') }}" autocomplete="off"/>
                                            @if($errors->has('email'))
                                                <div class="text-danger">
                                                    {{ $errors->first('email')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6 form-password-toggle">
                                            <div class="d-flex justify-content-between">
                                                <label class="form-label" for="password">Password</label>
                                            </div>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password">
                                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                            </div>
                                            @if($errors->has('password'))
                                                <div class="text-danger">
                                                    {{ $errors->first('password')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="telp">Nomer Telepon</label>
                                            <div class="input-group input-group-merge">
                                                <input type="number" name="telp" class="form-control" value="{{ old('telp') }}" autocomplete="off"/>
                                            </div>
                                            @if($errors->has('telp'))
                                                <div class="text-danger">
                                                    {{ $errors->first('telp')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="col-sm-4 col-form-label" for="basic-default-phone">Jenis Kelamin</label>
                                            <div class="col-sm-10">
                                                <input name="jenis_kel" class="form-check-input" type="radio" value="laki-laki" id="defaultRadio2" />
                                                <label class="form-check-label" for="defaultRadio2">
                                                    Laki-laki
                                                </label>
                                                <input name="jenis_kel" class="form-check-input" type="radio" value="perempuan" id="defaultRadio2" />
                                                <label class="form-check-label" for="defaultRadio2">
                                                    Perempuan
                                                </label>
                                            </div>
                                            @if($errors->has('jenis_kel'))
                                                <div class="text-danger">
                                                    {{ $errors->first('jenis_kel')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea type="text" class="form-control" name="alamat">{{ old('alamat') }}</textarea>
                                            @if($errors->has('alamat'))
                                                <div class="text-danger">
                                                    {{ $errors->first('alamat')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="rt" class="form-label">RT</label>
                                            <input class="form-control" type="number" name="rt" value="{{ old('rt') }}" autocomplete="off"/>
                                            @if($errors->has('rt'))
                                                <div class="text-danger">
                                                    {{ $errors->first('rt')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="rw" class="form-label">RW</label>
                                            <input type="number" class="form-control" name="rw" value="{{ old('rw') }}" autocomplete="off"/>
                                            @if($errors->has('rw'))
                                                <div class="text-danger">
                                                    {{ $errors->first('rw')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="rw" class="form-label">Kode Pos</label>
                                            <input type="number" class="form-control" name="kode_pos" value="{{ old('kode_pos') }}" autocomplete="off"/>
                                            @if($errors->has('kode_pos'))
                                                <div class="text-danger">
                                                    {{ $errors->first('kode_pos')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="country">Provinsi</label>
                                            <select name="province_id" id="provinsi" class="select2 form-select" value="{{ old('province_id') }}">
                                                <option value="">Pilih Provinsi</option>
                                                    @foreach($provinces as $p)
                                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                                    @endforeach
                                            </select>
                                            @if($errors->has('province_id'))
                                                <div class="text-danger">
                                                    {{ $errors->first('province_id')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Kabupaten</label>
                                            <select name="regency_id" id="kabupaten" class="select2 form-select" value="{{ old('regency_id') }}">
                                            </select>
                                            @if($errors->has('regency_id'))
                                                <div class="text-danger">
                                                    {{ $errors->first('regency_id')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Kecamatan</label>
                                            <select name="district_id" id="kecamatan" class="select2 form-select" value="{{ old('district_id') }}">
                                            </select>
                                            @if($errors->has('district_id'))
                                                <div class="text-danger">
                                                    {{ $errors->first('district_id')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Desa</label>
                                            <select name="village_id" id="desa" class="select2 form-select" value="{{ old('village_id') }}">
                                            </select>
                                            @if($errors->has('village_id'))
                                                <div class="text-danger">
                                                    {{ $errors->first('village_id')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary me-2">Simpan</button>
                                        <!-- <a href="/petugas" type="reset" class="btn btn-outline-secondary">Kembali</a> -->
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
        $(function () {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') }
            });

            $(function(){
                $('#provinsi').on('change',function(){
                    let id_provinsi = $('#provinsi').val();
                    
                    $.ajax({
                        type : 'POST',
                        url : "{{route('getkbptn')}}",
                        data : {id_provinsi:id_provinsi},
                        cache : false,

                        success: function(msg){
                            $('#kabupaten').html(msg);
                            $('#kecamatan').html('');
                            $('#desa').html('');
                        },
                        error: function(data){
                            console.log('error:',data);
                        },
                    })
                })

                $('#kabupaten').on('change',function(){
                    let id_kabupaten = $('#kabupaten').val();
                    
                    $.ajax({
                        type : 'POST',
                        url : "{{route('getkcmtn')}}",
                        data : {id_kabupaten:id_kabupaten},
                        cache : false,

                        success: function(msg){
                            $('#kecamatan').html(msg);
                            $('#desa').html('');
                        },
                        error: function(data){
                            console.log('error:',data);
                        },
                    })
                })

                $('#kecamatan').on('change',function(){
                    let id_kecamatan = $('#kecamatan').val();
                    
                    $.ajax({
                        type : 'POST',
                        url : "{{route('getds')}}",
                        data : {id_kecamatan:id_kecamatan},
                        cache : false,

                        success: function(msg){
                            $('#desa').html(msg);
                        },
                        error: function(data){
                            console.log('error:',data);
                        },
                    })
                })
            });


        });
    </script>
  </body>
</html>
