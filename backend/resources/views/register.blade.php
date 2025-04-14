<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href={{ asset('css/login.css') }}>
</head>
<body>
    <div class="container">
        <div class="form-container">
            @if (session('success'))
                <div>{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="registerForm" class="form" action="{{ route('register') }}" method="POST">
                @csrf
                <h2>Register</h2>
                <input type="text" name="username" id="regUsername" placeholder="Username" required>
                <input type="email" name="email" id="regEmail" placeholder="Email" required>
                <input type="password" name="password" id="regPassword" placeholder="Password" required>
                <input type="password" name="password_confirmation" id="regPasswordConfirm" placeholder="Konfirmasi Password" required>
                <input class="button" type="submit" value="Register">
            </form>

            <p>Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
        </div>
    </div>

    <script src={{ asset('js/login.js') }}></script>
</body>
</html>
