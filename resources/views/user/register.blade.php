<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <section class="w-50 mx-auto">
        <div class="w-50 mx-auto mt-5 pt-5">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class="mb-2" for="name"> Name</label>
                    <input type="text" id="name" class="form-control" value="{{ old('name') }}" name="name" />
                    @error('name')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="mb-2" for="email"> Email</label>
                    <input type="text" id="email" class="form-control" value="{{ old('email') }}" name="email" />
                    @error('email')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="mb-2" for="password">Password </label>
                    <input type="password" id="password" class=" form-control" value="" name="password" />
                    @error('password')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="mb-2" for="password_confirmation"> Confirm Password </label>
                    <input type="password" id="password_confirmation" class="form-control" value="" name="password_confirmation" />
                    @error('password_confirmation')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="radio" id="role-admin" class="form-radio mr-2" name="role" value="admin"> <label for="role-admin">Admin</label>
                    <input type="radio" id="role-staff" class="form-radio mr-2" name="role" value="staff"> <label for="role-staff">Staff</label>
                    @error('role')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-3 text-center">
                    <button type="submit" class="btn btn-sm btn-primary">
                        Sign up
                    </button>
                </div>
            </form>
            <div class="text-center">
                <p>Already have an account? <a href="{{ route('user.login') }}">Sign in</a></p>
            </div>
        </div>
    </section>

</body>

</html>