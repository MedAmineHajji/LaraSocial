@extends('blogs.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Blog</div>
  <div class="card-body">
       
      <form action="{{ url('blog/' .$blogs->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$blogs->id}}" id="id" />
        <label>Titre</label></br>
        <input type="text" name="titre" id="titre" value="{{$blogs->titre}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" value="{{$blogs->description}}" class="form-control"></br>
        <label>Contenu</label></br>
        <input type="text" name="contenu" id="contenu" value="{{$blogs->contenu}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop