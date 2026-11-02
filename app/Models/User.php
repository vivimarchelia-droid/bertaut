<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'location',
        'about',
        'profile_photo',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Kegiatan yang dibuat oleh pengguna sebagai EO
    public function kegiatanDibuat(): HasMany
    {
        return $this->hasMany(Kegiatan::class, 'user_id');
    }

    // Kegiatan yang diikuti oleh pengguna
    public function pesertaKegiatans(): HasMany
    {
        return $this->hasMany(PesertaKegiatan::class, 'user_id');
    }

    // Pesan yang dikirim oleh pengguna
    public function pesanKegiatans(): HasMany
    {
        return $this->hasMany(PesanKegiatan::class, 'user_id');
    }
}
