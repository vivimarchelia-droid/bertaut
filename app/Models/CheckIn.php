<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CheckIn extends Model
{
    protected $fillable = [
        'event_participant_id',
        'checked_in_at',
        'check_in_code',
    ];

    protected $casts = [
        'checked_in_at' => 'datetime',
    ];

    // Relasi ke data peserta kegiatan
    public function eventParticipant(): BelongsTo
    {
        return $this->belongsTo(EventParticipant::class);
    }
}