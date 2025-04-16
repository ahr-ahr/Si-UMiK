<div class="container">
    @if (auth()->user()->role === 'umkm')
        @if (!$umkm)
            <div class="alert alert-warning">
                <p>Anda belum melengkapi data UMKM.</p>
                <a href="{{ route('umkm.create') }}" class="btn btn-primary">Lengkapi Data UMKM</a>
            </div>
        @else
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @elseif (session('info'))
                <div class="alert alert-info">
                    {{ session('info') }}
                </div>
            @endif

<div class="alert alert-warning">
                <a href="{{ route('umkm.lowongan.create') }}" class="btn btn-primary">Buat Lowongan</a>
            </div>
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Profil UMKM</h3>
                    <form method="POST" action="{{ url('/logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-danger">Logout</button>
                    </form>
                </div>

                <div class="card-body">
                    <h4>{{ $umkm->nama_umkm }}</h4>
                    <p><strong>Bidang Usaha:</strong> {{ $umkm->bidang_usaha }}</p>
                    <p><strong>Deskripsi:</strong> {{ $umkm->deskripsi ?? '-' }}</p>
                    <p><strong>Tahun Berdiri:</strong> {{ $umkm->tahun_berdiri ?? '-' }}</p>
                    <p><strong>Jumlah Karyawan:</strong> {{ $umkm->jumlah_karyawan ?? '-' }}</p>
                    <p><strong>Website:</strong>
                        @if ($umkm->website)
                            <a href="{{ $umkm->website }}" target="_blank">{{ $umkm->website }}</a>
                        @else
                            -
                        @endif
                    </p>

                    <p><strong>Email:</strong> {{ $umkm->email_umkm ?? '-' }}</p>
                    <p><strong>No Telepon:</strong> {{ $umkm->no_telepon_umkm ?? '-' }}</p>
                    <p><strong>Alamat Lengkap:</strong> {{ $umkm->alamat_lengkap }}</p>
                    <p><strong>Lokasi:</strong> {{ $umkm->kelurahan }}, {{ $umkm->kecamatan }}, {{ $umkm->kota }}, {{ $umkm->provinsi }} {{ $umkm->kode_pos }}</p>

                    <p><strong>Status:</strong>
                        <span class="badge {{ $umkm->status === 'aktif' ? 'bg-success' : 'bg-secondary' }}">
                            {{ ucfirst($umkm->status) }}
                        </span>
                    </p>

                    @if ($umkm->logo)
                        <div class="mb-3">
                            <strong>Logo:</strong><br>
                            <img src="{{ asset('storage/' . $umkm->logo) }}" alt="Logo UMKM" class="img-thumbnail" width="120">
                        </div>
                    @endif

                    <a href="{{ route('umkm.show', $umkm->id) }}" class="btn btn-info">Lihat Detail</a>
                    <a href="{{ route('umkm.edit', $umkm->id) }}" class="btn btn-warning">Edit Data</a>

                    <form action="{{ route('umkm.destroy', $umkm->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data UMKM ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus Data</button>
                    </form>
                </div>
            </div>
        @endif
    @else
        <div class="alert alert-danger">
            Anda tidak memiliki akses ke fitur UMKM.
        </div>
    @endif
</div>
