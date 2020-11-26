@extends('layouts.Master')

@section('title',' Article ')

@section('content')
<div class="container">
<div class="col-md-8">
	<h1 class="my-4">DAFTAR USER</h1>

	

	<div class="card body"></div>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				@foreach($user as $a)
				<tr>
					<td>{{$a->id}}</td>
					<td>{{$a->name}}</td>
					<td>{{$a->email}}
					</td>
					<td>
						<a href="manageuser/edit/{{ $a->id }}" class="badge badge-warning">Edit</a>
						<a href="manageuser/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a>
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>
		<a href="manageuser/add" class="btn btn-primary" style="margin-bottom: 40px">Tambah Data</a>
		<a href="/manageuser/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
	</div>
</div>