@extends('layouts.Master')

@section('title',' Article ')

@section('content')
<div class="col-md-8">
	<h1 class="my-4">DAFTAR USER</h1>
	<div class="card body"></div>
	<form action="/manageuser/update/{{$user->id}}" method="post">
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{$user->id}}"></br>
		<div class="form-group">
			<label for="title">No</label>
			<input type="text" class="form-control"required="required" name="title" value="{{$user->id}}"></br>
		</div>
		<div class="form-group">
			<label for="content">Nama</label>
			<input type="text" class="form-control"required="required" name="content" value="{{$user->name}}"></br>
		</div>
		<div class="form-group">
			<label for="imageurl">Feature_Image</label>
			<select name="roles" class="form-control" id="exampleFormControllerSelect1">
				<option value="Administrator">Administrator</option>
				<option value="User">User</option>
			</select>
		</div>
		<button type="submit" name="edit" class="btn btn-primary float-right" style="margin-bottom: 50px">Ubah Data</button></form>
	</div>