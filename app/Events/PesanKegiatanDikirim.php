<?php

namespace App\Events;

use App\Models\PesanKegiatan;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PesanKegiatanDikirim implements ShouldBroadcastNow
{
    use Dispatchable, SerializesModels;

    public $pesan;

    public function __construct(PesanKegiatan $pesan)
    {
        $this->pesan = $pesan->loadMissing('user');
    }

    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('kegiatan.' . $this->pesan->kegiatan_id),
        ];
    }

    public function broadcastAs(): string
    {
        return 'pesan.baru';
    }

    public function broadcastWith(): array
    {
        return [
            'id' => $this->pesan->id,
            'user_id' => $this->pesan->user_id,
            'nama' => $this->pesan->user->name,
            'pesan' => $this->pesan->pesan,
            'waktu' => $this->pesan->created_at->format('H:i'),
        ];
    }
}