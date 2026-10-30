<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesertaKegiatan extends Model
{
    protected $table = 'peserta_kegiatans';

    protected $fillable = [
        'user_id',
        'kegiatan_id',
    ];
}