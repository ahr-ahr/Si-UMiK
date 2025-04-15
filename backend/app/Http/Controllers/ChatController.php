<?php
namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $chats = Chat::with(['sender', 'receiver'])->latest()->get();
        return view('chat.index', compact('chats'));
    }

    public function show($id)
    {
        $chat = Chat::with(['sender', 'receiver'])->findOrFail($id);
        return view('chat.show', compact('chat'));
    }
}
