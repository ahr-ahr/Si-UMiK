<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daging</title>
    <link rel="stylesheet" href="{{ asset('css/daging.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="back">
            <a href="{{ route('bahan') }}"><i class="fa-solid fa-arrow-left"></i></a>
        </div>
        <h3 class="layanan">Daging</h3>
        <div class="icon">
            <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
            <a href=""><i class="fa-regular fa-clock"></i></a>
            <a href=""><i class="fa-regular fa-user"></i></a>
        </div>
    </div>

    <div class="search-container">
        <input
        type="text"
        id="search-input"
        class="search-input"
        placeholder="Cari produk..."
        onkeyup="searchProduct()"
        />
    </div>

    <div class="products">
        <!-- First batch of products -->
        <div class="product">
            <img src="{{ asset('img/ayam1.jpeg') }}" alt="Daging Ayam">
            <h3>1 Ekor Ayam</h3>
            <p>Rp 69.000</p>
            <p class="stock">stock:1</p>
            <button class="add-to-cart" data-name="Produk 1" data-price="69000"  data-stock="1">Tambahkan ke Keranjang</button>
        </div>
        <div class="product">
            <img src="{{ asset('img/ayam2.jpeg') }}" alt="Daging Ayam">
            <h3>Paha Ayam</h3>
            <p>Rp 69.000</p>
            <p class="stock">stock:1</p>
            <button class="add-to-cart" data-name="Produk 2" data-price="69000">Tambahkan ke Keranjang</button>
        </div>
        <div class="product">
            <img src="{{ asset('img/ayam2.jpeg') }}" alt="Daging Ayam">
            <h3>Paha Ayam</h3>
            <p>Rp 69.000</p>
            <p class="stock">stock:1</p>
            <button class="add-to-cart" data-name="Produk 2" data-price="69000">Tambahkan ke Keranjang</button>
        </div>
        <div class="product">
            <img src="{{ asset('img/ayam2.jpeg') }}" alt="Daging Ayam">
            <h3>Paha Ayam</h3>
            <p>Rp 69.000</p>
            <p class="stock">stock:1</p>
            <button class="add-to-cart" data-name="Produk 2" data-price="69000">Tambahkan ke Keranjang</button>
        </div>
        <div class="product">
            <img src="{{ asset('img/ayam2.jpeg') }}" alt="Daging Ayam">
            <h3>Paha Ayam</h3>
            <p>Rp 69.000</p>
            <p class="stock">stock:1</p>
            <button class="add-to-cart" data-name="Produk 2" data-price="69000">Tambahkan ke Keranjang</button>
        </div>
        <div class="product">
            <img src="{{ asset('img/ayam2.jpeg') }}" alt="Daging Ayam">
            <h3>Paha Ayam</h3>
            <p>Rp 69.000</p>
            <p class="stock">stock:1</p>
            <button class="add-to-cart" data-name="Produk 2" data-price="69000">Tambahkan ke Keranjang</button>
        </div>
        <!-- Add other product divs similarly -->
    </div>

   <script src="{{ asset('js/cari-product.js') }}"></script>
</body>
</html>
