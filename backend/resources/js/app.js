import "./bootstrap";
import io from "socket.io-client";

// Membuat koneksi ke server Socket.IO
const socket = io("http://localhost:3000");

// Mengirim pesan ke server
document.getElementById("chat-form").addEventListener("submit", function (e) {
    e.preventDefault();

    const receiverId = document.getElementById("receiver_id").value;
    const message = document.getElementById("message").value;

    // Kirim data ke backend Laravel
    axios
        .post("/chat/store", {
            receiver_id: receiverId,
            message: message,
        })
        .then(function (response) {
            // Setelah pesan berhasil dikirim, kirim ke server Socket.IO
            socket.emit("send_message", response.data.chat);

            // Reset form
            document.getElementById("chat-form").reset();
        })
        .catch(function (error) {
            console.error(error);
            alert("Gagal mengirim pesan.");
        });
});

// Mendengarkan pesan baru dari server
socket.on("new_message", function (data) {
    const chatList = document.getElementById("chat-list");

    // Menambahkan pesan baru ke UI
    const chatItem = document.createElement("div");
    chatItem.classList.add("card", "mb-2");
    chatItem.innerHTML = `
        <div class="card-body">
            <p><strong>Dari:</strong> ${data.sender.fullname} (${data.sender.role})</p>
            <p><strong>Ke:</strong> ${data.receiver.fullname} (${data.receiver.role})</p>
            <p>${data.message}</p>
            <small class="text-muted">Dikirim: ${data.sent_at}</small>
        </div>
    `;
    chatList.appendChild(chatItem);
});
