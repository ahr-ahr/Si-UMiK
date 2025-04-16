<?php

namespace App\Events;

use App\Models\Chat;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Broadcasting\Channel;

class MessageSent implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $chat;

    public function __construct(Chat $chat)
    {
        $this->chat = $chat;
    }

    public function broadcastOn()
    {
        return new Channel('chat');
    }

    public function broadcastWith()
    {
        return [
            'id' => $this->chat->id,
            'message' => $this->chat->message,
            'sent_at' => $this->chat->sent_at,
            'sender' => [
                'id' => $this->chat->sender->id,
                'fullname' => $this->chat->sender->fullname,
                'role' => $this->chat->sender->role,
            ],
            'receiver' => [
                'id' => $this->chat->receiver->id,
                'fullname' => $this->chat->receiver->fullname,
                'role' => $this->chat->receiver->role,
            ],
        ];
    }
}
