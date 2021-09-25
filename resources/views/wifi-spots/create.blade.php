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
        </form>
    </div>
@endsection

@include('layout.sidebar')

@include('layout.footer')
