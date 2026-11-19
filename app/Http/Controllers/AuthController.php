<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
  // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }
  // Menggunakan LoginRequest (validasi otomatis terjadi sebelum fungsi ini dijalankan)
    public function login(LoginRequest $request)
    {
    // Jalankan logika autentikasi yang ada di LoginRequest
        $request->authenticate();
        return redirect()->intended('/dashboard');
    }
  // Memproses logout
    public function logout(Request $request)

    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
