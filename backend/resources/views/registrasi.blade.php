<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Daftar</h2>
            <form action="" method="POST">
                <div class="input-group">
                    <label for="name">Nama Lengkap:</label>
                    <input type="name" id="name" name="name" placeholder="Masukan nama lengkap" required>
                    <div class="input-group">
                        <label for="email"> Masukan Email:</label>
                        <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Masukan Password:</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan password Anda"
                            required>
                    </div>
                    <button type="submit" class="btn-login">Login</button>
            </form>

        </div>
     </div>


</body>
</html>
