@section('submenu','pengaduanadmin')
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
                            <div class="col-md-8">
                                <div class="card mt-2">
                                    <div class="card-header">
                                        <a href="/pengaduan" class="btn btn-outline-primary"><i class='bx bxs-left-arrow-circle'></i> Kembali</a>
                                    </div>
                                    <!-- <a href="/pengaduan/detail/detailpdf/{{$pengaduan->id_pengaduan}}" class="btn btn-primary">unduh laporan</a> -->
                                    <div class="card-body">
                                        <table class="table">
                                            <tbody>
                                                @foreach($pengaduan->pengaduan as $item)
                                                <tr>
                                                    <th>NIK</th>
                                                    <td>:</td>
                                                    <td>{{ $item->user->nik ?? ''}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Nama</th>
                                                    <td>:</td>
                                                    <td>{{ $item->user->nama ?? ''}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Pengaduan</th>
                                                    <td>:</td>
                                                    <td>{{ $item->tgl_pengaduan }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Foto</th>
                                                    <td>:</td>
                                                    <td><a href="{{ asset('image/'. $pengaduan->foto ) }}" target="_blank" rel="noopener noreferrer"><img src="{{ asset('image/'. $pengaduan->foto ) }}" height="100" width="200" alt="Foto Pengaduan"></a></td>
                                                </tr>
                                                <tr>
                                                    <th>Isi Laporan</th>
                                                    <td>:</td>
                                                    <td>{{ $item->isi_laporan }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td>:</td>
                                                    <td>
                                                        @if ($item->status == '0')
                                                        <span class="badge bg-label-primary">Pending</span>
                                                        @elseif ($pengaduan->status == 'proses')
                                                        <span class="badge bg-label-warning">Proses</span>
                                                        @else
                                                        <span class="badge bg-label-success">Selesai</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <br>
                                        <div class="d-flex">
                                            <form action="{{ route('admin.statusOnchange', $pengaduan->id_pengaduan)}}" method="post">
                                                @csrf
                                                <select name="status" class="form-select" onchange="javascript:this.form.submit()">
                                                    <option value="0" @if($pengaduan->status == 0) selected @endif>Pending</option>
                                                    <option value="proses" @if($pengaduan->status == "proses") selected @endif>Proses</option>
                                                    <option value="selesai" @if($pengaduan->status == "selesai") selected @endif>Selesai</option>
                                                </select>
                                            </form>
                                        </div>


                                        <!-- Vertically Centered Modal -->
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mt-2">
                                                <!-- Button trigger modal -->
                                                @if (empty($data_tanggapan->tanggapan))
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                                    Beri tanggapan
                                                </button>
                                                @else
                                                <button type="button" class="btn btn-primary" disabled>
                                                    Sudah ditanggapi
                                                </button>
                                                @endif

                                                <!-- Modal -->
                                                <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modalCenterTitle">Modal title</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form method="post" action="/pengaduan/detail/{id}">
                                                                {{ csrf_field() }}

                                                                <div class="modal-body">
                                                                    <input type="hidden" name="tgl_tanggapan" value="{{Carbon\Carbon::today()}}">
                                                                    <input type="hidden" name="id_pengaduan" value="{{request()->route('id')}}">
                                                                    <div class="row">
                                                                        <div class="col mb-3">
                                                                            <label for="nameWithTitle" class="form-label">Tanggapan</label>
                                                                            <textarea name="tanggapan" rows="5" class="form-control" placeholder="isi tanggapan .." required></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mt-2">
                                    <div class="card-body">
                                        <!-- <div class="card shadow"> -->
                                        <!-- <div class="card-header">
                                        <h5>Tanggapan</h5>
                                    </div> -->
                                        <div class="card-body">
                                            <h5>Tanggapan</h5>

                                            @if (empty(@$data_tanggapan->tanggapan))
                                            Belum ada tanggapan
                                            @else
                                            {{@$data_tanggapan->tanggapan}}
                                            @endif

                                            @if (empty(@$data_tanggapan->tanggapan))

                                            @else
                                            <!-- Vertically Centered Modal -->
                                            <div class="col-lg-4 col-md-6">
                                                <div class="mt-3">
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-icon btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
                                                        <span class="tf-icons bx bx-edit-alt"></span>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="modal" tabindex="-1" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="modalTitle">Modal title</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <form method="post" action="/pengaduan/update/{{$pengaduan->id_pengaduan}}">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('PUT') }}

                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col mb-3">
                                                                                <label for="nameWithTitle" class="form-label">Tanggapan</label>
                                                                                <textarea name="tanggapan" rows="5" class="form-control" required>{{@$data_tanggapan->tanggapan}}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                        <!-- </div> -->
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