<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\RuangAksiController;


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

// Menampilkan halaman login
Route::get('/login', function () {
    return view('login');
})->name('login');


// Memproses login
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

// Menampilkan halaman register
Route::get('/register', function () {
    return view('register');
})->name('register');


// Memproses register
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


    // Membuat akun pengguna baru
    // Password otomatis di-hash melalui User.php
    $user = User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => $validated['password'],
    ]);


    // Login otomatis setelah register
    Auth::login($user);


    // Membuat session baru
    $request->session()->regenerate();


    // Mengarahkan pengguna ke dashboard
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

Route::get('/kegiatan', function () {
    $kegiatan = \App\Models\Kegiatan::latest()->get();

    return view('kegiatan', compact('kegiatan'));
})
    ->middleware('auth')
    ->name('kegiatan');

Route::get('/kegiatan/{id}', [KegiatanController::class, 'show'])
    ->middleware('auth')
    ->name('kegiatan.detail');

Route::post('/kegiatan/{id}/join', [KegiatanController::class, 'join'])
    ->middleware('auth')
    ->name('kegiatan.join');
/*
|--------------------------------------------------------------------------
| Halaman Kegiatan Saya
|--------------------------------------------------------------------------
*/

Route::get('/kegiatan-saya', function () {
    return view('kegiatan-saya');
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

// Ruang Aksi umum
Route::get('/ruang-aksi', [RuangAksiController::class, 'index'])
    ->middleware('auth')
    ->name('ruang-aksi');

// Ruang Aksi berdasarkan kegiatan
Route::get('/ruang-aksi/{id}', [RuangAksiController::class, 'show'])
    ->middleware('auth')
    ->name('ruang-aksi.detail');

// Mengirim pesan Ruang Aksi
Route::post('/ruang-aksi/{id}/pesan', [RuangAksiController::class, 'storeMessage'])
    ->middleware('auth')
    ->name('ruang-aksi.pesan.store');


/*
|--------------------------------------------------------------------------
| Halaman Sertifikat
|--------------------------------------------------------------------------
*/

Route::get('/sertifikat', function () {
    return view('sertifikat');
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