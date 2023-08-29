<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function show()
    {
        return view('chat', [
            'messages' => Message::with('user')->get()
        ]);
    }

    public function store(Request $req)
    {
        $req->validate([
            'content' => ['required', 'string']
        ]);

        $msg = Message::create([
            'content' => $req->content,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/');
    }
}
