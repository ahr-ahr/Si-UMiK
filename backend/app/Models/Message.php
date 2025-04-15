<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Message extends Model
{
    use HasFactory; // Jika kamu menggunakan factory untuk seeding

    protected $fillable = ['sender_id', 'receiver_id', 'message'];

    // Relasi ke sender
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    // Relasi ke receiver
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}
