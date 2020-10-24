@extends('layouts.Master')

@section('title',' Article ')

@section('content')
<div class="col-md-8">
	<h1 class="my-4">DAFTAR ARTIKEL</h1>


	<div class="card body"></div>
	<form action="/manage/create" method="post">
		@csrf
		<div class="form-group">
			<label for="title">Judul</label>
			<input type="text" class="form-control"
			required="required" name="title"></br>
		</div>
		<div class="form-group">
			<label for="content">Content</label>
			<input type="text" class="form-control"
			required="required" name="content"></br>
		</div>
		<div class="form-group">
			<label for="imageurl">Feature Image</label>
			<input type="text" class="form-control"
			required="required" name="imageurl"></br>
		</div>
		<button type="submit"  name="add" class="btn btn-primary control" style="margin-bottom: 40px">Tambah Data</button>
	</form>
</div>