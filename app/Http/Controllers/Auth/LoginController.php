<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika pengguna berhasil login, cek peran pengguna
            if (Auth::user()->role === 'admin') {
                return redirect()->route('dashboard')->with('success', 'Selamat datang, Admin!');
            } else {
                return redirect()->route('home')->with('success', 'Selamat datang!');
            }
        }

        return redirect()->back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}

