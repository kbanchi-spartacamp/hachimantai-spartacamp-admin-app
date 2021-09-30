@extends('layout.common')
@section('title', 'Hot-spring Spot Edit')

@include('layout.header')

@section('content')
    <div class="container">
        <div class="border-bottom">
            <h1 class="h2">温泉 一覧 更新</h1>
        </div>
        <form action="{{ route('hot-springs.update', $hotspring->id) }}" method="post">
            @csrf
            @method('PATCH')
            <label for="name" class="visually-hidden">Name</label>
            <input name="name" type="text" id="name" class="form-control" placeholder="Name" required autofocus
                value="{{ $hotspring->name }}">
            <label for="description" class="visually-hidden">Name</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                placeholder="Description" required>{{ $hotspring->description }}</textarea>
            <label for="image_url" class="visually-hidden">Name</label>
            <input name="image_url" type="text" id="image_url" class="form-control" placeholder="Image Url" required
                value="{{ $hotspring->image_url }}">
            <label for="hp_url" class="visually-hidden">Name</label>
            <input name="hp_url" type="text" id="hp_url" class="form-control" placeholder="Hp Url" required
                value="{{ $hotspring->hp_url }}">
            <input type="submit" value="更新" class="btn btn-primary">
            <a href="{{ route('hot-springs.index') }}" class="btn btn-secondary">戻る</a>
            <input type="hidden" name="latitude" id="latitude">
            <input type="hidden" name="longitude" id="longitude">
        </form>
        <div id="map" style="height:50vh;"></div>
    </div>
@endsection

@include('layout.sidebar')

@include('layout.footer')

@section('script')
    @include('partial.map')
    <script>
        const lat = document.getElementById('latitude');
        const lng = document.getElementById('longitude');
        @if (!empty($hotspring))
            const marker = L.marker([{{ $hotspring->latitude }}, {{ $hotspring->longitude }}], {
            draggable: true
            }).bindPopup("{{ $hotspring->name }}", {closeButton: false}).addTo(map);
            lat.value = {{ $hotspring->latitude }};
            lng.value = {{ $hotspring->longitude }};
            marker.on('dragend', function(e) {
            // 座標は、e.target.getLatLng()で取得
            lat.value = e.target.getLatLng()['lat'];
            lng.value = e.target.getLatLng()['lng'];
            });
        @endif
    </script>
@endsection
