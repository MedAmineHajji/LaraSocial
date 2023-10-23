@extends('front_office.layout')

@section('content')
<div class="container">
    <h1>Event Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $event->title }}</h5>
            <p class="card-text"><strong>Description:</strong> {{ $event->description }}</p>
            <p class="card-text"><strong>Members:</strong> 32k Members</p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('events.index') }}" class="btn btn-primary">Back to Events</a>
    </div>
</div>
@endsection
