<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\PesertaKegiatan;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $userId = auth()->id();

        // Mengambil kegiatan yang dibuat dan yang diikuti pengguna
$kegiatanSaya = Kegiatan::whereDate('tanggal', '>=', now()->toDateString())
    ->where(function ($query) use ($userId) {
        $query->where('user_id', $userId)
            ->orWhereHas('peserta', function ($q) use ($userId) {
                $q->where('user_id', $userId);
            });
    })
    ->latest()
    ->get();

        // Mengambil semua kegiatan yang tersedia
        $query = Kegiatan::withCount('peserta')
    ->with('user')
    ->whereDate('tanggal', '>=', now()->toDateString())
    ->latest();

        // Pencarian berdasarkan judul, kategori, dan lokasi
        if ($request->filled('cari')) {
            $cari = $request->cari;

            $query->where(function ($q) use ($cari) {
                $q->where('judul', 'like', "%{$cari}%")
                    ->orWhere('kategori', 'like', "%{$cari}%")
                    ->orWhere('lokasi', 'like', "%{$cari}%");
            });
        }

        // Filter berdasarkan kategori
        if ($request->filled('kategori') && $request->kategori !== 'Semua') {
            $query->where('kategori', $request->kategori);
        }

        $kegiatans = $query->take(6)->get();

        return view('dashboard', compact(
            'kegiatanSaya',
            'kegiatans'
        ));
    }
}