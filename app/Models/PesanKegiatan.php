<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesanKegiatan extends Model
{
    protected $fillable = [
        'user_id',
        'kegiatan_id',
        'pesan',
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