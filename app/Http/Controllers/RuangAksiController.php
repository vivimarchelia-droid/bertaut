<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\PesertaKegiatan;
use App\Models\PesanKegiatan;
use App\Events\PesanKegiatanDikirim;

class RuangAksiController extends Controller
{
    // Mengambil daftar kegiatan yang dibuat atau diikuti pengguna
    private function daftarKegiatan()
    {
        return Kegiatan::where('user_id', auth()->id())
            ->orWhereIn(
                'id',
                PesertaKegiatan::where('user_id', auth()->id())
                    ->pluck('kegiatan_id')
            )
            ->latest()
            ->get();
    }

    // Halaman utama Ruang Aksi
    public function index()
    {
        $kegiatans = $this->daftarKegiatan();

        return view('ruang-aksi', compact('kegiatans'));
    }

    // Membuka room kegiatan
    public function show(Request $request, $id)
    {
        $kegiatans = $this->daftarKegiatan();

        $kegiatan = $kegiatans->firstWhere('id', $id);

        if (!$kegiatan) {
            abort(403, 'Kamu belum bergabung dengan kegiatan ini.');
        }

        $pesans = PesanKegiatan::with('user')
            ->where('kegiatan_id', $kegiatan->id)
            ->orderBy('created_at', 'asc')
            ->get();

        // Jika permintaan berasal dari AJAX, kirim data dalam JSON
        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'kegiatan' => [
                    'id' => $kegiatan->id,
                    'judul' => $kegiatan->judul,
                    'lokasi' => $kegiatan->lokasi,
                    'tanggal' => \Carbon\Carbon::parse($kegiatan->tanggal)
                        ->translatedFormat('l, d F Y'),
                    'foto' => $kegiatan->foto
                        ? (
                            str_starts_with($kegiatan->foto, 'images/')
                                ? asset($kegiatan->foto)
                                : asset('storage/' . $kegiatan->foto)
                        )
                        : null,
                ],
                'pesans' => $pesans->map(function ($pesan) {
                    return [
                        'user_id' => $pesan->user_id,
                        'nama' => $pesan->user->name,
                        'pesan' => $pesan->pesan,
                        'waktu' => $pesan->created_at->format('H:i'),
                    ];
                }),
            ]);
        }

        return view('ruang-aksi', compact(
            'kegiatans',
            'kegiatan',
            'pesans'
        ));
    }

    // Mengirim pesan
    public function storeMessage(Request $request, $id)
    {
        $request->validate([
            'pesan' => 'required|string|max:2000',
        ]);

        $kegiatan = Kegiatan::findOrFail($id);

        $bolehMasuk = $kegiatan->user_id == auth()->id()
            || PesertaKegiatan::where('user_id', auth()->id())
                ->where('kegiatan_id', $kegiatan->id)
                ->exists();

        if (!$bolehMasuk) {
            abort(403);
        }

        $pesan = PesanKegiatan::create([
            'user_id' => auth()->id(),
            'kegiatan_id' => $kegiatan->id,
            'pesan' => $request->pesan,
        ]);

        // Kirim pesan ke seluruh anggota grup secara realtime
        event(new PesanKegiatanDikirim($pesan));

        return response()->json([
            'success' => true,
            'pesan' => $pesan->pesan,
            'nama' => auth()->user()->name,
            'waktu' => $pesan->created_at->format('H:i'),
        ]);
    }
}
