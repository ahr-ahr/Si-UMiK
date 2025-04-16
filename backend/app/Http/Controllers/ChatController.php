<?php
namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        $chats = Chat::with(['sender', 'receiver'])
            ->where('sender_id', $userId)
            ->orWhere('receiver_id', $userId)
            ->orderBy('sent_at', 'desc')
            ->get();

        $users = User::where('id', '!=', $userId)->get();

        return view('chat.index', compact('chats', 'users'));
    }


    public function show($id)
    {
        $chat = Chat::with(['sender', 'receiver'])->findOrFail($id);
        return view('chat.show', compact('chat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'message' => 'required|string',
        ]);

        $chat = Chat::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
            'sent_at' => now(),
        ]);

        // Tambahkan eager loading relasi biar frontend langsung bisa pakai
        $chat->load(['sender', 'receiver']);

        broadcast(new MessageSent($chat))->toOthers();

        return response()->json([
            'success' => true,
            'message' => 'Pesan berhasil dikirim.',
            'chat' => $chat
        ]);
    }


}
