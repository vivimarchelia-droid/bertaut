<?php

use Illuminate\Support\Facades\Broadcast;
use App\Models\Kegiatan;
use App\Models\PesertaKegiatan;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('kegiatan.{id}', function ($user, $id) {
    $kegiatan = Kegiatan::find($id);

    if (!$kegiatan) {
        return false;
    }

    return (int) $kegiatan->user_id === (int) $user->id
        || PesertaKegiatan::where('user_id', $user->id)
            ->where('kegiatan_id', $id)
            ->exists();
});