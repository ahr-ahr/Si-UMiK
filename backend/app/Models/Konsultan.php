<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultan extends Model
{
    use HasFactory;

    protected $table = 'konsultan';

    protected $fillable = [
        'user_id',
        'bidang_keahlian',
        'pengalaman_tahun',
        'sertifikasi',
        'portofolio',
        'biaya_per_jam',
        'biaya_per_menit',
        'rating',
        'jumlah_review',
        'jenis_konsultan',
    ];

    // Relasi ke users
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

?>