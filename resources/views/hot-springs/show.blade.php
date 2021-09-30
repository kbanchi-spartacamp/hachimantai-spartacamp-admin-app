@extends('layout.common')
@section('title', 'Hot-spring Spot Show')

@include('layout.header')

@section('content')
    <div class="container">
        <div class="border-bottom">
            <h1 class="h2">{{ $hotspring->name }}</h1>
        </div>
        <div>
            {{ $hotspring->description }}
        </div>
        <div>
            <img src="{{ $hotspring->image_url }}" width="400px" height="400px">
        </div>
        <div>
            <a href="{{ $hotspring->hp_url }}" class="btn btn-outline-secondary" target="_blank">公式HP</a>
            <a href="{{ route('hot-springs.index') }}" class="btn btn-secondary">戻る</a>
        </div>
        <div id="map" style="height:50vh;"></div>
    </div>
@endsection

@include('layout.sidebar')

@include('layout.footer')

@section('script')
    @include('partial.map')
    <script>
        @if (!empty($hotspring))
            L.marker([{{ $hotspring->latitude }},{{ $hotspring->longitude }}])
            .bindPopup('<a href="{{ $hotspring->hp_url }}" target="_blank">{{ $hotspring->name }}</a>', {closeButton: false})
            .addTo(map);
        @endif
    </script>
@endsection
