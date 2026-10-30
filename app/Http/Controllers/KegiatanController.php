<?php 
 
namespace App\Http\Controllers; 
 
use App\Models\Kegiatan; 
use Illuminate\Http\Request; 
use App\Models\PesertaKegiatan;

class KegiatanController extends Controller 
{ 
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

    // TAMBAHKAN DI SINI
    public function show($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        return view('kegiatan-detail', compact('kegiatan'));
    }

   public function join($id)
{
    $kegiatan = Kegiatan::findOrFail($id);

    PesertaKegiatan::firstOrCreate([
        'user_id' => auth()->id(),
        'kegiatan_id' => $kegiatan->id,
    ]);

    return redirect()
        ->route('ruang-aksi.detail', $kegiatan->id)
        ->with('success', 'Kamu berhasil bergabung dengan kegiatan!');
}

}