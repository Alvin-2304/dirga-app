<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Lomba;

// Splash screen (halaman pertama)
Route::get('/', function () {
    return view('splash');
});

// Pilih role
Route::get('/pilih-role', [AuthController::class, 'pilihRole'])->name('pilih.role');

// Login dan Register sesuai role
Route::get('/login/{role}', [AuthController::class, 'showLogin'])->name('login');
Route::get('/register/{role}', [AuthController::class, 'showRegister'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Reset Password (tanpa login)
Route::get('/lupa-password', [AuthController::class, 'lupaPassword'])->name('lupa.password');
Route::post('/lupa-password', [AuthController::class, 'kirimResetPassword'])->name('lupa.password.post');
Route::get('/reset-password', [AuthController::class, 'resetPassword'])->name('reset.password');
Route::post('/reset-password', [AuthController::class, 'simpanResetPassword'])->name('reset.password.post');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ==================== MIDDLEWARE AUTH ====================
Route::middleware(['auth'])->group(function () {

    // Dashboard Peserta
    Route::get('/peserta/dashboard', [AuthController::class, 'dashboardPeserta'])->name('peserta.dashboard');

    // Dashboard Panitia (dengan data lomba dari DB)
    Route::get('/panitia/dashboard', function () {
        $lombas = Lomba::where('user_id', Auth::id())->latest()->get();
        return view('panitia.dashboard', compact('lombas'));
    })->name('panitia.dashboard');

    // Profil Peserta & Panitia
    Route::get('/peserta/profil', [AuthController::class, 'profilPeserta'])->name('peserta.profil');
    Route::get('/panitia/profil', [AuthController::class, 'profilPanitia'])->name('panitia.profil');

    // Edit Profil
    Route::get('/edit-profil', [AuthController::class, 'editProfil'])->name('edit.profil');
    Route::put('/edit-profil', [AuthController::class, 'updateProfil'])->name('update.profil');

    // Ganti Password
    Route::get('/ganti-password', [AuthController::class, 'gantiPassword'])->name('ganti.password');
    Route::put('/ganti-password', [AuthController::class, 'updatePassword'])->name('update.password');

    // ==================== LOMBA ====================

    // Daftar Lomba (Peserta)
    Route::get('/lomba', function () {
        $lombas = Lomba::where('status', 'publish')->latest()->get();
        return view('peserta.daftar-lomba', compact('lombas'));
    })->name('lomba.index');

    // Detail Lomba
    Route::get('/lomba/{id}', function ($id) {
        $lomba = Lomba::findOrFail($id);
        return view('peserta.detail-lomba', compact('lomba'));
    })->name('lomba.detail');

    // Form Pendaftaran Lomba
    Route::get('/lomba/{id}/daftar', function ($id) {
        $lomba = Lomba::findOrFail($id);
        return view('peserta.form-daftar', compact('lomba'));
    })->name('daftar.create');

    // Submit Pendaftaran + Notifikasi ke Panitia
    Route::post('/lomba/{id}/daftar', function (Request $request, $id) {
        \App\Models\Pendaftaran::create([
            'user_id' => Auth::id(),
            'lomba_id' => $id,
            'motivasi' => $request->motivasi,
            'phone' => $request->phone,
            'institusi' => $request->institusi,
            'status' => 'menunggu',
        ]);

        // Kirim notifikasi ke panitia
        $lomba = Lomba::find($id);
        \App\Models\Notifikasi::create([
            'user_id' => $lomba->user_id,
            'judul' => 'Pendaftar Baru',
            'pesan' => Auth::user()->name . ' baru saja mendaftar di ' . $lomba->nama,
            'tipe' => 'pendaftaran',
        ]);

        return view('peserta.daftar-sukses');
    })->name('daftar.store');

    // Lomba Saya (Peserta)
    Route::get('/lomba-saya', function () {
        $pendaftarans = \App\Models\Pendaftaran::where('user_id', Auth::id())->with('lomba')->latest()->get();
        return view('peserta.lomba-saya', compact('pendaftarans'));
    })->name('lomba.saya');

    // ==================== PANITIA ====================

    // Buat Lomba (Form)
    Route::get('/buat-lomba', function () {
        return view('panitia.buat-lomba');
    })->name('lomba.create');

    // Simpan Lomba
    Route::post('/lomba', function (Request $request) {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string',
        ]);

        Lomba::create([
            'user_id' => Auth::id(),
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'deadline' => $request->deadline,
            'tanggal_pengumuman' => $request->tanggal_pengumuman,
            'juara_1' => $request->juara_1,
            'juara_2' => $request->juara_2,
            'juara_3' => $request->juara_3,
            'total_hadiah' => $request->total_hadiah,
            'biaya' => $request->biaya ?? 0,
            'ketentuan' => $request->ketentuan,
            'status' => 'publish',
        ]);

        return redirect()->route('panitia.dashboard')->with('success', 'Lomba berhasil dipublish!');
    })->name('lomba.store');

    // Kelola Peserta (Panitia)
    Route::get('/lomba/{id}/peserta', function ($id) {
        $lomba = Lomba::findOrFail($id);
        $pendaftarans = \App\Models\Pendaftaran::where('lomba_id', $id)->with('user')->get();
        return view('panitia.kelola-peserta', compact('lomba', 'pendaftarans'));
    })->name('kelola.peserta');

    // Update Status Pendaftaran (Terima/Tolak)
    Route::put('/pendaftaran/{id}/status', function (Request $request, $id) {
        $pendaftaran = \App\Models\Pendaftaran::findOrFail($id);
        $pendaftaran->update(['status' => $request->status]);
        return redirect()->back()->with('success', 'Status peserta berhasil diupdate!');
    })->name('daftar.status');

    // Leaderboard Panitia
    Route::get('/panitia/leaderboard', function () {
        return view('panitia.leaderboard');
    })->name('panitia.leaderboard');

    // ==================== NOTIFIKASI ====================

    // Notifikasi Peserta
    Route::get('/peserta/notifikasi', function () {
        $notifikasis = \App\Models\Notifikasi::where('user_id', Auth::id())->latest()->get();
        return view('peserta.notifikasi', compact('notifikasis'));
    })->name('peserta.notifikasi');

    // Notifikasi Panitia
    Route::get('/panitia/notifikasi', function () {
        $notifikasis = \App\Models\Notifikasi::where('user_id', Auth::id())->latest()->get();
        return view('panitia.notifikasi', compact('notifikasis'));
    })->name('panitia.notifikasi');
});

// Test
Route::get('/test', function () {
    return view('test');
});