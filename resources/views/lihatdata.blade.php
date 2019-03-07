<!DOCTYPE html>
<html>
<head>
 <title>Lihat Data</title>
</head>
<body>
<table border="2px
">
<tr>
<td>Kategori</td><td>Deskripsi</td><td>tanggal</td>
</tr>
@foreach($liat as $li)
<tr>
<td>{{ $li->kategory }}</td>
<td>{{ $li->deskripsi }}</td>
<td>{{ $li->tanggal }}</td>
</tr>
@endforeach
</table>

</body>
</html>