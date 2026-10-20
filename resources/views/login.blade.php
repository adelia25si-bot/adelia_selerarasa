<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Selera Rasa</title>
    <link href="{{ asset('assets-guest/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.partials.guest-navbar')

    <div class="container py-5" style="max-width: 500px;">
        <h2>Login</h2>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ url('/auth') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    @include('layouts.partials.guest-footer')
</body>
</html>
