<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Aplikasi Chat Realtime</title>
    <link rel="stylesheet" href={{ asset('css/chat.css')}}> <!-- Menghubungkan CSS eksternal -->
</head>
<body>
    <div class="chat-container">
        <div class="chat-header">
            <h1>Aplikasi Chat Realtime</h1>
        </div>

        <div class="messages" id="messages">
            <!-- Pesan akan muncul di sini -->
        </div>

        <div class="input-message">
            <input type="text" id="messageInput" placeholder="Ketik pesan..." autocomplete="off">
            <button id="sendMessageBtn">
                <span>📤</span>
            </button>
        </div>
    </div>

    <div id="messageNotification" class="notification">
        Pesan baru diterima!
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pusher-js@7.0.3/dist/web/pusher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/laravel-echo/1.10.0/echo.js"></script>

    <script>
        // Inisialisasi Pusher dan Laravel Echo
        window.Pusher = Pusher;

        var echo = new Echo({
            broadcaster: 'pusher',
            key: 'your-pusher-key',  // Masukkan Pusher Key kamu di sini
            cluster: 'your-pusher-cluster',  // Masukkan Cluster Pusher di sini
            forceTLS: true
        });

        // Berlangganan ke channel 'chat'
        echo.channel('chat')
            .listen('MessageSent', (event) => {
                console.log("Pesan diterima:", event.message);

                // Menambahkan pesan baru di UI
                let messageDiv = document.createElement('div');
                messageDiv.classList.add('message');
                messageDiv.innerHTML = `
                    <span class="user-name">${event.message.user_name}:</span>
                    <span class="message-content">${event.message.message}</span>
                `;
                if (event.message.user_name === "Pengguna A") {
                    messageDiv.classList.add('self');
                }

                document.getElementById('messages').appendChild(messageDiv);
                scrollToBottom();
                showNotification();
            });

        // Kirim pesan ke backend
        function sendMessage(message) {
            axios.post('/send-message', {
                message: message,
                user_name: 'Pengguna B'  // Ganti dengan nama pengguna B
            })
            .then(function (response) {
                document.getElementById('messageInput').value = '';  // Clear input setelah pesan terkirim
            })
            .catch(function (error) {
                console.error(error);
            });
        }

        // Menangani klik pada tombol kirim
        document.getElementById('sendMessageBtn').addEventListener('click', function() {
            let message = document.getElementById('messageInput').value;
            if (message.trim() !== "") {
                sendMessage(message);
            }
        });

        // Menangani tekan tombol Enter untuk mengirim pesan
        document.getElementById('messageInput').addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                let message = document.getElementById('messageInput').value;
                if (message.trim() !== "") {
                    sendMessage(message);
                }
            }
        });

        // Scroll ke bawah ketika ada pesan baru
        function scrollToBottom() {
            let messagesDiv = document.getElementById('messages');
            messagesDiv.scrollTop = messagesDiv.scrollHeight;
        }

        // Menampilkan notifikasi pesan baru
        function showNotification() {
            let notification = document.getElementById('messageNotification');
            notification.style.display = 'block';
            setTimeout(() => {
                notification.style.display = 'none';
            }, 3000);
        }
    </script>
</body>
</html>
