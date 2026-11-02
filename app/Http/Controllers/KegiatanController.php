
<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\PesertaKegiatan;
use App\Models\Sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class KegiatanController extends Controller
{
    // MEMBUAT KEGIATAN
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'tujuan' => 'required',
            'manfaat' => 'required',
            'tanggal' => 'required|date',
            'waktu' => 'required',
            'lokasi' => 'required',
            'jumlah_relawan' => 'required|integer',
            'batas_pendaftaran' => 'required|date',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('kegiatan', 'public');
        }

        Kegiatan::create([
            'user_id' => auth()->id(),
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'tujuan' => $request->tujuan,
            'manfaat' => $request->manfaat,
            'persyaratan' => $request->persyaratan,
            'perlengkapan' => $request->perlengkapan,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'lokasi' => $request->lokasi,
            'maps' => $request->maps,
            'jumlah_relawan' => $request->jumlah_relawan,
            'batas_pendaftaran' => $request->batas_pendaftaran,
            'foto' => $foto,
        ]);

        return redirect()
            ->route('kegiatan')
            ->with('success', 'Kegiatan berhasil dipublikasikan!');
    }

    // MENAMPILKAN DETAIL KEGIATAN
    public function show($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        return view('kegiatan-detail', compact('kegiatan'));
    }

    // JOIN LAMA - TETAP DIPERTAHANKAN
    public function join(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        if ($kegiatan->user_id == auth()->id()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Kamu adalah penyelenggara kegiatan ini.'
            ], 403);
        }

        PesertaKegiatan::firstOrCreate([
            'user_id' => auth()->id(),
            'kegiatan_id' => $kegiatan->id,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Kamu berhasil bergabung dengan kegiatan!'
        ]);
    }

    // MENAMPILKAN FORMULIR PENDAFTARAN
    public function registrationForm($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        if ($kegiatan->user_id == auth()->id()) {
            return redirect()->route('kegiatan.detail', $id)
                ->with('error', 'Kamu adalah penyelenggara kegiatan ini.');
        }

        return view('pendaftaran-kegiatan', compact('kegiatan'));
    }

    // MENYIMPAN PENDAFTARAN PESERTA
    public function registerParticipant(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        if ($kegiatan->user_id == auth()->id()) {
            return redirect()->route('kegiatan.detail', $id)
                ->with('error', 'Kamu adalah penyelenggara kegiatan ini.');
        }

        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:20',
            'instansi' => 'nullable|string|max:255',
        ], [
            'nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'no_hp.required' => 'Nomor HP wajib diisi.',
        ]);

        PesertaKegiatan::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'kegiatan_id' => $kegiatan->id,
            ],
            $validated
        );

        return view('pendaftaran-berhasil', compact('kegiatan'));
    }

    // VERIFIKASI PESERTA DAN TERBITKAN SERTIFIKAT
    public function verifikasiPeserta($kegiatanId, $pesertaId)
    {
        $kegiatan = Kegiatan::findOrFail($kegiatanId);

        abort_unless($kegiatan->user_id == auth()->id(), 403);

        abort_if(
            Carbon::parse($kegiatan->tanggal)->isFuture(),
            403,
            'Peserta hanya bisa diverifikasi setelah tanggal kegiatan selesai.'
        );

        $peserta = PesertaKegiatan::where('id', $pesertaId)
            ->where('kegiatan_id', $kegiatanId)
            ->firstOrFail();

        if ($peserta->status === 'selesai') {
            return back()->with(
                'success',
                'Peserta ini sudah diverifikasi.'
            );
        }

        $peserta->update([
            'status' => 'selesai',
        ]);

        Sertifikat::firstOrCreate(
            [
                'user_id' => $peserta->user_id,
                'kegiatan_id' => $kegiatan->id,
            ],
            [
                'nomor_sertifikat' => 'BRT-' . strtoupper(Str::random(10)),
                'tanggal_terbit' => now(),
            ]
        );

        return back()->with(
            'success',
            'Peserta berhasil diverifikasi dan sertifikat berhasil diterbitkan!'
        );
    }

    // MENAMPILKAN DAFTAR PESERTA UNTUK EO
    public function daftarPeserta($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        abort_unless($kegiatan->user_id == auth()->id(), 403);

        $kegiatan->load('peserta.user');

        return view('kegiatan-peserta', compact('kegiatan'));
    }
}
