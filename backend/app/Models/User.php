<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'fullname',
        'umur',
        'tanggal_lahir',
        'jenis_kelamin',
        'email',
        'no_telepon',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'kode_pos',
        'alamat',
        'password',
        'role',
        'foto_profil',
        'status_akun',
        'lulusan_sekolah_terakhir',
        'jurusan',
        'posisi_pekerjaan',
        'bio',
        'keahlian',
        'email_verified_at',
        'last_login',
        'token_verifikasi',
        'remember_token',
        'created_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function umkm(): HasOne
    {
        return $this->hasOne(Umkm::class);
    }

    public function sentMessages(): HasMany
    {
        return $this->hasMany(Chat::class, 'sender_id');
    }

    public function receivedMessages(): HasMany
    {
        return $this->hasMany(Chat::class, 'receiver_id');
    }
}
