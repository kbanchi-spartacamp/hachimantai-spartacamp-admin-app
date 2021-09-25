@extends('layout.common')
@section('title', 'Restaurant Show')

@include('layout.header')

@section('content')
    <div class="container">
        <div class="border-bottom">
            <h1 class="h2">{{ $restaurant->name }}</h1>
        </div>
        <div>
            {{ $restaurant->description }}
        </div>
        <div>
            <img src="{{ $restaurant->image_url }}" width="400px" height="400px">
        </div>
        <div>
            <a href="{{ $restaurant->hp_url }}" class="btn btn-outline-secondary" target="_blank">公式HP</a>
            <a href="{{ route('restaurants.index') }}" class="btn btn-secondary">戻る</a>
        </div>
    </div>
@endsection

@include('layout.sidebar')

@include('layout.footer')
