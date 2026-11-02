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

    // PESERTA BERGABUNG DENGAN KEGIATAN
    public function join($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        PesertaKegiatan::firstOrCreate(
            [
                'user_id' => auth()->id(),
                'kegiatan_id' => $kegiatan->id,
            ],
            [
                'status' => 'terdaftar',
            ]
        );

        return redirect()
            ->route('ruang-aksi.detail', $kegiatan->id)
            ->with('success', 'Kamu berhasil bergabung dengan kegiatan!');
    }

    // VERIFIKASI PESERTA DAN TERBITKAN SERTIFIKAT
    public function verifikasiPeserta($kegiatanId, $pesertaId)
    {
        $kegiatan = Kegiatan::findOrFail($kegiatanId);

        // Hanya EO pembuat kegiatan yang boleh memverifikasi
        abort_unless($kegiatan->user_id == auth()->id(), 403);

        // Kegiatan harus sudah melewati tanggal pelaksanaan
        abort_if(
            Carbon::parse($kegiatan->tanggal)->isFuture(),
            403,
            'Peserta hanya bisa diverifikasi setelah tanggal kegiatan selesai.'
        );

        $peserta = PesertaKegiatan::where('id', $pesertaId)
            ->where('kegiatan_id', $kegiatanId)
            ->firstOrFail();

        // Cegah verifikasi dan penerbitan sertifikat berulang
        if ($peserta->status === 'selesai') {
            return back()->with(
                'success',
                'Peserta ini sudah diverifikasi.'
            );
        }

        // Ubah status peserta
        $peserta->update([
            'status' => 'selesai',
        ]);

        // Terbitkan sertifikat secara otomatis
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

        // Hanya pembuat kegiatan yang boleh melihat peserta
        abort_unless($kegiatan->user_id == auth()->id(), 403);

        // Mengambil data peserta beserta akun mereka
        $kegiatan->load('peserta.user');

        return view('kegiatan-peserta', compact('kegiatan'));
    }
}
