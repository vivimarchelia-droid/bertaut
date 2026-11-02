<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\RuangAksiController;
use App\Http\Controllers\ProfilController;


/*
|--------------------------------------------------------------------------
| Halaman Utama
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Halaman Login
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {

    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->route('dashboard');
    }

    return back()
        ->withErrors([
            'email' => 'Email atau password yang kamu masukkan salah.',
        ])
        ->withInput();

})->name('login.process');


/*
|--------------------------------------------------------------------------
| Halaman Register
|--------------------------------------------------------------------------
*/

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', function (Request $request) {

    $validated = $request->validate([
        'name' => [
            'required',
            'string',
            'max:255',
        ],

        'email' => [
            'required',
            'email',
            'max:255',
            'unique:users,email',
        ],

        'password' => [
            'required',
            'min:8',
            'confirmed',
        ],
    ], [
        'name.required' => 'Nama lengkap wajib diisi.',
        'email.required' => 'Email wajib diisi.',
        'email.email' => 'Format email tidak valid.',
        'email.unique' => 'Email tersebut sudah terdaftar.',
        'password.required' => 'Password wajib diisi.',
        'password.min' => 'Password minimal harus 8 karakter.',
        'password.confirmed' => 'Konfirmasi password tidak cocok.',
    ]);

    $user = User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => $validated['password'],
    ]);

    Auth::login($user);

    $request->session()->regenerate();

    return redirect()->route('dashboard');

})->name('register.process');


/*
|--------------------------------------------------------------------------
| Halaman Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');


/*
|--------------------------------------------------------------------------
| Halaman Jelajahi Kegiatan
|--------------------------------------------------------------------------
*/

Route::get('/kegiatan', function (Request $request) {

    $query = trim($request->input('search', ''));

    $kegiatan = \App\Models\Kegiatan::query()

        // Hanya tampilkan kegiatan hari ini dan mendatang
        ->whereDate('tanggal', '>=', today())

        // Fitur pencarian
        ->when($query !== '', function ($builder) use ($query) {
            $builder->where(function ($search) use ($query) {
                $search->where('judul', 'like', "%{$query}%")
                    ->orWhere('kategori', 'like', "%{$query}%")
                    ->orWhere('deskripsi', 'like', "%{$query}%")
                    ->orWhere('lokasi', 'like', "%{$query}%");
            });
        })

        ->orderBy('tanggal', 'asc')
        ->get();

    return view('kegiatan', compact('kegiatan', 'query'));

})
    ->middleware('auth')
    ->name('kegiatan');

    // Halaman detail kegiatan
Route::get('/kegiatan/{id}', [KegiatanController::class, 'show'])
    ->middleware('auth')
    ->name('kegiatan.detail');

// Bergabung dengan kegiatan
Route::post('/kegiatan/{id}/join', [KegiatanController::class, 'join'])
    ->middleware('auth')
    ->name('kegiatan.join');

/*
|--------------------------------------------------------------------------
| Pendaftaran Kegiatan
|--------------------------------------------------------------------------
*/

Route::get('/kegiatan/{id}/daftar', [KegiatanController::class, 'registrationForm'])
    ->middleware('auth')
    ->name('kegiatan.daftar');

Route::post('/kegiatan/{id}/daftar', [KegiatanController::class, 'registerParticipant'])
    ->middleware('auth')
    ->name('kegiatan.daftar.store');


/*
|--------------------------------------------------------------------------
| Verifikasi Peserta Oleh EO
|--------------------------------------------------------------------------
*/

Route::post(
    '/kegiatan/{kegiatanId}/peserta/{pesertaId}/verifikasi',
    [KegiatanController::class, 'verifikasiPeserta']
)
    ->middleware('auth')
    ->name('kegiatan.verifikasi-peserta');


/*
|--------------------------------------------------------------------------
| Halaman Daftar Peserta Untuk EO
|--------------------------------------------------------------------------
*/

