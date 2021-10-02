<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
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
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <img class="mb-4" alt="arinchan"
                src="https://assets.st-note.com/production/uploads/images/59047700/rectangle_large_type_2_1f3d3c2e3ff3ee8245f346892f53d9ff.jpg"
                width="250px" height="150px">
            <h1 class="h3 mb-3 fw-normal">Sign Up</h1>
            <div class="form-group row">
                <label for="name" class="visually-hidden">Name</label>
                <div class="col-md-12">
                    <input name="name" type="text" id="name" class="form-control" placeholder="Name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="visually-hidden">Email</label>
                <div class="col-md-12">
                    <input name="email" type="email" id="email" class="form-control" placeholder="Email"
                        value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="visually-hidden">Password</label>
                <div class="col-md-12">
                    <input name="password" type="password" id="password" class="form-control" placeholder="Password"
                        required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="password-confirm" class="visually-hidden">Password(Confirm)</label>
                <div class="col-md-12">
                    <input name="password_confirmation" type="password" id="password-confirm" class="form-control"
                        placeholder="Password(Confirm)" required autocomplete="new-password">
                </div>
            </div>
            <div>
                <input type="submit" class="w-100 btn btn-lg btn-primary" value="Sign Up">
                <a class="w-100 btn btn-lg btn-link" href="{{ route('login') }}">Back</a>
            </div>
        </form>
    </main>
</body>

</html>
