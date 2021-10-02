@extends('layout.common')
@section('title', 'Wi-Fi Spot Create')

@include('layout.header')

@section('content')
    <div class="container">
        <div class="border-bottom">
            <h1 class="h2">Wi-Fi スポット 登録</h1>
        </div>
        <form action="{{ route('wifi-spots.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name" class="visually-hidden">Name</label>
                <input name="name" type="text" id="name" class="form-control" placeholder="Name" required autofocus>
            </div>
            <div class="form-group">
                <label for="description" class="visually-hidden">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                    placeholder="Description" required></textarea>
            </div>
            <div class="form-group">
                <label for="image" class="visually-hidden">Image</label>
                <input type="file" name="image" id="image" class="form-control" placeholder="Image" required
                    onchange="previewImage(this);">
                <img id="preview" style="max-width:200px;">
            </div>
            <div class="form-group">
                <label for="hp_url" class="visually-hidden">Hp Url</label>
                <input name="hp_url" type="text" id="hp_url" class="form-control" placeholder="Hp Url" required>
            </div>
            <div class="form-group">
                <label for="map" class="visually-hidden">Map</label>
                <input type="hidden" name="latitude" id="latitude">
                <input type="hidden" name="longitude" id="longitude">
                <div id="map" style="height:50vh;"></div>
            </div>
            <input type="submit" value="登録" class="btn btn-success">
            <a href="{{ route('wifi-spots.index') }}" class="btn btn-secondary">戻る</a>
        </form>
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
    <script>
        function previewImage(obj) {
            var fileReader = new FileReader();
            fileReader.onload = (function() {
                document.getElementById('preview').src = fileReader.result;
            });
            fileReader.readAsDataURL(obj.files[0]);
        }
    </script>
@endsection
