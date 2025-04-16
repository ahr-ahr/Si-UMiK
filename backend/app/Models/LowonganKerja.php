<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LowonganKerja extends Model
{
    use HasFactory;

    protected $table = 'lowongan_kerja';

    protected $fillable = [
        'umkm_id',
        'judul',
        'deskripsi',
        'kualifikasi',
        'gaji',
        'lokasi_kerja',
        'jenis_pekerjaan',
        'tanggal_ditutup',
    ];

    // Relasi ke UMKM
    public function umkm()
    {
        return $this->belongsTo(UMKM::class, 'umkm_id');
    }
}