Route::get(
    '/kegiatan/{id}/peserta',
    [KegiatanController::class, 'daftarPeserta']
)
    ->middleware('auth')
    ->name('kegiatan.peserta');

/*
|--------------------------------------------------------------------------
| Halaman Kegiatan Saya
|--------------------------------------------------------------------------
*/

Route::get('/kegiatan-saya', function (Request $request) {

    $userId = auth()->id();

    // Kegiatan yang diikuti pengguna, bukan kegiatan yang dibuat sendiri
    $kegiatanDiikuti = \App\Models\Kegiatan::whereHas('peserta', function ($query) use ($userId) {
        $query->where('user_id', $userId);
    })
        ->where('user_id', '!=', $userId);

    // Kegiatan yang dibuat pengguna
    $kegiatanDibuat = \App\Models\Kegiatan::where('user_id', $userId);

    // Pencarian kegiatan
    if ($request->filled('search')) {
        $search = $request->search;

        $filter = function ($query) use ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('judul', 'like', "%{$search}%")
                    ->orWhere('kategori', 'like', "%{$search}%")
                    ->orWhere('lokasi', 'like', "%{$search}%")
                    ->orWhere('deskripsi', 'like', "%{$search}%");
            });
        };

        $kegiatanDiikuti->where($filter);
        $kegiatanDibuat->where($filter);
    }

    // Hanya tampilkan kegiatan yang belum melewati tanggal
    $kegiatanDiikuti->whereDate('tanggal', '>=', today());
    $kegiatanDibuat->whereDate('tanggal', '>=', today());

    $kegiatanDiikuti = $kegiatanDiikuti->latest()->get();
    $kegiatanDibuat = $kegiatanDibuat->latest()->get();

    return view('kegiatan-saya', compact(
        'kegiatanDiikuti',
        'kegiatanDibuat'
    ));

})
    ->middleware('auth')
    ->name('kegiatan-saya');


/*
|--------------------------------------------------------------------------
| Halaman Buat Kegiatan
|--------------------------------------------------------------------------
*/

Route::get('/buat-kegiatan', function () {
    return view('buat-kegiatan');
})
    ->middleware('auth')
    ->name('buat-kegiatan');

Route::post('/buat-kegiatan', [KegiatanController::class, 'store'])
    ->middleware('auth')
    ->name('buat-kegiatan.store');


/*
|--------------------------------------------------------------------------
| Halaman Ruang Aksi
|--------------------------------------------------------------------------
*/

Route::get('/ruang-aksi', [RuangAksiController::class, 'index'])
    ->middleware('auth')
    ->name('ruang-aksi');

Route::get('/ruang-aksi/{id}', [RuangAksiController::class, 'show'])
    ->middleware('auth')
    ->name('ruang-aksi.detail');

Route::post('/ruang-aksi/{id}/pesan', [RuangAksiController::class, 'storeMessage'])
    ->middleware('auth')
    ->name('ruang-aksi.pesan.store');


/*
|--------------------------------------------------------------------------
| Halaman Sertifikat
|--------------------------------------------------------------------------
*/

Route::get('/sertifikat', function () {

    $sertifikats = \App\Models\Sertifikat::with('kegiatan')
        ->where('user_id', auth()->id())
        ->latest('tanggal_terbit')
        ->get();

    return view('sertifikat', compact('sertifikats'));

})
    ->middleware('auth')
    ->name('sertifikat');


/*
|--------------------------------------------------------------------------
| Halaman Profil
|--------------------------------------------------------------------------
*/

Route::get('/profil', function () {
    return view('profil');
})
    ->middleware('auth')
    ->name('profil');

Route::put('/profil/update', [ProfilController::class, 'update'])
    ->middleware('auth')
    ->name('profil.update');

Route::post('/profil/password', [ProfilController::class, 'updatePassword'])
    ->middleware('auth')
    ->name('profil.password.update');


/*
|--------------------------------------------------------------------------
| Logout
|--------------------------------------------------------------------------
*/

Route::post('/logout', function (Request $request) {

    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login');

})
    ->middleware('auth')
    ->name('logout');
