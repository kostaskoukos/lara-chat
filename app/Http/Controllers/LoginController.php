<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function login(LoginRequest $req)
    {
        return $req->authenticate();
    }

    public function logout(Request $req)
    {
        auth()->logout();

        $req->session()->invalidate();

        $req->session()->regenerateToken();

        return redirect('/login');
    }
}
