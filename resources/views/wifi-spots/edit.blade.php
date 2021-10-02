@extends('layout.common')
@section('title', 'Wi-Fi Spot Edit')

@include('layout.header')

@section('content')
    <div class="container">
        <div class="border-bottom">
            <h1 class="h2">Wi-Fi スポット 更新</h1>
        </div>
        <form action="{{ route('wifi-spots.update', $wifispot->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name" class="visually-hidden">Name</label>
                <input name="name" type="text" id="name" class="form-control" placeholder="Name" required autofocus
                    value="{{ $wifispot->name }}">
            </div>
            <div class="form-group">
                <label for="description" class="visually-hidden">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                    placeholder="Description" required>{{ $wifispot->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="image" class="visually-hidden">Image</label>
                <input type="file" name="image" id="image" class="form-control" placeholder="Image" required
                    onchange="previewImage(this);">
                <img id="preview" src="{{ Storage::disk('public')->url($wifispot->image_url) }}" style="max-width:200px;">
            </div>
            <div class="form-group">
                <label for="hp_url" class="visually-hidden">Hp URL</label>
                <input name="hp_url" type="text" id="hp_url" class="form-control" placeholder="Hp Url" required
                    value="{{ $wifispot->hp_url }}">
            </div>
            <div class="form-group">
                <label for="map" class="visually-hidden">Map</label>
                <input type="hidden" name="latitude" id="latitude">
                <input type="hidden" name="longitude" id="longitude">
                <div id="map" style="height:50vh;"></div>
            </div>
            <input type="submit" value="更新" class="btn btn-primary">
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
        @if (!empty($wifispot))
            const marker = L.marker([{{ $wifispot->latitude }}, {{ $wifispot->longitude }}], {
            draggable: true
            }).bindPopup("{{ $wifispot->name }}", {closeButton: false}).addTo(map);
            lat.value = {{ $wifispot->latitude }};
            lng.value = {{ $wifispot->longitude }};
            marker.on('dragend', function(e) {
            // 座標は、e.target.getLatLng()で取得
            lat.value = e.target.getLatLng()['lat'];
            lng.value = e.target.getLatLng()['lng'];
            });
        @endif
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
