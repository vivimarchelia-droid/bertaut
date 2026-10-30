<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    protected $fillable = [
        'organizer_id',
        'title',
        'category',
        'description',
        'event_date',
        'start_time',
        'end_time',
        'location',
        'meeting_point',
        'google_maps_url',
        'max_volunteers',
        'image',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'event_date' => 'date',
            'max_volunteers' => 'integer',
        ];
    }

    public function organizer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'organizer_id');
    }

    public function participants(): HasMany
    {
        return $this->hasMany(EventParticipant::class, 'event_id');
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class, 'event_id');
    }
}