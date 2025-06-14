<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
     public function showLoginForm()
    {
        return view('login'); // sesuaikan dengan nama file view login kamu
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/layanan'); // ✅ redirect ke halaman tujuan
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
}
