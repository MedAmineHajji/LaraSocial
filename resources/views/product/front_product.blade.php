@extends('layouts.app')
@section('title')
    Notice |
@endsection
@php
    $menu = 'Product';
    $rightbarImage = 'notice.png';
@endphp

@section('content')
    <div class="row">
        {{-- Left section started --}}
        <div class="d-none d-lg-block col-lg-3 py-md-4 scroll">

            @include('layouts.includes.leftbar')
        </div>
        {{-- Left section ended --}}
        <div class="col-lg-6 col-md-8 py-md-4 pt-4 scroll justify-content-center d-flex">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Products') }}</div>

                    <div class="card-group m-auto">
                        @foreach ($products as $product)
                            <div class="card m-3" style="width: 18rem;">
                                <img class="card-img-top" src="{{ url('storage/' . $product->image) }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">{{ $product->name }}</p>
                                    
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for add notice -->
        

    </div>
@endsection
