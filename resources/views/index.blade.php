<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD</title>
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
</head>
<body>
	<div class="container">
		<div class="body">
			<div class="card-body">
	<h3>Data Pegawai</h3>

	<a href="/pekerja/tambah"> + Tambah Pegawai Baru</a><br>
	<a href="/pekerja/all"> Pegawai pagination</a>
	<br/>
	<br/>

	<table class="table table-bordered">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a class="btn btn-warning btn-sm" href="/pekerja/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/pekerja/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	</div>
	</div>
	</div>
</body>
</html>