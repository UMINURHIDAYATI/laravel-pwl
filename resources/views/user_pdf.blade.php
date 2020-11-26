<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Artikel</h4>
		</center>
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Foto</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($user as $a)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$a->nama}}</td>
					<td>{{$a->email}}</td>
					<td><img width="150px" src="{{('storage/'.$a->imageurl)}}"></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</body>
	</html>