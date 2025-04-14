<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Property Search</title>
  <link rel="stylesheet" href={{ asset('css/LK1.css') }}>
</head>
<body>
  <div class="search-section">
    <!-- Search bar dan tombol filter -->
    <div class="search-bar">
      <input type="text" placeholder="search">
      <button class="filter-btn">x</button>
      <button class="btn">Disewa</button>
      <button class="btn active">Dijual</button>
      <button class="btn">Harga</button>
      <button class="btn filter">Filter <span>&#9662;</span></button>
      <button class="btn search">Cari</button>
    </div>

    <!-- Breadcrumb dan deskripsi lokasi -->
    <div class="breadcrumb">
      <p>Beranda / Ruko dijual / Jawa Timur / <strong>Surabaya</strong></p>
      <p class="sub-title">Ruko dijual di Surabaya</p>
    </div>
  </div>

  <!-- Grid Kartu Property -->
  <div class="grid-container">
    <!-- Property Card 1 -->
    <div class="property-card">
      <img src="img/ruko.jpg" alt="Ruko Image">
      <div class="property-info">
        <h3>Rp 3 Miliar</h3>
        <p>Tujuan: dijual</p>
        <p>Jalan: Jl. Ahmad Yani No.123</p>
        <div class="property-details">
          <span>LT: 100m²</span>
          <span>LB: 150m²</span>
        </div>
        <div class="user-info">
          <img src="agent-photo.jpg" alt="Agent Photo">
          <p>Shad Isley</p>
        </div>
      </div>
    </div>

    <!-- Property Card 2 -->
    <div class="property-card">
      <img src="img/ruko.jpg" alt="Ruko Image">
      <div class="property-info">
        <h3>Rp 2 Miliar</h3>
        <p>Tujuan: dijual</p>
        <p>Jalan: Jl. Sudirman No.45</p>
        <div class="property-details">
          <span>LT: 80m²</span>
          <span>LB: 120m²</span>
        </div>
        <div class="user-info">
          <img src="agent-photo.jpg" alt="Agent Photo">
          <p>Alex Johnson</p>
        </div>
      </div>
    </div>

    <!-- Property Card 3 -->
    <div class="property-card">
      <img src="img/ruko.jpg" alt="Ruko Image">
      <div class="property-info">
        <h3>Rp 4 Miliar</h3>
        <p>Tujuan: dijual</p>
        <p>Jalan: Jl. Diponegoro No.10</p>
        <div class="property-details">
          <span>LT: 200m²</span>
          <span>LB: 250m²</span>
        </div>
        <div class="user-info">
          <img src="agent-photo.jpg" alt="Agent Photo">
          <p>Maria Gomez</p>
        </div>
      </div>
    </div>

    <!-- Property Card 4 -->
    <div class="property-card">
      <img src="img/ruko.jpg" alt="Ruko Image">
      <div class="property-info">
        <h3>Rp 5 Miliar</h3>
        <p>Tujuan: dijual</p>
        <p>Jalan: Jl. Kartini No.25</p>
        <div class="property-details">
          <span>LT: 300m²</span>
          <span>LB: 400m²</span>
        </div>
        <div class="user-info">
          <img src="agent-photo.jpg" alt="Agent Photo">
          <p>John Doe</p>
        </div>
      </div>
    </div>

    <!-- Property Card 5 -->
    <div class="property-card">
      <img src="img/ruko.jpg" alt="Ruko Image">
      <div class="property-info">
        <h3>Rp 6 Miliar</h3>
        <p>Tujuan: dijual</p>
        <p>Jalan: Jl. Kenanga No.50</p>
        <div class="property-details">
          <span>LT: 350m²</span>
          <span>LB: 450m²</span>
        </div>
        <div class="user-info">
          <img src="agent-photo.jpg" alt="Agent Photo">
          <p>Alice Lee</p>
        </div>
      </div>
    </div>

    <!-- Property Card 6 -->
    <div class="property-card">
      <img src="img/ruko.jpg" alt="Ruko Image">
      <div class="property-info">
        <h3>Rp 7 Miliar</h3>
        <p>Tujuan: dijual</p>
        <p>Jalan: Jl. Melati No.70</p>
        <div class="property-details">
          <span>LT: 500m²</span>
          <span>LB: 600m²</span>
        </div>
        <div class="user-info">
          <img src="agent-photo.jpg" alt="Agent Photo">
          <p>Bob Stevens</p>
        </div>
      </div>
    </div>

    <!-- Property Card 7 -->
    <div class="property-card">
      <img src="img/ruko.jpg" alt="Ruko Image">
      <div class="property-info">
        <h3>Rp 8 Miliar</h3>
        <p>Tujuan: dijual</p>
        <p>Jalan: Jl. Anggrek No.100</p>
        <div class="property-details">
          <span>LT: 600m²</span>
          <span>LB: 700m²</span>
        </div>
        <div class="user-info">
          <img src="agent-photo.jpg" alt="Agent Photo">
          <p>Susan Parker</p>
        </div>
      </div>
    </div>

    <!-- Property Card 8 -->
    <div class="property-card">
      <img src="img/ruko.jpg" alt="Ruko Image">
      <div class="property-info">
        <h3>Rp 9 Miliar</h3>
        <p>Tujuan: dijual</p>
        <p>Jalan: Jl. Merpati No.200</p>
        <div class="property-details">
          <span>LT: 700m²</span>
          <span>LB: 800m²</span>
        </div>
        <div class="user-info">
          <img src="agent-photo.jpg" alt="Agent Photo">
          <p>Linda Smith</p>
        </div>
      </div>
    </div>

  </div>
</body>
</html>
