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
            <img src="{{ Storage::disk('public')->url($wifispot->image_url) }}" class="square-img" width="400px"
                height="400px">
        </div>
        <div>
            <a href="{{ $wifispot->hp_url }}" class="btn btn-outline-secondary" target="_blank">公式HP</a>
            <a href="{{ route('wifi-spots.index') }}" class="btn btn-secondary">戻る</a>
        </div>
        <div id="map" style="height:50vh;"></div>
    </div>
@endsection

@include('layout.sidebar')

@include('layout.footer')

@section('script')
    @include('partial.map')
    <script>
        @if (!empty($wifispot))
            L.marker([{{ $wifispot->latitude }},{{ $wifispot->longitude }}])
            .bindPopup('<a href="{{ $wifispot->hp_url }}" target="_blank">{{ $wifispot->name }}</a>', {closeButton: false})
            .addTo(map);
        @endif
    </script>
@endsection
