<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('welcome');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        // jika login sukses
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        // jika login gagal
        return back()->withErrors([
            'message' => 'Username atau password salah !',
        ])->onlyInput('email');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
