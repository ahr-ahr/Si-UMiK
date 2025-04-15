<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Umkm extends Model
{
    protected $fillable = [
        'user_id',
        'nama_umkm',
        'bidang_usaha',
        'deskripsi',
        'tahun_berdiri',
        'jumlah_karyawan',
        'website',
        'email_umkm',
        'no_telepon_umkm',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'kode_pos',
        'alamat_lengkap',
        'logo',
        'status',
        'created_at',
        'updated_at'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

?>