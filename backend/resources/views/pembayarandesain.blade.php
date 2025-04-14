<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Layanan</title>
    <link rel="stylesheet" href= {{ asset('css/pembayaran.css') }}>
</head>
<body>
    <div class="container">
        <div class="back">
        <a href={{ route('profiledesain') }}><i class="fa-solid fa-arrow-left"></i></a>
        </div>
        <h3 class="layanan">Pembayaran</h3>
        <div class="icon">
            <a href=""><i class="fa-regular fa-clock"></i></a>
            <a href=""><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <div class="container">
    <div class="profile">
      <img src={{ asset('img/kuyy.jpeg') }} alt="Profile picture of Katarina Astrid" width="60" height="60"/>
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
        <a href={{ route('dompetdesain') }}><button class="active">Dompet</button></a>
        <button>Kartu Kredit/Debit</button>
      </div>

      <div class="options">
        <div class="option">
          <img src={{ asset('img/bca.png') }} alt="BCA logo" width="100" height="30"/>
          <input type="radio" name="payment" value="bca"/>
        </div>
        <div class="option">
          <img src={{ asset('img/bsi.png') }} alt="BSI logo" width="100" height="30"/>
          <input type="radio" name="payment" value="bsi"/>
        </div>
        <div class="option">
          <img src={{ asset('img/bri.png') }} alt="Bank BRI logo" width="100" height="30"/>
          <input type="radio" name="payment" value="bri"/>
        </div>
        <div class="option">
          <img src={{ asset('img/bni.png') }} alt="BNI logo" width="100" height="30"/>
          <input type="radio" name="payment" value="bni"/>
        </div>
        <div class="option">
          <img src={{ asset('img/mandiri.png') }} alt="Mandiri logo" width="100" height="30"/>
          <input type="radio" name="payment" value="mandiri"/>
        </div>
      </div>
    </div>
  </div>

</body>
</html>

