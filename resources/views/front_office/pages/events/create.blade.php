@extends('front_office.layout')

@section('content')

<div class="container">
    <h1>Create Event</h1>

    <form method="POST" action="{{ route('events.store') }}">
        @csrf <!-- CSRF token -->
        
        <!-- Title -->
        <div class="form-group">
            <input type="text"  id="title" name="title" value="{{ old('title') }}" required>
            <label for="title">Title</label>
            <i class="mtrl-select"></i>
        </div>

        <!-- Description -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
            <i class="mtrl-select"></i>
        </div>
        <div class="form-group">	
			<select class="form-control" id="category" name="category_id">
            @foreach ($categories as $category)
				<option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
			</select>
            <i class="mtrl-select"></i>
		</div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection