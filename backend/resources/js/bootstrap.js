import axios from "axios";
import Echo from "laravel-echo";
import io from "socket.io-client";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

window.Echo = new Echo({
    broadcaster: "socket.io",
    host: window.location.hostname + ":3000", // Pastikan URL WebSocket sesuai
    client: io,
});
