@if (auth()->user()->role === 'umkm')
    @if (!$umkm)
        <div class="alert alert-warning">
            <p>Anda belum melengkapi data UMKM.</p>
            <a href="{{ route('umkm.create') }}" class="btn btn-primary">Lengkapi Data UMKM</a>
        </div>
    @else
        <div class="card">
            <div class="card-body">
                <h5>{{ $umkm->nama_umkm }}</h5>
                <p><strong>Bidang Usaha:</strong> {{ $umkm->bidang_usaha }}</p>
                <p><strong>Alamat:</strong> {{ $umkm->alamat_lengkap }}</p>
                <a href="{{ route('umkm.show', $umkm->id) }}" class="btn btn-info">Lihat Detail</a>
            </div>
        </div>
    @endif
@else
    <div class="alert alert-danger">
        Anda tidak memiliki akses ke fitur UMKM.
    </div>
@endif
