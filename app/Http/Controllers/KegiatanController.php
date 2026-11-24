<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\PesertaKegiatan;
use App\Models\Sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class KegiatanController extends Controller
{
 // MEMBUAT KEGIATAN
public function store(Request $request)
{
    $validated = $request->validate([
        'judul' => 'required|string|max:255',
        'kategori' => 'required|string',
        'deskripsi' => 'required|string',
        'tujuan' => 'required|string',
        'manfaat' => 'required|string',
        'persyaratan' => 'nullable|string',
        'perlengkapan' => 'nullable|string',
        'tanggal' => 'required|date',
        'waktu' => 'required',
        'lokasi' => 'required|string',
        'maps' => 'required|url',
        'jumlah_relawan' => 'required|integer|min:1',
        'batas_pendaftaran' => 'required|date',
        'foto' => 'required|image|mimes:jpg,jpeg,png|max:5120',
    ], [
        'maps.required' => 'Link Google Maps wajib diisi.',
        'maps.url' => 'Link Google Maps harus berupa URL yang valid.',
        'foto.required' => 'Foto kegiatan wajib diunggah.',
        'foto.image' => 'File yang diunggah harus berupa gambar.',
        'foto.mimes' => 'Format foto harus JPG, JPEG, atau PNG.',
        'foto.max' => 'Ukuran foto maksimal 5 MB.',
    ]);

    $foto = null;

    if ($request->hasFile('foto')) {
        $namaFoto = time() . '_' . uniqid() . '.' .
            $request->file('foto')->getClientOriginalExtension();

        $request->file('foto')->move(
            public_path('images/kegiatan'),
            $namaFoto
        );

        $foto = 'images/kegiatan/' . $namaFoto;
    }

    $kegiatan = Kegiatan::create([
        'user_id' => auth()->id(),
        'judul' => $validated['judul'],
        'kategori' => $validated['kategori'],
        'deskripsi' => $validated['deskripsi'],
        'tujuan' => $validated['tujuan'],
        'manfaat' => $validated['manfaat'],
        'persyaratan' => $validated['persyaratan'] ?? null,
        'perlengkapan' => $validated['perlengkapan'] ?? null,
        'tanggal' => $validated['tanggal'],
        'waktu' => $validated['waktu'],
        'lokasi' => $validated['lokasi'],
        'maps' => $validated['maps'] ?? null,
        'jumlah_relawan' => $validated['jumlah_relawan'],
        'batas_pendaftaran' => $validated['batas_pendaftaran'],
        'foto' => $foto,
    ]);

    // Respons khusus untuk pengiriman AJAX
    if ($request->expectsJson()) {
        return response()->json([
            'success' => true,
            'message' => 'Kegiatan berhasil dipublikasikan!',
            'redirect' => route('kegiatan'),
            'kegiatan_id' => $kegiatan->id,
        ]);
    }

    // Tetap mendukung pengiriman formulir biasa
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

    // Hanya penyelenggara yang boleh memverifikasi
    abort_unless($kegiatan->user_id == auth()->id(), 403);

    // Verifikasi hanya bisa dilakukan setelah tanggal kegiatan
    if (Carbon::parse($kegiatan->tanggal)->isFuture()) {
        return back()->with(
            'error',
            'Peserta hanya bisa diverifikasi setelah tanggal kegiatan selesai.'
        );
    }

    $peserta = PesertaKegiatan::where('id', $pesertaId)
        ->where('kegiatan_id', $kegiatanId)
        ->firstOrFail();

    // Cek apakah peserta sudah dinyatakan hadir
    if ($peserta->status_kehadiran === 'hadir') {
        return back()->with(
            'success',
            'Peserta ini sudah diverifikasi.'
        );
    }

    // Tandai peserta sebagai hadir
    $peserta->update([
        'status_kehadiran' => 'hadir',
    ]);

    // Terbitkan sertifikat
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

// MENAMPILKAN FORM EDIT KEGIATAN
public function edit($id)
{
    $kegiatan = Kegiatan::findOrFail($id);

    // Hanya penyelenggara yang boleh mengedit
    abort_unless($kegiatan->user_id == auth()->id(), 403);

    return view('edit-kegiatan', compact('kegiatan'));
}


// MENYIMPAN PERUBAHAN KEGIATAN
public function update(Request $request, $id)
{
    $kegiatan = Kegiatan::findOrFail($id);

    // Pastikan hanya pemilik kegiatan yang bisa mengubah
    abort_unless($kegiatan->user_id == auth()->id(), 403);

    $validated = $request->validate([
        'judul' => 'required|string|max:255',
        'kategori' => 'required|string',
        'deskripsi' => 'required|string',
        'tujuan' => 'required|string',
        'manfaat' => 'required|string',
        'persyaratan' => 'nullable|string',
        'perlengkapan' => 'nullable|string',
        'tanggal' => 'required|date',
        'waktu' => 'required',
        'lokasi' => 'required|string',
        'maps' => 'nullable|url',
        'jumlah_relawan' => 'required|integer|min:1',
        'batas_pendaftaran' => 'required|date',
        'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
    ]);

    $fotoLama = $kegiatan->foto;

    // Jika penyelenggara mengunggah foto baru
    if ($request->hasFile('foto')) {
        $namaFoto = time() . '_' . uniqid() . '.' .
            $request->file('foto')->getClientOriginalExtension();

        $request->file('foto')->move(
            public_path('images/kegiatan'),
            $namaFoto
        );

        $validated['foto'] = 'images/kegiatan/' . $namaFoto;
    }

    $kegiatan->update($validated);

    // Hapus foto lama setelah foto baru berhasil disimpan
    if (
        $request->hasFile('foto') &&
        $fotoLama &&
        str_starts_with($fotoLama, 'images/kegiatan/')
    ) {
        $pathFotoLama = public_path($fotoLama);

        if (File::exists($pathFotoLama)) {
            File::delete($pathFotoLama);
        }
    }

    return redirect()
        ->route('kegiatan-saya')
        ->with('success', 'Kegiatan berhasil diperbarui!');
}


// MENGHAPUS KEGIATAN SECARA PERMANEN
public function destroy($id)
{
    $kegiatan = Kegiatan::findOrFail($id);

    // Hanya penyelenggara yang boleh menghapus
    abort_unless($kegiatan->user_id == auth()->id(), 403);

    $foto = $kegiatan->foto;

    // Hapus data terkait dalam satu transaksi
    DB::transaction(function () use ($kegiatan) {

        // Hapus sertifikat kegiatan
        DB::table('sertifikats')
            ->where('kegiatan_id', $kegiatan->id)
            ->delete();

        // Hapus seluruh pesan Ruang Aksi kegiatan
        DB::table('pesan_kegiatans')
            ->where('kegiatan_id', $kegiatan->id)
            ->delete();

        // Hapus seluruh pendaftaran peserta
        DB::table('peserta_kegiatans')
            ->where('kegiatan_id', $kegiatan->id)
            ->delete();

        // Hapus kegiatan
        $kegiatan->delete();
    });

    // Hapus foto kegiatan dari folder public/images/kegiatan
    if ($foto && str_starts_with($foto, 'images/kegiatan/')) {
        $pathFoto = public_path($foto);

        if (File::exists($pathFoto)) {
            File::delete($pathFoto);
        }
    }

    return redirect()
        ->route('kegiatan-saya')
        ->with('success', 'Kegiatan dan seluruh data terkait berhasil dihapus permanen!');
}
}
