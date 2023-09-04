<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }

    public function register(RegisterRequest $req)
    {
        $values = $req->validated();

        $user = User::create([
            'name' => $values['name'],
            'email' => $values['email'],
            'password' => Hash::make($values['password'])
        ]);

        if (!isset($user))
            return back()
                ->withInput()
                ->withErrors(['attempt' => "couldn't create user"]);

        auth()->login($user);

        return redirect('/');
    }
}
