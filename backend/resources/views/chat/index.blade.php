<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/socket.io-client@4.0.0/dist/socket.io.min.js"></script>
    <style>
        #chat-list {
            max-height: 400px;
            overflow-y: auto;
            margin-bottom: 20px;
        }

        .chat-message {
            display: flex;
            margin-bottom: 10px;
            flex-direction: column;
        }

        .sender {
            align-items: flex-end;
        }

        .received {
            align-items: flex-start;
        }

        .message-bubble {
            max-width: 75%;
            padding: 10px;
            border-radius: 10px;
            background-color: #f0f0f0;
            word-wrap: break-word;
            margin-bottom: 5px;
        }

        .message-bubble.sent {
            background-color: #007bff;
            color: white;
            align-self: flex-end;
        }

        .message-bubble.received {
            background-color: #e1e1e1;
            align-self: flex-start;
        }

        .chat-header {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .status {
            color: red;
        }

        @media (max-width: 767px) {
            #chat-list {
                max-height: 300px;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-4">
    <h2>Chat</h2>

    <!-- Form Kirim Pesan -->
    <form id="chat-form" class="mb-4">
        @csrf
        <div class="form-group mb-2">
            <label for="receiver_id">Kepada:</label>
            <select id="receiver_id" name="receiver_id" class="form-control" required>
                <option value="">-- Pilih Penerima --</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" class="user-status" data-fullname="{{ $user->fullname }}">
                        {{ $user->fullname }} ({{ $user->role }}) - <span class="status">Offline</span>
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-2">
            <label for="message">Pesan:</label>
            <textarea id="message" name="message" class="form-control" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>

    <hr>

    <h4>Riwayat Chat</h4>
    <div id="chat-list">
        @if($chats && $chats->isNotEmpty())
            @foreach($chats as $chat)
                <div class="chat-message {{ $chat->sender_id === auth()->id() ? 'sender' : 'received' }}">
                    <div class="message-bubble {{ $chat->sender_id === auth()->id() ? 'sent' : 'received' }}">
                        <p><strong>Dari:</strong> {{ $chat->sender->fullname }} ({{ $chat->sender->role }})</p>
                        <p><strong>Ke:</strong> {{ $chat->receiver->fullname }}</p>
                        <p>{{ $chat->message }}</p>
                        <small class="text-muted">Dikirim: {{ $chat->sent_at }}</small>
                    </div>
                </div>
            @endforeach
        @else
            <p>Belum ada pesan.</p>
        @endif
    </div>
</div>

    <script>
        const socket = io('http://localhost:3000');

        // Mengirim nama pengguna saat terkoneksi
        socket.on('connect', () => {
            const fullname = "{{ auth()->user()->fullname }}";
            socket.emit('user_connected', fullname);
        });

        // Menampilkan status online/offline
        socket.on('user_status', (data) => {
            const userElement = document.querySelector(`.user-status[data-fullname="${data.fullname}"]`);
            if (userElement) {
                userElement.querySelector('.status').textContent = data.status === 'online' ? 'Online' : 'Offline';
                userElement.querySelector('.status').style.color = data.status === 'online' ? 'green' : 'red';
            }
        });

        document.getElementById('chat-form').addEventListener('submit', function (e) {
            e.preventDefault();

            const receiverSelect = document.getElementById('receiver_id');
            const receiver_id = receiverSelect.value;
            const message = document.getElementById('message').value;
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Periksa apakah penerima dipilih (jangan biarkan "-- Pilih Penerima --")
            if (receiver_id === "" || receiverSelect.selectedIndex === 0) {
                alert("Pilih penerima yang valid.");
                return;
            }

            // Mendapatkan nama penerima (fullname) dari pilihan dropdown
            const selectedOption = receiverSelect.options[receiverSelect.selectedIndex].text;
            const receiverFullname = selectedOption.split(' (')[0]; // Ambil hanya fullname

            // Membangun objek receiver hanya dengan fullname
            const receiver = {
                fullname: receiverFullname
            };

            axios.post('{{ route('chat.store') }}', {
                receiver_id: receiver_id,
                message: message
            }, {
                headers: {
                    'X-CSRF-TOKEN': token
                }
            })
            .then(function (response) {
                document.getElementById('chat-form').reset();

                const sender = {
                    fullname: "{{ auth()->user()->fullname }}"
                };

                const chat = response.data.chat;
                chat.sender = sender;
                chat.receiver = receiver;

                // Kirim pesan ke server menggunakan socket
                socket.emit('send_message', chat);
            })
            .catch(function (error) {
                console.error('Error sending message:', error);
            });
        });

        // Meng-update chat history setelah memilih penerima
document.getElementById('receiver_id').addEventListener('change', function () {
    const receiverId = this.value;
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    if (receiverId) {
        axios.get('{{ route('chat.index') }}', {
            params: { receiver_id: receiverId },
            headers: { 'X-CSRF-TOKEN': token }
        })
        .then(response => {
    console.log("Response from chat history:", response);  // Untuk debugging

    const chatList = document.getElementById('chat-list');
    chatList.innerHTML = ''; // Kosongkan chat list sebelum menampilkan yang baru

    const chats = response.data.chats; // Ambil data chat dari response

    if (chats && chats.length > 0) {
        chats.forEach(chat => {
            const chatItem = document.createElement('div');
            chatItem.classList.add('chat-message', chat.sender_id === {{ auth()->user()->id }} ? 'sender' : 'received');
            chatItem.innerHTML = `
                <div class="message-bubble ${chat.sender_id === {{ auth()->user()->id }} ? 'sent' : 'received'}">
                    <p><strong>Dari:</strong> ${chat.sender_id === {{ auth()->user()->id }} ? 'Anda' : 'Pengguna Lain'}</p>
                    <p><strong>Pesan:</strong> ${chat.message}</p>
                    <small class="text-muted">Dikirim: ${chat.sent_at}</small>
                </div>
            `;
            chatList.appendChild(chatItem);
        });
    } else {
        chatList.innerHTML = '<p>Belum ada pesan.</p>';
    }

    // Scroll otomatis ke bawah setelah update
    chatList.scrollTop = chatList.scrollHeight;
})

        .catch(error => {
            console.error('Error fetching chat history:', error);
        });
    } else {
        document.getElementById('chat-list').innerHTML = '<p>Belum ada pesan.</p>';
    }
});
    </script>
</body>
</html>
