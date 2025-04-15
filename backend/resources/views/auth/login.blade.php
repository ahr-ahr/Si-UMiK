<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    @if ($errors->any())
        <div style="color: red;">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ url('/login') }}">
        @csrf
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label>
            <input type="checkbox" name="remember"> Remember Me
        </label>

        <button type="submit">Login</button>
    </form>

    <p>Belum punya akun? <a href="{{ url('/register') }}">Daftar di sini</a></p>
    <p>Lupa password akun? <a href="{{ route('password.request') }}">Reset password di sini</a></p>
</body>
</html>
