<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel</title>
</head>
<body>
 
	<h1>Tutorial Laravel</h1>

    <h4>passing data dari controller ke view</h4>
    <h1>Nama : {{$nama}}</h1>
    <h3>Mata Pelajaran</h3>
    <ul>
      @foreach($mapel as $mpl)
      <li>{{$mpl}}</li>
      @endforeach
    </ul>
</body>
</html>