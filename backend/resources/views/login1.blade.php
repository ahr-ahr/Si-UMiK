<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="" method="POST">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>
                </div>

                <!-- Checklist Remember Me -->
                <div class="input-group checklist-group">
                    <input type="checkbox" id="remember" name="remember" value="1">
                    <label for="remember">Ingat Saya</label>
                </div>
                <button type="submit" class="btn-login">Login</button>
            </form>

            <p class="register-link">
                Belum punya akun? <a href="{{ route('registrasi') }}">Daftar di sini</a>
            </p>
        </div>
    </div>
</body>
</html>
