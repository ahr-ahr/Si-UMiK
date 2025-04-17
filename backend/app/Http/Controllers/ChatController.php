<?php
namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->ajax() && !$request->expectsJson()) {
            abort(403, 'Akses tidak diizinkan.');
        }


        $receiverId = $request->get('receiver_id');

        $chats = Chat::where(function ($query) use ($receiverId) {
            $query->where('sender_id', auth()->id())
                ->where('receiver_id', $receiverId);
        })
            ->orWhere(function ($query) use ($receiverId) {
                $query->where('sender_id', $receiverId)
                    ->where('receiver_id', auth()->id());
            })
            ->orderBy('sent_at')
            ->get();

        return response()->json(['chats' => $chats]);
    }

    // Menampilkan view chat dan mengirimkan daftar pengguna dan chat
    public function show(Request $request)
    {
        $userId = auth()->id();  // ID pengguna yang sedang login

        $receiverId = $request->get('receiver_id');

        // Ambil semua pengguna selain yang sedang login
        $users = User::where('id', '!=', $userId)->get();

        // Ambil riwayat chat antara pengguna yang sedang login dan setiap penerima
        // Mengambil chat antara user yang sedang login dan receiver
        $chats = Chat::with(['sender', 'receiver'])
            ->where(function ($query) use ($receiverId) {
                $query->where('sender_id', auth()->id())
                    ->where('receiver_id', $receiverId);
            })
            ->orWhere(function ($query) use ($receiverId) {
                $query->where('sender_id', $receiverId)
                    ->where('receiver_id', auth()->id());
            })
            ->orderBy('sent_at')
            ->get();

        return view('chat.index', compact('chats', 'users'));  // Kirim $chats dan $users ke view
    }

    // Menyimpan pesan chat
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
