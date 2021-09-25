@extends('layout.common')
@section('title', 'Wi-Fi Spot Edit')

@include('layout.header')

@section('content')
    <div class="container">
        <div class="border-bottom">
            <h1 class="h2">Wi-Fi スポット 更新</h1>
        </div>
        <form action="{{ route('wifi-spots.update', $wifispot->id) }}" method="post">
            @csrf
            @method('PATCH')
            <label for="name" class="visually-hidden">Name</label>
            <input name="name" type="text" id="name" class="form-control" placeholder="Name" required autofocus
                value="{{ $wifispot->name }}">
            <label for="description" class="visually-hidden">Name</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                placeholder="Description" required>{{ $wifispot->description }}</textarea>
            <label for="image_url" class="visually-hidden">Name</label>
            <input name="image_url" type="text" id="image_url" class="form-control" placeholder="Image Url" required
                value="{{ $wifispot->image_url }}">
            <label for="hp_url" class="visually-hidden">Name</label>
            <input name="hp_url" type="text" id="hp_url" class="form-control" placeholder="Hp Url" required
                value="{{ $wifispot->hp_url }}">
            <input type="submit" value="更新" class="btn btn-primary">
            <a href="{{ route('wifi-spots.index') }}" class="btn btn-secondary">戻る</a>
        </form>
    </div>
@endsection

@include('layout.sidebar')

@include('layout.footer')
