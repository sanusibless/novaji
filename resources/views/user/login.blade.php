<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <section class="w-50 mx-auto mt-5">
        <div class="w-50 mx-auto mt-5">
            <form action="{{ route('user.authenticate') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class="mb-2" for="email">Email</label>
                    <input type="text" id="email" class="form-control" name="email" />
                </div>
                <div class="form-group mb-3">
                    <label class="mb-2" for="password">Password</label>
                    <input type="password" id="password" class=" form-control" name="password" />
                </div>
                <div class="text-center mb-3">
                    <button type="submit" class="btn btn-sm btn-primary">
                        Sign in
                    </button>
                </div>
            </form>
            <div class="text-center">
                <p>Don't have an account? <a href="{{ route('user.register') }}">Sign Up</a></p>
            </div>
        </div>
    </section>

</body>

</html>