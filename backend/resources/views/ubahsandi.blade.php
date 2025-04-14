<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atur ulang sandi</title>
    <link rel="stylesheet" href="{{ asset('css/aturulang.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Ubah Kata Sandi</h2>
            <form action="" method="POST">
                <div class="input-group">
                    <label for="email">Masukan Email:</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                </div>
                <div class="input-group">
                    <label for="password">Kata sandi lama:</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                </div>
                <div class="input-group">
                    <label for="password">Kata sandi baru:</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                </div>
                <div class="input-group">
                    <label for="password">Konfirmasi kata sandi:</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan ulang password" required>
                </div>
                <button type="submit" class="btn-login">Atur ulang sandi</button>
            </form>

        </div>
    </div>
</body>
</html>
