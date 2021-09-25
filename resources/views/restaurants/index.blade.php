@extends('layout.common')
@section('title', 'Restaurant List')

@include('layout.header')

@section('content')
    <div class="container">
        <div class="border-bottom">
            <h1 class="h2">飲食店 一覧</h1>
        </div>
        <table class="table table-striped table-hover">
            <tr>
                <th>名前</th>
                <th>概要</th>
                <th>-</th>
                <th>-</th>
            </tr>
            @foreach ($restaurants as $restaurant)
                <tr>
                    <td>
                        <a href="{{ route('restaurants.show', $restaurant->id) }}">{{ $restaurant->name }}</a>
                    </td>
                    <td>{{ $restaurant->description }}</td>
                    <td>
                        <a href="{{ route('restaurants.edit', $restaurant->id) }}" class="btn btn-primary">更新する</a>
                    </td>
                    <td>
                        <form action="{{ route('restaurants.destroy', $restaurant->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="削除する" class="btn btn-danger"
                                onclick="if(!confirm('削除しますか？')){return false};">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="{{ route('restaurants.create') }}" class="btn btn-success">新規登録</a>
    </div>
@endsection

@include('layout.sidebar')

@include('layout.footer')
