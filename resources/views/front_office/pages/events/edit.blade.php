@extends('front_office.layout')

@section('content')
<div class="container">
    <h1>Edit Event</h1>

    <form method="POST" action="{{ route('events.update', $event->id) }}">
        @csrf <!-- CSRF token -->
        @method('PUT') <!-- Use PUT method for updating -->

        <!-- Name -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}" required>
        </div>

        <!-- Description -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $event->description }}</textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection