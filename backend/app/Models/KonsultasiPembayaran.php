<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KonsultasiPembayaran extends Model
{
    protected $table = 'konsultasi_pembayaran';

    protected $fillable = [
        'umkm_id',
        'konsultan_id',
        'jadwal_konsultasi',
        'durasi_jam',
        'biaya',
        'metode_pembayaran',
        'snap_token',
        'status_pembayaran',
        'catatan',
    ];

    public function umkm()
    {
        return $this->belongsTo(Umkm::class, 'umkm_id');
    }

    public function konsultan()
    {
        return $this->belongsTo(User::class, 'konsultan_id');
    }
}
