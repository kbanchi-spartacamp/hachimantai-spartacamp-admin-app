<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="./css/common.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="text-center">
    <main class="form-signin">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <img class="mb-4" alt="arinchan" src="https://assets.st-note.com/production/uploads/images/59047700/rectangle_large_type_2_1f3d3c2e3ff3ee8245f346892f53d9ff.jpg" width="250px" height="150px">
            <h1 class="h3 mb-3 fw-normal">Login</h1>
            <label for="email" class="visually-hidden">Email</label>
            <input name="email" type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                placeholder="Email" value="{{ old('email') }}" required autofocus autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="password" class="visually-hidden">Password</label>
            <input name="password" type="password" id="password"
                class="form-control @error('password') is-invalid @enderror" placeholder="Password" required
                autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            <div>
                <input type="submit" class="w-100 btn btn-lg btn-primary" value="Login">
                <a class="w-100 btn btn-lg btn-link" href="{{ route('register') }}">Sign Up</a>
                @if (Route::has('password.request'))
                    <a class="w-100 btn btn-lg btn-link" href="{{ route('password.request') }}">
                        {{ __('If you forget your password...') }}
                    </a>
                @endif
            </div>
        </form>
    </main>
</body>

</html>
