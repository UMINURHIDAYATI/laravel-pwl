@extends('layouts.Master')

@section('title',' Article ')

@section('content')
<div class="container">
<div class="col-md-8">
	<h1 class="my-4">DAFTAR ARTIKEL</h1>

	

	<div class="card body"></div>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Judul</th>
					<th>Tanggal</th>
				</tr>
			</thead>
			<tbody>
				@foreach($article as $a)
				<tr>
					<td>{{$a->id}}</td>
					<td>{{$a->title}}</td>
					<td>{{$a->created_at}}
					</td>
					<td>
						<a href="manage/edit/{{ $a->id }}" class="badge badge-warning">Edit</a>
						<a href="manage/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a>
					</td>
				</tr>
			</div>
			@endforeach
		</tbody>
	</table>
	<a href="manage/add" class="btn btn-primary" style="margin-bottom: 40px">Tambah Data</a>
</div>
</div>