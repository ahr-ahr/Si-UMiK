CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL COMMENT 'Nama lengkap pengguna',
    umur INT NOT NULL COMMENT 'Umur pengguna',
    tanggal_lahir DATE NOT NULL COMMENT 'Tanggal lahir',
    jenis_kelamin ENUM('L', 'P') NOT NULL COMMENT 'L: Laki-laki, P: Perempuan',
    email VARCHAR(100) NOT NULL UNIQUE COMMENT 'Alamat email pengguna',
    no_telepon VARCHAR(20) NOT NULL COMMENT 'Nomor telepon pengguna',
    provinsi VARCHAR(100) NOT NULL COMMENT 'Nama provinsi',
    kota VARCHAR(100) NOT NULL COMMENT 'Nama kota atau kabupaten',
    kecamatan VARCHAR(100) NOT NULL COMMENT 'Nama kecamatan',
    kelurahan VARCHAR(100) NOT NULL COMMENT 'Nama kelurahan atau desa',
    kode_pos VARCHAR(10) NOT NULL COMMENT 'Kode pos wilayah',
    alamat TEXT NOT NULL COMMENT 'Alamat lengkap pengguna',
    password VARCHAR(255) NOT NULL COMMENT 'Password (dihash)',
    role ENUM('umkm', 'pencari_kerja', 'admin', 'konsultan') NOT NULL DEFAULT 'pencari_kerja' COMMENT 'Peran pengguna dalam sistem',
    foto_profil VARCHAR(255) DEFAULT NULL COMMENT 'Link foto profil',
    status_akun ENUM('aktif', 'nonaktif', 'diblokir') DEFAULT 'nonaktif' COMMENT 'Status akun pengguna',
    lulusan_sekolah_terakhir VARCHAR(100) NOT NULL COMMENT 'Tingkat pendidikan terakhir',
    jurusan VARCHAR(100) DEFAULT NULL COMMENT 'Jurusan pendidikan terakhir',
    posisi_pekerjaan VARCHAR(100) DEFAULT NULL COMMENT 'Posisi pekerjaan (jika sudah bekerja)',
    bio TEXT DEFAULT NULL COMMENT 'Deskripsi singkat atau minat pengguna',
    keahlian TEXT DEFAULT NULL COMMENT 'Daftar keahlian pengguna',
    cv VARCHAR(255) DEFAULT NULL COMMENT 'Link atau path ke file CV, khusus untuk role pencari_kerja',
    email_verified_at DATETIME DEFAULT NULL COMMENT 'Waktu verifikasi email',
    last_login DATETIME DEFAULT NULL COMMENT 'Terakhir login',
    token_verifikasi VARCHAR(255) DEFAULT NULL COMMENT 'Token untuk verifikasi/reset password',
    remember_token VARCHAR(255) DEFAULT NULL COMMENT 'Token untuk fitur remember me (persistent login)',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP COMMENT 'Waktu registrasi akun'
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP COMMENT 'Waktu update akun'
);

CREATE TABLE umkm (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL COMMENT 'ID pemilik UMKM (relasi ke tabel users)',
    nama_umkm VARCHAR(100) NOT NULL COMMENT 'Nama usaha',
    bidang_usaha VARCHAR(100) NOT NULL COMMENT 'Kategori atau jenis usaha',
    deskripsi TEXT DEFAULT NULL COMMENT 'Deskripsi usaha',
    tahun_berdiri YEAR DEFAULT NULL COMMENT 'Tahun didirikan',
    jumlah_karyawan INT DEFAULT NULL COMMENT 'Jumlah karyawan',
    website VARCHAR(255) DEFAULT NULL COMMENT 'Website UMKM jika ada',
    email_umkm VARCHAR(100) DEFAULT NULL COMMENT 'Email bisnis',
    no_telepon_umkm VARCHAR(20) DEFAULT NULL COMMENT 'Nomor telepon bisnis',
    provinsi VARCHAR(100) NOT NULL COMMENT 'Provinsi lokasi usaha',
    kota VARCHAR(100) NOT NULL COMMENT 'Kota/Kabupaten lokasi usaha',
    kecamatan VARCHAR(100) NOT NULL COMMENT 'Kecamatan lokasi usaha',
    kelurahan VARCHAR(100) NOT NULL COMMENT 'Kelurahan lokasi usaha',
    kode_pos VARCHAR(10) DEFAULT NULL COMMENT 'Kode pos lokasi',
    alamat_lengkap TEXT NOT NULL COMMENT 'Alamat lengkap usaha',
    logo VARCHAR(255) DEFAULT NULL COMMENT 'Link logo UMKM',
    status ENUM('aktif', 'nonaktif') DEFAULT 'aktif' COMMENT 'Status aktif usaha',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP COMMENT 'Waktu input data UMKM',
    updated_at DATETIME DEFAULT NULL COMMENT 'Terakhir kali diperbarui',

    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE konsultan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL COMMENT 'Relasi ke tabel users dengan role konsultan',
    bidang_keahlian VARCHAR(100) NOT NULL COMMENT 'Bidang keahlian utama konsultan',
    pengalaman_tahun INT DEFAULT NULL COMMENT 'Jumlah tahun pengalaman',
    jenis_konsultan ENUM('bisnis', 'keuangan', 'hukum', 'teknologi', 'lainnya') NOT NULL DEFAULT 'lainnya' COMMENT 'Jenis konsultan berdasarkan bidang',
    sertifikasi TEXT DEFAULT NULL COMMENT 'Daftar sertifikasi jika ada',
    portofolio TEXT DEFAULT NULL COMMENT 'Deskripsi atau link portofolio',
    biaya_per_jam INT NOT NULL COMMENT 'Tarif jasa per jam (Rp)',
    biaya_per_menit INT NOT NULL COMMENT 'Tarif jasa per menit (Rp)',
    rating FLOAT DEFAULT NULL COMMENT 'Rating rata-rata dari pengguna',
    jumlah_review INT DEFAULT 0 COMMENT 'Jumlah total review',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE chat (
    id INT AUTO_INCREMENT PRIMARY KEY COMMENT 'ID chat unik',
    sender_id INT NOT NULL COMMENT 'ID pengirim pesan (relasi ke tabel users)',
    receiver_id INT NOT NULL COMMENT 'ID penerima pesan (relasi ke tabel users)',
    message TEXT NOT NULL COMMENT 'Isi pesan chat',
    sent_at DATETIME DEFAULT CURRENT_TIMESTAMP COMMENT 'Waktu pesan dikirim',
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
    status ENUM('belum dibaca', 'sudah dibaca') DEFAULT 'belum dibaca' COMMENT 'Status pesan (apakah sudah dibaca penerima atau belum)',
    file_link VARCHAR(255) DEFAULT NULL COMMENT 'Link ke file yang dilampirkan (jika ada)',
    file_type VARCHAR(50) DEFAULT NULL COMMENT 'Tipe file (misalnya, "image/jpeg", "application/pdf")',
    file_size INT DEFAULT NULL COMMENT 'Ukuran file dalam byte',
    FOREIGN KEY (sender_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (receiver_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE lowongan_kerja (
    id INT AUTO_INCREMENT PRIMARY KEY,
    umkm_id INT NOT NULL COMMENT 'Relasi ke tabel UMKM',
    judul VARCHAR(150) NOT NULL COMMENT 'Judul atau posisi lowongan',
    deskripsi TEXT NOT NULL COMMENT 'Deskripsi pekerjaan',
    kualifikasi TEXT DEFAULT NULL COMMENT 'Syarat atau kualifikasi pelamar',
    gaji VARCHAR(100) DEFAULT NULL COMMENT 'Rentang gaji atau kompensasi',
    lokasi_kerja VARCHAR(150) NOT NULL COMMENT 'Lokasi tempat kerja',
    jenis_pekerjaan ENUM('fulltime', 'parttime') NOT NULL DEFAULT 'fulltime' COMMENT 'Jenis kerja',
    tanggal_dibuka DATE DEFAULT CURRENT_DATE COMMENT 'Tanggal mulai lowongan',
    tanggal_ditutup DATE DEFAULT NULL COMMENT 'Batas akhir pendaftaran',
    status ENUM('aktif', 'ditutup') DEFAULT 'aktif' COMMENT 'Status lowongan',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP COMMENT 'Waktu dibuat',
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Waktu update terakhir',

    FOREIGN KEY (umkm_id) REFERENCES umkm(id) ON DELETE CASCADE
);
 

CREATE TABLE lamaran_kerja (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lowongan_id INT NOT NULL COMMENT 'Relasi ke lowongan yang dilamar',
    pelamar_id INT NOT NULL COMMENT 'Relasi ke tabel users dengan role pencari_kerja',
    surat_lamaran TEXT DEFAULT NULL COMMENT 'Isi atau file surat lamaran',
    file_cv VARCHAR(255) DEFAULT NULL COMMENT 'Link ke file CV (jika berbeda dari profil)',
    status ENUM('dikirim', 'diproses', 'diterima', 'ditolak') DEFAULT 'dikirim' COMMENT 'Status lamaran',
    tanggal_lamaran DATETIME DEFAULT CURRENT_TIMESTAMP COMMENT 'Waktu melamar',
    catatan_hrd TEXT DEFAULT NULL COMMENT 'Catatan dari pihak UMKM/HRD',

    FOREIGN KEY (lowongan_id) REFERENCES lowongan_kerja(id) ON DELETE CASCADE,
    FOREIGN KEY (pelamar_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE konsultasi_pembayaran (
    id INT AUTO_INCREMENT PRIMARY KEY COMMENT 'ID unik transaksi konsultasi',
    umkm_id INT NOT NULL COMMENT 'Relasi ke UMKM yang melakukan pemesanan jasa',
    konsultan_id INT NOT NULL COMMENT 'Relasi ke pengguna dengan role konsultan',
    jadwal_konsultasi DATETIME NOT NULL COMMENT 'Tanggal dan waktu konsultasi dijadwalkan',
    durasi_jam INT DEFAULT 1 COMMENT 'Durasi konsultasi dalam jam',
    biaya INT NOT NULL COMMENT 'Total biaya konsultasi (dalam rupiah)',
    metode_pembayaran ENUM('midtrans_snap', 'manual') DEFAULT 'midtrans_snap' COMMENT 'Metode pembayaran',
    snap_token VARCHAR(255) DEFAULT NULL COMMENT 'Token dari Midtrans Snap (jika menggunakan Snap)',
    status_pembayaran ENUM('menunggu', 'berhasil', 'gagal', 'dibatalkan') DEFAULT 'menunggu' COMMENT 'Status pembayaran',
    catatan TEXT DEFAULT NULL COMMENT 'Catatan tambahan jika ada',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP COMMENT 'Waktu pemesanan dibuat',
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Terakhir kali diperbarui',

    FOREIGN KEY (umkm_id) REFERENCES umkm(id) ON DELETE CASCADE,
    FOREIGN KEY (konsultan_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Indeks
CREATE INDEX idx_umkm_konsultasi ON konsultasi_pembayaran(umkm_id);
CREATE INDEX idx_konsultan_konsultasi ON konsultasi_pembayaran(konsultan_id);
CREATE INDEX idx_status_pembayaran_konsultasi ON konsultasi_pembayaran(status_pembayaran);

-- Index untuk relasi user
CREATE INDEX idx_user_id_konsultan ON konsultan_detail(user_id);

-- Index untuk pencarian berdasarkan bidang keahlian
CREATE INDEX idx_bidang_keahlian ON konsultan_detail(bidang_keahlian);

-- Index untuk pencarian berdasarkan pengalaman
CREATE INDEX idx_pengalaman ON konsultan_detail(pengalaman_tahun);

-- Index untuk pencarian berdasarkan tarif
CREATE INDEX idx_biaya_per_jam ON konsultan_detail(biaya_per_jam);
CREATE INDEX idx_biaya_per_menit ON konsultan_detail(biaya_per_menit);

-- Index untuk pencarian berdasarkan rating
CREATE INDEX idx_rating ON konsultan_detail(rating);


-- Indeks lamaran_kerja
CREATE INDEX idx_lowongan_id_lamaran ON lamaran_kerja(lowongan_id);
CREATE INDEX idx_pelamar_id_lamaran ON lamaran_kerja(pelamar_id);
CREATE INDEX idx_status_lamaran ON lamaran_kerja(status);


-- Indeks lowongan_kerja
CREATE INDEX idx_umkm_id_lowongan ON lowongan_kerja(umkm_id);
CREATE INDEX idx_status_lowongan ON lowongan_kerja(status);


-- Indeks pada kolom sender_id dan receiver_id di tabel chat
CREATE INDEX idx_sender_id ON chat(sender_id);
CREATE INDEX idx_receiver_id ON chat(receiver_id);

-- Indeks pada kolom user_id di tabel umkm
CREATE INDEX idx_user_id_umkm ON umkm(user_id);

-- Indeks pada kolom status di tabel chat dan users
CREATE INDEX idx_status_chat ON chat(status);
CREATE INDEX idx_status_users ON users(status_akun);

-- Indeks pada kolom created_at di tabel chat dan umkm
CREATE INDEX idx_sent_at_chat ON chat(sent_at);
CREATE INDEX idx_created_at_umkm ON umkm(created_at);

-- Indeks pada kolom role di tabel users
CREATE INDEX idx_role ON users(role);
