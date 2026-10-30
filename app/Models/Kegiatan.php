<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Kegiatan extends Model
{
    protected $fillable = [
        'user_id',
        'judul',
        'kategori',
        'deskripsi',
        'tujuan',
        'manfaat',
        'persyaratan',
        'perlengkapan',
        'tanggal',
        'waktu',
        'lokasi',
        'maps',
        'jumlah_relawan',
        'batas_pendaftaran',
        'foto',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function peserta()
{
    return $this->hasMany(PesertaKegiatan::class, 'kegiatan_id');
}

public function pesanKegiatans()
{
    return $this->hasMany(PesanKegiatan::class);
}


}
