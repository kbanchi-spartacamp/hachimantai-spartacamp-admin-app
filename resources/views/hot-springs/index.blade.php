@extends('layout.common')
@section('title', 'Hot-Spring List')

@include('layout.header')

@section('content')
    <div class="container">
        <div class="border-bottom">
            <h1 class="h2">温泉一覧</h1>
        </div>
        <table class="table table-striped table-hover">
            <tr>
                <th>名前</th>
                <th>概要</th>
                <th>-</th>
                <th>-</th>
            </tr>
            @foreach ($hotsprings as $hotspring)
                <tr>
                    <td>
                        <a href="{{ route('hot-springs.show', $hotspring->id) }}">{{ $hotspring->name }}</a>
                    </td>
                    <td>{{ $hotspring->description }}</td>
                    <td>
                        <a href="{{ route('hot-springs.edit', $hotspring->id) }}" class="btn btn-primary">更新する</a>
                    </td>
                    <td>
                        <form action="{{ route('hot-springs.destroy', $hotspring->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="削除する" class="btn btn-danger"
                                onclick="if(!confirm('削除しますか？')){return false};">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="{{ route('hot-springs.create') }}" class="btn btn-success">新規登録</a>
    </div>
@endsection

@include('layout.sidebar')

@include('layout.footer')
