@extends('layouts.Master')

@section('title', 'Home')
    
@section('content')
    

<!-- Page Content -->
<div class="container">
  
    <div class="row">
      <!-- Blog Entries Column -->
      <div class="col-md-8">
  
        <h1 class="my-4" style="margin-bottom: 5%">Kumpulan Data Film Biokop</h1>
        <div class="card-footer" style="background-color: #ADD8E6" > by
                <a href="#">Umi Nur</a>
            </div>
  
        <!-- Blog Post -->
        @foreach ($article as $artic)
        <div class="card mb-4">
            <img class="card-img-top" src="{{$artic->imageurl}}" alt="Card image cap">
            <div class="card-body" style="background-color: #F0FFFF">
                <h2 class="card-title">{{ $artic->title }}</h2>
            <p class="card-text">{{ Str::limit($artic->content, 100, '...') }}</p>
                <a href="{{ './article/'.$artic->id }}" class="btn btn-primary">Lihat Artikel&rarr;</a>
            </div>
            <div class="card-footer text-muted" style="background-color: #ADD8E6">
                Posted on 04 October, 2020 by
                <a href="#">Umi Nur</a>
            </div>
        </div>
        @endforeach
  
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>
      </div>
  
      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
  
        <!-- Search Widget -->
        <div class="card my-4" style="background-color: #F0FFFF">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">send</button>
              </span>
            </div>
          </div>
        </div>
  
        <!-- Categories Widget -->
        <div class="card my-4" style="background-color: #F0FFFF">
          <h5 class="card-header">FILM INDONESIA</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <img class="card-img-top" src="https://awsimages.detik.net.id/visual/2019/12/31/4bfb3058-5b94-441d-9f25-f188d2229ebb_169.jpeg?w=650" alt="Card image cap">
                    <img class="card-img-top" src="https://awsimages.detik.net.id/visual/2019/12/31/9189007c-c694-4855-a4c6-f65152e640bf.jpeg?w=650" alt="Card image cap">
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Side Widget -->
        <div class="card my-4" style="background-color: #F0FFFF">
          <h5 class="card-header">FILM KU</h5>
          <div class="card-body">
            Film Indonesia Terbaik, Sudah Nonton Semuanya? YOK NONTON YOK :)
        </div>
  
      </div>
  
    </div>
    <!-- /.row -->
  
  </div>
  @endsection