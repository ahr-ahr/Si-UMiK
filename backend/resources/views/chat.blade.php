<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat</title>
    <script src="https://cdn.socket.io/4.0.1/socket.io.min.js"></script>
</head>
<body>
    <div id="chat-box">
        <div id="messages">
            @foreach($messages as $message)
                <div>
                    <strong>{{ $message->sender->name }}:</strong>
                    {{ $message->message }}
                </div>
            @endforeach
        </div>

        <!-- Input untuk memasukkan nama penerima -->
        <input type="text" id="receiver_name" placeholder="Masukkan Nama Penerima" required>

        <!-- Input untuk pesan -->
        <input type="text" id="message" placeholder="Tulis pesan..." required>

        <!-- Tombol kirim -->
        <button onclick="sendMessage()">Kirim</button>
    </div>

    <!-- Tombol logout -->
    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <script>
        const socket = io("http://localhost:3001");

        // Mendaftarkan pengguna ke server dengan nama pengguna
        socket.emit('register', '{{ auth()->user()->name }}');

        socket.on('receiveMessage', function (data) {
            const messageElement = document.createElement("div");
            messageElement.textContent = `${data.from}: ${data.message}`;
            document.getElementById("messages").appendChild(messageElement);
        });

        // Fungsi untuk mengirim pesan
        function sendMessage() {
            const message = document.getElementById("message").value;
            const receiver_name = document.getElementById("receiver_name").value;  // Ambil nama penerima

            // Pastikan input tidak kosong
            if (!message || !receiver_name) {
                alert("Pesan dan Nama penerima harus diisi!");
                return;
            }

            // Kirim pesan ke backend untuk disimpan di database
            fetch('/send-message', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ receiver_name, message })
            }).then(() => {
                // Kirim pesan ke penerima via Socket.IO setelah disimpan di backend
                socket.emit('sendMessage', { from: '{{ auth()->user()->name }}', to: receiver_name, message });
            });
        }
    </script>
</body>
</html>
