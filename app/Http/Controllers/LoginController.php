<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
       
        return view('login');
    }

    public function authenticate(Request $request)
    {
        
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === 'Ahmad' && $password === 'fows1234') {
            
            session(['authenticated' => true, 'username' => $username]);

            
            return redirect('/profile');
        }

        // Jika false login
        return back()->with('error', 'Username atau Password salah');
    }

    public function logout()
    {
        
        session()->forget(['authenticated', 'username']);

        
        return redirect('/profile');
    }
}
