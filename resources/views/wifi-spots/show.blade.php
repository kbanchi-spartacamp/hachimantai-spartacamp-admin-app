@extends('layout.common')
@section('title', 'Wi-Fi Spot Show')

@include('layout.header')

@section('content')
    <div class="container">
        <div class="border-bottom">
            <h1 class="h2">{{ $wifispot->name }}</h1>
        </div>
        <div>
            {{ $wifispot->description }}
        </div>
        <div>
            <img src="{{ $wifispot->image_url }}" width="400px" height="400px">
        </div>
        <div>
            <a href="{{ $wifispot->hp_url }}" class="btn btn-outline-secondary" target="_blank">公式HP</a>
            <a href="{{ route('wifi-spots.index') }}" class="btn btn-secondary">戻る</a>
        </div>
    </div>
@endsection

@include('layout.sidebar')

@include('layout.footer')
