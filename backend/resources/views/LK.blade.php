<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Real Estate Listing</title>
    <link rel="stylesheet" href={{ asset('css/LK.css') }}>
</head>
<body>
    <div class="container">
        <header class="header">
            <input type="text" placeholder="search">
            <nav class="nav">
                <button>Disewa</button>
                <button class="active">Dijual</button>
                <button>Harga</button>
                <button>Filter</button>
            </nav>
            <button class="search-btn">Cari</button>
        </header>
        <section class="listing">
            <div class="images">
                <img src="main-image.jpg" alt="Main Property Image">
                <div class="thumbnails">
                    <img src="thumb1.jpg" alt="Thumbnail 1">
                    <img src="thumb2.jpg" alt="Thumbnail 2">
                    <img src="thumb3.jpg" alt="Thumbnail 3">
                </div>
            </div>
            <div class="details">
                <h1>Jual Jalan Wibawa Mukti Jatisari, Jatiasih Bekasi</h1>
                <h2>Rp 1,62 Miliar</h2>
                <p>Ruko mewah di lokasi sangat strategis</p>
            </div>
        </section>
        <section class="property-details">
            <h3>Detail Properti</h3>
            <ul>
                <li>Transaksi: Jual</li>
                <li>Kamar Tidur: 0</li>
                <li>Kamar Mandi: 2</li>
                <li>Luas Tanah: 67.5 m<sup>2</sup></li>
                <li>Luas Bangunan: 135 m<sup>2</sup></li>
                <li>Tipe Properti: Ruko</li>
                <li>Alamat: JEMURSARI NO 27, Surabaya</li>
                <li>Lokasi: Jawa Timur, Surabaya</li>
                <li>Listrik: 3500 Watt</li>
                <li>Sertifikat: SHM</li>
                <li>Hadap: Timur</li>
                <li>Furnish: Non-furnished</li>
            </ul>
        </section>
        <section class="kpr-simulation">
            <h3>Simulasi Cicilan KPR</h3>
            <form>
                <label for="harga">Harga Properti (Rp)</label>
                <input type="text" id="harga" value="Rp 1,62 Miliar" readonly>
                <label for="uang-muka">Uang Muka (Rp)</label>
                <input type="text" id="uang-muka" value="324,800,000">
                <label for="jangka-waktu">Jangka Waktu</label>
                <input type="text" id="jangka-waktu" value="15 Tahun">
                <label for="suku-bunga">Suku Bunga</label>
                <input type="text" id="suku-bunga" value="5%">
                <p>Jumlah Angsuran: <strong>Rp 10,273,991</strong> per bulan</p>
            </form>
        </section>
        <footer class="footer">
            <div class="agent-info">
                <img src="agent-photo.jpg" alt="Shani Indra">
                <p>Shani Indra - Brighton Unity, Merr-Surabaya</p>
            </div>
            <button class="whatsapp-btn">Hubungi via WhatsApp</button>
        </footer>
    </div>
</body>
</html>
             