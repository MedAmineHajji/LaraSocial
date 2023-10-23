@extends('blogs.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Blogs Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Titre : {{ $blogs->titre }}</h5>
        <p class="card-text">Description : {{ $blogs->description }}</p>
        <p class="card-text">Contenu : {{ $blogs->contenu }}</p>
  </div>
    </hr>
  </div>
</div>