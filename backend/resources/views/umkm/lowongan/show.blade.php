<h2>{{ $lowongan->judul }}</h2>

<p><strong>Deskripsi:</strong><br> {{ $lowongan->deskripsi }}</p>
<p><strong>Kualifikasi:</strong><br> {{ $lowongan->kualifikasi ?? '-' }}</p>
<p><strong>Gaji:</strong> {{ $lowongan->gaji ?? '-' }}</p>
<p><strong>Lokasi:</strong> {{ $lowongan->lokasi_kerja }}</p>
<p><strong>Jenis Pekerjaan:</strong> {{ ucfirst($lowongan->jenis_pekerjaan) }}</p>
<p><strong>Tanggal Ditutup:</strong> {{ $lowongan->tanggal_ditutup ?? 'Tidak ditentukan' }}</p>

<a href="{{ route('lowongan.edit', $lowongan->id) }}">Edit</a> |
<a href="{{ route('lowongan.index') }}">Kembali</a>
