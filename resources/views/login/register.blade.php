
<!DOCTYPE html>
<html lang="en" class="light-style  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="{{asset('assets/')}}" data-template="vertical-menu-template-free">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Register</title>
    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}" />
    
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    
    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
    <!-- Helpers -->
    <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('assets/js/config.js')}}"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

</head>

<body>

  <!-- Content -->
    <div class="container-xxl">
        <div class="row">
            <div class="col-md-12">
                <div class="authentication-wrapper authentication-basic container-p-y">
                    <div class="authentication-inner">
                    <!-- Register -->
                    <div class="card">
                        <div class="card-body">
                        <!-- /Logo -->
                        <h4 class="mb-2 text-center">Pengaduan Masyarakat<br>Register</h4>
                        <!-- <p class="mb-4 text-center">Please sign-in to your account and start the aplication</p> -->

                        <form action="{{route('simpanregister')}}" method="POST">
                        {{ csrf_field() }}

                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-id-card"></i></span>
                                    <input type="number" class="form-control" name="nik" placeholder="Masukkan nik" value="{{ old('nik') }}" autocomplete="off" autofocus>
                                </div>
                                @if($errors->has('nik'))
                                    <div class="text-danger">
                                        {{ $errors->first('nik')}}
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="nama" class="form-label">nama</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama" value="{{ old('nama') }}" autocomplete="off">
                                </div>
                                @if($errors->has('nama'))
                                    <div class="text-danger">
                                        {{ $errors->first('nama')}}
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" value="{{ old('email') }}" autocomplete="off">
                                </div>
                                @if($errors->has('email'))
                                    <div class="text-danger">
                                        {{ $errors->first('email')}}
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3 form-password-toggle">
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

                            <div class="mb-3">
                                <label for="telp" class="form-label">Telp</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-phone"></i></span>
                                    <input type="number" class="form-control" name="telp" placeholder="Masukkan no telepon" value="{{ old('telp') }}" autocomplete="off">
                                </div>
                                @if($errors->has('telp'))
                                    <div class="text-danger">
                                        {{ $errors->first('telp')}}
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="jenis_kel" class="form-label">Jenis Kelamin</label>
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

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-home"></i></span>
                                    <textarea name="alamat" class="form-control" placeholder="Masukkan alamat">{{ old('alamat') }}</textarea>
                                </div>
                                @if($errors->has('alamat'))
                                    <div class="text-danger">
                                        {{ $errors->first('alamat')}}
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="rt" class="form-label">RT</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bxs-landmark"></i></span>
                                    <input type="number" class="form-control" id="rt" name="rt" placeholder="Masukkan rt" value="{{ old('rt') }}" autocomplete="off">
                                </div>
                                @if($errors->has('rt'))
                                    <div class="text-danger">
                                        {{ $errors->first('rt')}}
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="rw" class="form-label">RW</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bxs-landmark"></i></span>
                                    <input type="number" class="form-control" id="rw" name="rw" placeholder="Masukkan rw" value="{{ old('rw') }}" autocomplete="off">
                                </div>
                                @if($errors->has('rw'))
                                    <div class="text-danger">
                                        {{ $errors->first('rw')}}
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="kode_pos" class="form-label">Kode Pos</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-building"></i></span>
                                    <input type="number" class="form-control" id="kode_pos" name="kode_pos" placeholder="Masukkan kode pos" value="{{ old('kode_pos') }}" autocomplete="off">
                                </div>
                                @if($errors->has('kode_pos'))
                                    <div class="text-danger">
                                        {{ $errors->first('kode_pos')}}
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label>Provinsi</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-map-pin"></i></span>
                                    <select class="form-select" name="province_id" id="provinsi" value="{{ old('province_id') }}">
                                        <option value="">Pilih Provinsi</option>
                                            @foreach($provinces as $p)
                                            <option value="{{ $p->id }}">{{ $p->name }}</option>
                                            @endforeach
                                    </select>
                                </div>
                                @if($errors->has('province_id'))
                                    <div class="text-danger">
                                        {{ $errors->first('province_id')}}
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label>Kabupaten</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-map-pin"></i></span>
                                    <select class="form-select" name="regency_id" id="kabupaten" value="{{ old('regency_id') }}"></select>
                                </div>
                                @if($errors->has('regency_id'))
                                    <div class="text-danger">
                                        {{ $errors->first('regency_id')}}
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label>Kecamatan</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-map-pin"></i></span>
                                    <select class="form-select" name="district_id" id="kecamatan" value="{{ old('district_id') }}"></select>
                                </div>
                                @if($errors->has('district_id'))
                                    <div class="text-danger">
                                        {{ $errors->first('district_id')}}
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label>Desa</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-map-pin"></i></span>
                                    <select class="form-select" name="village_id" id="desa" value="{{ old('village_id') }}"></select>
                                </div>
                                @if($errors->has('village_id'))
                                    <div class="text-danger">
                                        {{ $errors->first('village_id')}}
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Simpan</button>
                            </div>
                        </form>

                        <p class="text-center">
                            <span>Sudah memiliki akun?</span>
                            <a href="/login">
                                <span>Login</span>
                            </a>
                        </p>
                        </div>
                    </div>
                    <!-- /Register -->
                    </div>
                </div>
            </div>
        </div>  
    </div>
  <!-- / Content -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
  <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
  
  <script src="{{asset('assets/vendor/js/menu.js')}}"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <!-- Page JS -->
  
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

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
                    url : "{{route('getkabupaten')}}",
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
                    url : "{{route('getkecamatan')}}",
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
                    url : "{{route('getdesa')}}",
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
