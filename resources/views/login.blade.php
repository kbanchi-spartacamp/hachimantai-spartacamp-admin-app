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
        <form action="#" method="POST">
            <img class="mb-4" alt="arinchan"
                src="https://assets.st-note.com/production/uploads/images/59047700/rectangle_large_type_2_1f3d3c2e3ff3ee8245f346892f53d9ff.jpg"
                width="250px" height="150px">
            <h1 class="h3 mb-3 fw-normal">Login</h1>
            <label for="loginName" class="visually-hidden">Name</label>
            <input name="username" type="text" id="loginName" class="form-control" placeholder="Name" required
                autofocus>
            <label for="loginPassword" class="visually-hidden">Password</label>
            <input name="password" type="password" id="loginPassword" class="form-control" placeholder="Password"
                required>
            <div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                <a class="w-100 btn btn-lg btn-link" href="#">Sign Up</a>
                <a class="w-100 btn btn-lg btn-link" href="#">If you forget your password...</a>
            </div>
        </form>
    </main>
</body>

</html>
