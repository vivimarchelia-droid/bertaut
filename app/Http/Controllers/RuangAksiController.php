<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\PesertaKegiatan;
use App\Models\PesanKegiatan;
use App\Events\PesanKegiatanDikirim;

class RuangAksiController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatan::where('user_id', auth()->id())
            ->orWhereIn('id', PesertaKegiatan::where('user_id', auth()->id())
                ->pluck('kegiatan_id'))
            ->latest()
            ->get();

        return view('ruang-aksi', compact('kegiatans'));
    }

    public function show($id)
    {
        $kegiatans = Kegiatan::where('user_id', auth()->id())
            ->orWhereIn('id', PesertaKegiatan::where('user_id', auth()->id())
                ->pluck('kegiatan_id'))
            ->latest()
            ->get();

        $kegiatan = $kegiatans->firstWhere('id', $id);

        if (!$kegiatan) {
            abort(403, 'Kamu belum bergabung dengan kegiatan ini.');
        }

        $pesans = PesanKegiatan::with('user')
            ->where('kegiatan_id', $kegiatan->id)
            ->orderBy('created_at', 'asc')
            ->get();

        return view('ruang-aksi', compact('kegiatans', 'kegiatan', 'pesans'));
    }

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
            'waktu' => $pesan->created_at->format('H:i'),
        ]);
    }
}