<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Layanan</title>
    <link rel="stylesheet" href="{{ asset('css/dompet.css') }}">
</head>

<body>
    <div class="container">
        <div class="back">
            <a href="{{ route('profilebumbu') }}"><i class="fa-solid fa-arrow-left"></i></a>
        </div>
        <h3 class="layanan">Pembayaran</h3>
        <div class="icon">
            <a href=""><i class="fa-regular fa-clock"></i></a>
            <a href=""><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <div class="container">
        <div class="profile">
            <img src="{{ asset('img/kuyy.jpeg') }}" alt="Profile picture of Katarina Astrid" width="60" height="60" />
            <div class="info">
                <h2>Katarina Astrid</h2>
                <p>Jasa pendaftaran Izin BPOM</p>
            </div>
        </div>

        <div class="details">
            <p>Biaya Sesi 30 Menit</p>
            <p>Pembayaranmu</p>

            <div class="money">
                <p>Rp250.000</p>
                <p>Rp250.000</p>
            </div>
        </div>

        <div class="payment-method">
            <p>Pilih Metode Pembayaran</p>
            <div class="tabs">
                <button class="active">Dompet</button>
                <a href={{ route('pembayaranbumbu') }}><button>Kartu Kredit/Debit</button></a>
            </div>

            <div class="options">
                <div class="option">
                    <i class="fa-solid fa-wallet" style="margin-right: 10px; color:red"></i> <!-- Ikon dompet -->
                    <span class="saldo-text">Saldo anda:Rp 300.000</span> <!-- Teks saldo anda yang dimodifikasi -->
                    <input type="radio" name="payment" value="bca" />
                </div>
                <div class="option">
                    <img src={{ asset('img/danaa.png') }} alt="Dana" width="100" height="30" />
                    <input type="radio" name="payment" value="dana" />
                </div>
                <div class="option">
                    <img src={{ asset('img/gopay.png') }} alt="Gopay" width="100" height="30" />
                    <input type="radio" name="payment" value="gopay" />
                </div>

            </div>
        </div>
    </div>
</body>

</html>
