<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Tampilkan halaman pilih role
    public function pilihRole()
    {
        return view('pilihrole');
    }

    // Tampilkan halaman login sesuai role
    public function showLogin($role)
    {
        if (!in_array($role, ['peserta', 'panitia'])) {
            abort(404);
        }
        return view('login', compact('role'));
    }

    // Tampilkan halaman register sesuai role
    public function showRegister($role)
    {
        if (!in_array($role, ['peserta', 'panitia'])) {
            abort(404);
        }
        return view('register', compact('role'));
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:peserta,panitia',
        ]);

        // Cek apakah akun ada
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'Akun tidak ditemukan!'
            ], 404);
        }

        // Cek password
        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Password salah!'
            ], 401);
        }

        // Cek role
        if ($user->role !== $request->role) {
            return response()->json([
                'status' => 'error',
                'message' => 'Role tidak sesuai! Anda terdaftar sebagai ' . $user->role . '!'
            ], 403);
        }

        // Login
        Auth::login($user);
        $request->session()->regenerate();

        return response()->json([
            'status' => 'success',
            'redirect' => $user->role === 'peserta' ? '/peserta/dashboard' : '/panitia/dashboard'
        ]);
    }

    // Proses register
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:peserta,panitia',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Pendaftaran akun berhasil! Silakan login.'
        ]);
    }

    // Dashboard peserta
    public function dashboardPeserta()
    {
        return view('peserta.dashboard');
    }

    // Dashboard panitia
    public function dashboardPanitia()
    {
        return view('panitia.dashboard');
    }

    // Profil Peserta
    public function profilPeserta()
    {
        return view('peserta.profil');
    }

    // Profil Panitia
    public function profilPanitia()
    {
        return view('panitia.profil');
    }

    // Edit Profil
    public function editProfil()
    {
        return view('edit-profil');
    }

    public function updateProfil(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'nullable|string|max:15',
        'institusi' => 'nullable|string|max:255',
    ]);

    $user = Auth::user();
    $user->update([
        'name' => $request->name,
        'phone' => $request->phone,
        'institusi' => $request->institusi,
    ]);

    // Redirect ke profil sesuai role
    if ($user->role === 'peserta') {
        return redirect()->route('peserta.profil')->with('success', 'Profil berhasil diperbarui!');
    } else {
        return redirect()->route('panitia.profil')->with('success', 'Profil berhasil diperbarui!');
    }
}

    // Ganti Password
    public function gantiPassword()
    {
        return view('ganti-password');
    }

    public function updatePassword(Request $request)
{
    $request->validate([
        'password_lama' => 'required',
        'password_baru' => 'required|min:6|confirmed',
    ]);

    $user = Auth::user();

    if (!Hash::check($request->password_lama, $user->password)) {
        return back()->withErrors(['password_lama' => 'Password lama tidak sesuai!']);
    }

    $user->update([
        'password' => Hash::make($request->password_baru),
    ]);

    // Redirect ke profil sesuai role
    if ($user->role === 'peserta') {
        return redirect()->route('peserta.profil')->with('success', 'Password berhasil diubah!');
    } else {
        return redirect()->route('panitia.profil')->with('success', 'Password berhasil diubah!');
    }
}
    // Lupa Password
public function lupaPassword()
{
    return view('lupa-password');
}

public function kirimResetPassword(Request $request)
{
    $request->validate(['email' => 'required|email']);
    
    $user = User::where('email', $request->email)->first();
    
    if (!$user) {
        return response()->json([
            'status' => 'error',
            'message' => 'Email tidak ditemukan!'
        ], 404);
    }
    
    return response()->json([
        'status' => 'success',
        'message' => 'Link reset password telah dikirim!',
        'redirect' => route('reset.password', ['email' => $request->email])
    ]);
}

// Reset Password
public function resetPassword(Request $request)
{
    return view('reset-password');
}

public function simpanResetPassword(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6|confirmed',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return back()->withErrors(['email' => 'Email tidak ditemukan!']);
    }

    $user->update([
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('login', $user->role)->with('success', 'Password berhasil direset! Silakan login.');
}

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}