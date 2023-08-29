<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $g = Socialite::driver('google')->user();

        $user = User::updateOrCreate([
            'googleid' => $g->getId()
        ], [
            'name' => $g->getName(),
            'email' => $g->getEmail(),
            'avatar_url' => $g->getAvatar()
        ]);

        auth()->login($user);

        return redirect('/');
    }
}
