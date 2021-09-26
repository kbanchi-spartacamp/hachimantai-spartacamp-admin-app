@section('header')
    <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm">
        <a href="/top" class="h5 my-0 me-md-auto fw-normal navbar-brand text-white">八幡平スパルタキャンプWeb 運営</a>
        <nav class="my-2 my-md-0 me-md-3">
            <span class="p-2 text-dark"></span>
        </nav>
        <form action="/logout" method="post">
            <input class="btn text-light" type="submit" value="ログアウト" />
        </form>
    </header>
@endsection
