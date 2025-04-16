<?php

namespace App\Models;  // Pastikan namespace sesuai

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
        'status'
    ];

    // Relasi ke UMKM
    public function umkm()
    {
        return $this->belongsTo(Umkm::class, 'umkm_id');  // pastikan model Umkm sesuai dengan namespace
    }

    // Untuk memastikan tanggal_ditutup diformat dengan benar
    protected $casts = [
        'tanggal_ditutup' => 'datetime',
    ];
}
