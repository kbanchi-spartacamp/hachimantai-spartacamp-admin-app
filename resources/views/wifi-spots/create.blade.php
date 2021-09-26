@extends('layout.common')
@section('title', 'Wi-Fi Spot Create')

@include('layout.header')

@section('content')
    <div class="container">
        <div class="border-bottom">
            <h1 class="h2">Wi-Fi スポット 登録</h1>
        </div>
        <form action="{{ route('wifi-spots.store') }}" method="post">
            @csrf
            <label for="name" class="visually-hidden">Name</label>
            <input name="name" type="text" id="name" class="form-control" placeholder="Name" required autofocus>
            <label for="description" class="visually-hidden">Name</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                placeholder="Description" required></textarea>
            <label for="image_url" class="visually-hidden">Name</label>
            <input name="image_url" type="text" id="image_url" class="form-control" placeholder="Image Url" required>
            <label for="hp_url" class="visually-hidden">Name</label>
            <input name="hp_url" type="text" id="hp_url" class="form-control" placeholder="Hp Url" required>
            <input type="submit" value="登録" class="btn btn-success">
            <a href="{{ route('wifi-spots.index') }}" class="btn btn-secondary">戻る</a>
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
        let clicked;
        map.on('click', function(e) {
            if (clicked !== true) {
                clicked = true;
                const marker = L.marker([e.latlng['lat'], e.latlng['lng']], {
                    draggable: true
                }).addTo(map);
                lat.value = e.latlng['lat'];
                lng.value = e.latlng['lng'];
                marker.on('dragend', function(e) {
                    // 座標は、e.target.getLatLng()で取得
                    lat.value = e.target.getLatLng()['lat'];
                    lng.value = e.target.getLatLng()['lng'];
                });
            }
        });
    </script>
@endsection
