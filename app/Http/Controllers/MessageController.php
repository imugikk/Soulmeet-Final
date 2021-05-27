<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Message;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('landing.message', compact('messages'));
    }

    public function store(Request $request)
    {
        $message = new Message;
        $message->id = $request->id;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        return redirect()->back()->with(['success' => 'Pesan Berhasil dikirim']);
    }
}
