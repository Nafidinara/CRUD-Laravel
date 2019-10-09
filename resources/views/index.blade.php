<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD</title>
</head>
<body>

	<h3>Data Pegawai</h3>

	<a href="/pekerja/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>

	<table border="1">
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
				<a href="/pekerja/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pekerja/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>