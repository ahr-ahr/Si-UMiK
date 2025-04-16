const express = require("express");
const http = require("http");
const socketIo = require("socket.io");

const app = express();
const server = http.createServer(app);
const io = socketIo(server, {
  cors: {
    origin: "http://127.0.0.1:8000", // Izinkan permintaan dari alamat Laravel
    methods: ["GET", "POST"],
    allowedHeaders: ["Content-Type"],
    credentials: true,
  },
});

let onlineUsers = {}; // Menyimpan status pengguna yang online

io.on("connection", (socket) => {
  console.log("A user connected with socket id:", socket.id); // Debugging untuk memverifikasi koneksi

  // Event user_connected: Menyimpan fullname pengguna yang terhubung
  socket.on("user_connected", (fullname) => {
    console.log(`${fullname} is now online with socket id: ${socket.id}`); // Debugging status koneksi
    onlineUsers[socket.id] = fullname;

    // Kirim update status online kepada semua client
    io.emit("user_status", { fullname, status: "online" });
  });

  // Saat client mengirim pesan
  socket.on("send_message", (data) => {
    console.log("Pesan diterima:", data);
    io.emit("message_received", data);
  });

  // Event disconnect: Menandakan bahwa pengguna offline
  socket.on("disconnect", () => {
    const fullname = onlineUsers[socket.id];
    if (fullname) {
      console.log(`${fullname} is now offline with socket id: ${socket.id}`); // Debugging status koneksi
      io.emit("user_status", { fullname, status: "offline" }); // Kirim status offline
      delete onlineUsers[socket.id]; // Hapus dari daftar pengguna online
    }
  });
});

server.listen(3000, () => {
  console.log("Socket server running on port 3000");
});
