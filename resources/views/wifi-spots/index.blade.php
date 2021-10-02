@extends('layout.common')
@section('title', 'Wi-Fi Spot List')

@include('layout.header')

@section('content')
    <div class="container">
        <div class="border-bottom">
            <h1 class="h2">Wi-Fi スポット 一覧</h1>
        </div>
        <div class="form-group mt-2 mb-2">
            <form class="d-flex my-2 my-lg-0" mechod="GET" action="{{ route('wifi-spots.index') }}">
                <input class="form-control mr-sm-2" type="search" name="name" placeholder="Name">
                <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Search">
            </form>
        </div>
        <table class="table table-striped table-hover">
            <tr>
                <th>名前</th>
                <th>概要</th>
                <th>-</th>
                <th>-</th>
            </tr>
            @foreach ($wifispots as $wifispot)
                <tr>
                    <td>
                        <a href="{{ route('wifi-spots.show', $wifispot->id) }}">{{ $wifispot->name }}</a>
                    </td>
                    <td>{{ $wifispot->description }}</td>
                    <td>
                        <a href="{{ route('wifi-spots.edit', $wifispot->id) }}" class="btn btn-primary">更新する</a>
                    </td>
                    <td>
                        <form action="{{ route('wifi-spots.destroy', $wifispot->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="削除する" class="btn btn-danger"
                                onclick="if(!confirm('削除しますか？')){return false};">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="d-flex justify-content-center">
            {{ $wifispots->links() }}
        </div>
        <a href="{{ route('wifi-spots.create') }}" class="btn btn-success">新規登録</a>
    </div>
@endsection

@include('layout.sidebar')

@include('layout.footer')
