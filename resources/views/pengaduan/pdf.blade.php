<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pengaduan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Pengaduan Masyarakat</h4>
	</center>
 
	<table class='table table-bordered mt-4'>
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal Pengaduan</th>
				<th>NIK</th>
				<th>Nama Pelapor</th>
				<th>Isi Laporan</th>
				<th>Foto</th>
                <th>Status Laporan</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data_pengaduan as $p)
			<tr>
				<td>{{$loop->iteration }}</td>
				<td>{{$p->tgl_pengaduan}}</td>
				<td>{{$p->user->nik ?? ''}}</td>
				<td>{{$p->user->nama ?? ''}}</td>
                <td>{{\Str::limit($p->isi_laporan,30)}}</td>
				<td><img src="{{ public_path('image/'. $p->foto ) }}" width="100" height="50" 0alt=""></td>
				<td>
					@if ($p->status == '0')
					<p>Pending</p>
					@elseif ($p->status == 'proses')
					<p>Proses</p>
					@else
					<p>Selesai</p>
					@endif
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>