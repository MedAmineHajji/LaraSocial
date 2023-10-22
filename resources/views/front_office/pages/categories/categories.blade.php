@extends('front_office.layout')

@section('content')

    <div class="form-group">	
			<select>
            @foreach ($categories as $category)
				<option value="category">{{ $category->name }}</option>
            @endforeach
			</select>
		</div>
@endsection