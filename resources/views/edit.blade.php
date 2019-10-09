<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD</title>
</head>
<body>

	<h3>Edit Pegawai</h3>

	<a href="/pekerja"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pekerja/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>