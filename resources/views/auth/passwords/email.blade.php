<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>ForgetPassword</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="text-center">
    <main class="form-signin">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <img class="mb-4" alt="arinchan" src="https://assets.st-note.com/production/uploads/images/59047700/rectangle_large_type_2_1f3d3c2e3ff3ee8245f346892f53d9ff.jpg" width="250px" height="150px">
            <h1 class="h3 mb-3 fw-normal">If you forget your password...</h1>
            <div class="form-group row">
                <label for="email" class="visually-hidden">Email</label>
                <div class="col-md-12">
                </div>
                <input name="email" type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                    placeholder="Email" value="{{ old('email') }}" required autofocus autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <input type="submit" class="w-100 btn btn-lg btn-primary" value="Send Password Reset Link">
                <a class="w-100 btn btn-lg btn-link" href="{{ route('login') }}">Back</a>
            </div>
        </form>
    </main>
</body>

</html>
