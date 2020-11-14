@extends('layouts.Master')

@section('title',' Article ')

@section('content')
<div class="col-md-8">
	<h1 class="my-4">DAFTAR ARTIKEL</h1>
	<div class="card body"></div>
	<form action="/manage/update/{{$article->id}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{$article->id}}"></br>
		<div class="form-group">
			<label for="title">Judul</label>
			<input type="text" class="form-control"required="required" name="title" value="{{$article->title}}"></br>
		</div>
		<div class="form-group">
			<label for="content">Content</label>
			<input type="text" class="form-control"required="required" name="content" value="{{$article->content}}"></br>
		</div>
		<div class="form-group">
			<label for="imageurl">Feature_Image</label>
			<input type="file" class="form-control" required="required" name="image" value="{{$article->imageurl}}"></br>
			<img width="150px" src="{{asset('storage/'.$article->imageurl)}}">
		</div>
		<button type="submit" name="edit" class="btn btn-primary float-right" style="margin-bottom: 50px">Ubah Data</button></form>
	</div>