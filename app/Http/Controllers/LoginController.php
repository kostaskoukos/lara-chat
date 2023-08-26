<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function login(Request $req)
    {
        $req->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
            'remember' => ['nullable', 'string']
        ]);

        if (auth()->attempt(['email' => $req->email, 'password' => $req->password], $req->remember)) {

            $req->session()->regenerate();
            return redirect()->intended('/');
        }

        return back();
    }

    public function logout(Request $req)
    {
        auth()->logout();

        $req->session()->invalidate();

        $req->session()->regenerateToken();

        return redirect('/login');
    }
}
