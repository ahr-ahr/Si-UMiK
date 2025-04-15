<?php
namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\User;

class ChatController extends Controller
{
    // Menyimpan pesan
    public function sendMessage(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'receiver_name' => 'required|exists:users,name',  // Validasi berdasarkan username
            'message' => 'required|string|max:255',
        ]);

        // Cari penerima berdasarkan username
        $receiver = User::where('name', $validated['receiver_name'])->first();

        // Simpan pesan
        $message = Message::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $receiver->id,
            'message' => $validated['message'],
        ]);

        return response()->json($message);
    }

    // Menampilkan pesan
    public function getMessages(User $user)
    {
        $messages = Message::where('sender_id', auth()->id())
            ->where('receiver_id', $user->id)
            ->orWhere(function ($query) use ($user) {
                $query->where('sender_id', $user->id)
                    ->where('receiver_id', auth()->id());
            })
            ->get();

        return view('chat', ['messages' => $messages, 'receiver' => $user]);
    }

    public function showChat($receiver_id)
    {
        // Ambil data user yang akan di-chat
        $receiver = User::find($receiver_id);

        // Ambil pesan-pesan yang ada antara user yang login dan penerima
        $messages = Message::where(function ($query) use ($receiver) {
            $query->where('sender_id', auth()->id())
                ->where('receiver_id', $receiver->id);
        })
            ->orWhere(function ($query) use ($receiver) {
                $query->where('sender_id', $receiver->id)
                    ->where('receiver_id', auth()->id());
            })
            ->get();

        // Kirim data ke view
        return view('chat', ['messages' => $messages, 'receiver_id' => $receiver_id]);
    }

}

?>
