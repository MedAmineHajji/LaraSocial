@extends('blogs.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Blogs</div>
  <div class="card-body">
       
      <form action="{{ url('blog') }}" method="post">
        {!! csrf_field() !!}
        <label>Titre</label></br>
        <input type="text" name="titre" id="titre" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>Contenu</label></br>
        <input type="text" name="contenu" id="contenu" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop