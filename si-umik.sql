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
    role ENUM('umkm', 'pencari_kerja', 'admin') NOT NULL DEFAULT 'pencari_kerja' COMMENT 'Peran pengguna dalam sistem',
    foto_profil VARCHAR(255) DEFAULT NULL COMMENT 'Link foto profil',
    status_akun ENUM('aktif', 'nonaktif', 'diblokir') DEFAULT 'nonaktif' COMMENT 'Status akun pengguna',
    lulusan_sekolah_terakhir VARCHAR(100) NOT NULL COMMENT 'Tingkat pendidikan terakhir',
    jurusan VARCHAR(100) DEFAULT NULL COMMENT 'Jurusan pendidikan terakhir',
    posisi_pekerjaan VARCHAR(100) DEFAULT NULL COMMENT 'Posisi pekerjaan (jika sudah bekerja)',
    bio TEXT DEFAULT NULL COMMENT 'Deskripsi singkat atau minat pengguna',
    keahlian TEXT DEFAULT NULL COMMENT 'Daftar keahlian pengguna',
    email_verified_at DATETIME DEFAULT NULL COMMENT 'Waktu verifikasi email',
    last_login DATETIME DEFAULT NULL COMMENT 'Terakhir login',
    token_verifikasi VARCHAR(255) DEFAULT NULL COMMENT 'Token untuk verifikasi/reset password',
    remember_token VARCHAR(255) DEFAULT NULL COMMENT 'Token untuk fitur remember me (persistent login)',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP COMMENT 'Waktu registrasi akun'
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

CREATE TABLE chat (
    id INT AUTO_INCREMENT PRIMARY KEY COMMENT 'ID chat unik',
    sender_id INT NOT NULL COMMENT 'ID pengirim pesan (relasi ke tabel users)',
    receiver_id INT NOT NULL COMMENT 'ID penerima pesan (relasi ke tabel users)',
    message TEXT NOT NULL COMMENT 'Isi pesan chat',
    sent_at DATETIME DEFAULT CURRENT_TIMESTAMP COMMENT 'Waktu pesan dikirim',
    status ENUM('belum dibaca', 'sudah dibaca') DEFAULT 'belum dibaca' COMMENT 'Status pesan (apakah sudah dibaca penerima atau belum)',
    file_link VARCHAR(255) DEFAULT NULL COMMENT 'Link ke file yang dilampirkan (jika ada)',
    file_type VARCHAR(50) DEFAULT NULL COMMENT 'Tipe file (misalnya, "image/jpeg", "application/pdf")',
    file_size INT DEFAULT NULL COMMENT 'Ukuran file dalam byte',
    FOREIGN KEY (sender_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (receiver_id) REFERENCES users(id) ON DELETE CASCADE
);

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
