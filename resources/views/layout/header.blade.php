@section('header')
    <nav class="navbar navbar-expand-lg navbar-light bg-dark mb-2">
        <a class="navbar-brand logo text-white" href="/top">八幡平Web運営</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link text-light" href="/top">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="POST" action="{{ route('logout') }}">
                @csrf
                <span class="mr-sm-2 text-light">{{ Auth::user()->name }}</span>
                <input class="btn btn-outline-danger my-2 my-sm-0 text-light" type="submit" value="{{ __('Logout') }}">
            </form>
        </div>
    </nav>
@endsection
