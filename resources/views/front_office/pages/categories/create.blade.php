@extends('front_office.layout')

@section('content')

<div class="container">
    <h1>Create Categorie</h1>

    <form method="POST" action="{{ route('categories.store') }}">
        @csrf <!-- CSRF token -->
        
        <!-- Name -->
        <div class="form-group">
            <input type="text"  id="name" name="name" value="{{ old('name') }}" required>
            <label for="name">Name</label>
            <i class="mtrl-select"></i>
        </div>

        <!-- Description -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
            <i class="mtrl-select"></i>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection