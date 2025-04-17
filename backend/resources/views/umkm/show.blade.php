<div class="container">
    <h1>Detail UMKM</h1>

    @if($umkm)
        <div class="card mb-4">
            <div class="card-body">
                <h3>{{ $umkm->nama_umkm }}</h3>
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

                <p><strong>Alamat Lengkap:</strong></p>
                <ul>
                    <li><strong>Provinsi:</strong> {{ $umkm->provinsi }}</li>
                    <li><strong>Kota/Kabupaten:</strong> {{ $umkm->kota }}</li>
                    <li><strong>Kecamatan:</strong> {{ $umkm->kecamatan }}</li>
                    <li><strong>Kelurahan:</strong> {{ $umkm->kelurahan }}</li>
                    <li><strong>Kode Pos:</strong> {{ $umkm->kode_pos ?? '-' }}</li>
                    <li><strong>Alamat Lengkap:</strong> {{ $umkm->alamat_lengkap }}</li>
                </ul>

                <p><strong>Status:</strong>
                    <span class="badge bg-{{ $umkm->status === 'aktif' ? 'success' : 'secondary' }}">
                        {{ ucfirst($umkm->status) }}
                    </span>
                </p>

                @if ($umkm->logo)
                    <p><strong>Logo:</strong></p>
                    <img src="{{ asset('storage/' . $umkm->logo) }}" alt="Logo UMKM" width="200">
                @endif
            </div>
        </div>

        <a href="{{ route('umkm.index') }}" class="btn btn-secondary mb-4">Kembali</a>

        {{-- Daftar Lowongan dan Pelamar --}}
        <h2>Daftar Lowongan & Pelamar</h2>
        @if($umkm->lowonganKerja->isEmpty())
            <div class="alert alert-info">
                Belum ada lowongan yang dibuat.
            </div>
        @else
            @foreach($umkm->lowonganKerja as $low)
                <div class="card mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <strong>{{ $low->judul }}</strong>
                            <br><small>Ditutup: {{ $low->tanggal_ditutup ? \Carbon\Carbon::parse($low->tanggal_ditutup)->format('d M Y') : '-' }}</small>
                        </div>
                        <a href="{{ route('umkm.lowongan.show', $low->id) }}" class="btn btn-sm btn-info">
                            Detail Lowongan
                        </a>
                    </div>
                    <div class="card-body">
                        @if($low->pelamar->isEmpty())
                            <p class="text-muted">Belum ada pelamar untuk lowongan ini.</p>
                        @else
                            <ul class="list-group">
                                @foreach($low->pelamar as $p)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <strong>{{ $p->user->name }}</strong><br>
                                            <small>{{ $p->user->email }}</small><br>
                                            <small>Melamar pada: {{ $p->created_at->format('d M Y H:i') }}</small>
                                        </div>
                                        <a href="{{ route('pelamar.show', $p->id) }}" class="btn btn-sm btn-outline-primary">
                                            Lihat Pelamar
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            @endforeach
        @endif
    @else
        <div class="alert alert-warning">
            Data UMKM tidak ditemukan.
        </div>
    @endif
</div>
