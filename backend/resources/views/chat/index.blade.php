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

        <!-- Filter Berdasarkan Role -->
        <h4>Filter Chat</h4>
        <div class="form-group mb-2">
            <label for="role_filter">Pilih Role:</label>
            <select id="role_filter" class="form-control">
                <option value="">-- Pilih Role --</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>

        <!-- Daftar Chat -->
        <h4>Riwayat Chat</h4>
        <div id="chat-list">
            @forelse ($chats as $chat)
                @if (empty(request('role_filter')) || $chat->sender->role === request('role_filter'))
                    <div class="card mb-2">
                        <div class="card-body">
                            <p><strong>Dari:</strong> {{ $chat->sender->fullname }} ({{ $chat->sender->role }})</p>
                            <p><strong>Ke:</strong> {{ $chat->receiver->fullname }}</p>
                            <p>{{ $chat->message }}</p>
                            <small class="text-muted">Dikirim: {{ $chat->sent_at }}</small>
                        </div>
                    </div>
                @endif
            @empty
                <p>Belum ada pesan.</p>
            @endforelse
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


        // Terima pesan dari socket.io dan tampilkan di UI
        socket.on('message_received', (event) => {
            const chatList = document.getElementById('chat-list');
            const chatItem = document.createElement('div');
            chatItem.classList.add('card', 'mb-2');
            chatItem.innerHTML = `
                <div class="card-body">
                    <p><strong>Dari:</strong> ${event.sender.fullname} (${event.sender.role})</p>
                    <p><strong>Ke:</strong> ${event.receiver.fullname} (${event.receiver.role})</p>
                    <p>${event.message}</p>
                    <small class="text-muted">Dikirim: ${event.sent_at}</small>
                </div>
            `;
            chatList.appendChild(chatItem);

            // Scroll otomatis ke bawah
            chatList.scrollTop = chatList.scrollHeight;

            // Notifikasi suara dan visual saat pesan diterima
            const audio = new Audio('{{asset ('assets/jawa.wav')}}');
            audio.play();

            const notification = new Notification("Pesan Baru", {
                body: `${event.sender.fullname} mengirimkan pesan.`,
                icon: "{{asset ('assets/img/logo.png')}}"
            });
        });

        // Meminta izin untuk notifikasi
        if (Notification.permission === "granted") {
        const notification = new Notification("Pesan Baru", {
            body: `${event.sender.fullname} mengirimkan pesan.`,
            icon: "{{ asset('assets/img/logo.png') }}"
        });
        console.log("Notifikasi dikirim"); // Verifikasi notifikasi dikirim
    } else {
        console.log("Notifikasi tidak diizinkan"); // Verifikasi status izin notifikasi
    }

        // Event listener untuk filter role
        document.getElementById('role_filter').addEventListener('change', function() {
            const role = this.value;
            window.location.href = `{{ route('chat.index') }}?role_filter=${role}`;
        });
    </script>
</body>
</html>
