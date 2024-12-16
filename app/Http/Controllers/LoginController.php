<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        // Menampilkan halaman login
        return view('login');
    }

    public function authenticate(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Verifikasi username dan password
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === 'Fows' && $password === 'fows1234') {
            // Set session authenticated
            session(['authenticated' => true]);

            // Redirect ke halaman admin
            return redirect('/profile');
        }

        // Jika gagal login
        return back()->with('error', 'Username atau Password salah');
    }

    public function logout()
    {
        // Hapus session authenticated
        session()->forget('authenticated');

        // Redirect ke halaman login
        return redirect('/login');
    }
}
