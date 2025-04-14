<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

            <form id="loginForm" class="form" action="{{ route('login') }}" method="POST">
                @csrf
                <h2>Login</h2>
                <input type="text" name="username" id="loginUsername" placeholder="Username" required>
                <input type="password" name="password" id="loginPassword" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>

            <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
        </div>
    </div>

    <script src={{ asset('js/login.js') }}></script>
</body>
</html>
