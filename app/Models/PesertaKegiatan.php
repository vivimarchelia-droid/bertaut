<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesertaKegiatan extends Model
{
    protected $table = 'peserta_kegiatans';

    protected $fillable = [
        'user_id',
        'kegiatan_id',
        'nama_lengkap',
        'email',
        'no_hp',
        'instansi',
        'status',
        'status_kehadiran',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }
}