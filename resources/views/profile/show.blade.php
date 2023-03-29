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
                    <div class="col-md-6">
                        <div class="card mt-2">
                            <form method="post" action="/masyarakat/user/">
                                <div class="card-body">
                                    <h5 class="text-center mt-2">Detail Profile</h5>
                                    <div class="row margin">
                                        <div class="col-md">
                                            <label for="nik" class="col-sm-6 col-form-label">NIK</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" name="nama" value="{{ $user->nik }}" disabled/>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <label for="nama" class="col-sm-6 col-form-label">Nama</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" name="nama" value="{{ $user->nama }}" disabled/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row margin mt-3">
                                        <div class="col-md">
                                            <label for="email" class="col-sm-6 col-form-label">Email</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" name="nama" value="{{ $user->email }}" disabled/>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <label for="telp" class="col-sm-6 col-form-label">No. Telp</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" name="nama" value="{{ $user->telp }}" disabled/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row margin mt-3">
                                        <div class="col-md">
                                            <label for="telp" class="col-sm-6 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" name="nama" value="{{ $user->jenis_kel }}" disabled/>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <label for="alamat" class="col-sm-6 col-form-label">Alamat</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" name="nama" value="{{ $user->alamat }}" disabled/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row margin mt-3">
                                         <div class="col-md">
                                            <label for="rt" class="col-sm-6 col-form-label">RT</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" name="nama" value="{{ $user->rt }}" disabled/>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <label for="rw" class="col-sm-6 col-form-label">RW</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" name="nama" value="{{ $user->rw }}" disabled/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row margin mt-3">
                                        <div class="col-md">
                                            <label for="kode_pos" class="col-sm-6 col-form-label">Kode Pos</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" name="nama" value="{{ $user->kode_pos }}" disabled/>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <label for="province_id" class="col-sm-6 col-form-label">Provinsi</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" name="nama" value="{{ $user->province->name ?? '' }}" disabled/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row margin mt-3"> 
                                        <div class="col-md">
                                            <label for="regency_id" class="col-sm-6 col-form-label">Kabupaten</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" name="nama" value="{{ $user->regency->name ?? '' }}" disabled/>
                                            </div>
                                        </div>  
                                        <div class="col-md">
                                            <label for="district_id" class="col-sm-6 col-form-label">Kecamatan</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" name="nama" value="{{ $user->district->name ?? '' }}" disabled/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row margin mt-3">
                                        <div class="col-md">
                                            <label for="village_id" class="col-sm-6 col-form-label">Desa</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" name="nama" value="{{ $user->village->name ?? '' }}" disabled/>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="col-sm-12 offset-sm-2 mb-2 mt-2">
                                        <a href="/user" class="btn btn-sm btn-success">Kembali</a>
                                    </div> -->
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4 mt-2">
                            <h5 class="card-header text-center">Edit Profile</h5>
                            <!-- Account -->
                            <div class="card-body">
                                <form method="POST" action="/profile/update/{{$user->id}}">
                                @csrf
                                @method('PUT')
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input class="form-control" type="text" name="nama" value="{{ $user->nama }}" autocomplete="off"/>
                                            @if($errors->has('nama'))
                                                <div class="text-danger">
                                                    {{ $errors->first('nama')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="email" class="form-label">Email</label>
                                            <input class="form-control" type="email" name="email" value="{{ $user->email }}" autocomplete="off"/>
                                            @if($errors->has('email'))
                                                <div class="text-danger">
                                                    {{ $errors->first('email')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="telp">No. Telp</label>
                                            <input type="number" name="telp" class="form-control" value="{{ $user->telp }}" autocomplete="off"/>
                                            @if($errors->has('telp'))
                                                <div class="text-danger">
                                                    {{ $errors->first('telp')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea type="text" class="form-control" name="alamat">{{ $user->alamat }}</textarea>
                                            @if($errors->has('alamat'))
                                                <div class="text-danger">
                                                    {{ $errors->first('alamat')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="rt" class="form-label">RT</label>
                                            <input class="form-control" type="number" name="rt" value="{{ $user->rt }}" autocomplete="off"/>
                                            @if($errors->has('rt'))
                                                <div class="text-danger">
                                                    {{ $errors->first('rt')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="rw" class="form-label">RW</label>
                                            <input type="number" class="form-control" name="rw" value="{{ $user->rw }}" autocomplete="off"/>
                                            @if($errors->has('rw'))
                                                <div class="text-danger">
                                                    {{ $errors->first('rw')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="rw" class="form-label">Kode Pos</label>
                                            <input type="number" class="form-control" name="kode_pos" value="{{ $user->kode_pos }}" autocomplete="off"/>
                                            @if($errors->has('kode_pos'))
                                                <div class="text-danger">
                                                    {{ $errors->first('kode_pos')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <button type="submit" class="btn btn-primary d-grid w-100 me-2 mt-4">Simpan Perubahan</button>
                                        </div>
                                    </div>
                                    <!-- <div class="mt-2">
                                        <button type="submit" class="btn btn-primary d-grid w-100 me-2">Simpan Perubahan</button>
                                    </div> -->
                                </form>
                            </div>
                        </div>
                        <!-- /Account -->
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
                        url : "{{route('datakbptn')}}",
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
                        url : "{{route('datakcmtn')}}",
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
                        url : "{{route('datads')}}",
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
