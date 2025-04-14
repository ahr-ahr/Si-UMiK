// Firebase Config (salin dari Firebase Console)
const firebaseConfig = {
    apiKey: "YOUR_API_KEY",
    authDomain: "YOUR_PROJECT_ID.firebaseapp.com",
    databaseURL: "https://YOUR_PROJECT_ID.firebaseio.com",
    projectId: "YOUR_PROJECT_ID",
    storageBucket: "YOUR_PROJECT_ID.appspot.com",
    messagingSenderId: "YOUR_SENDER_ID",
    appId: "YOUR_APP_ID",
    measurementId: "YOUR_MEASUREMENT_ID"
};

// Inisialisasi Firebase
const app = firebase.initializeApp(firebaseConfig);
const db = firebase.database(app);
const auth = firebase.auth();
const messagesRef = db.ref('messages');

// Proses login menggunakan Google
document.getElementById('login-btn').addEventListener('click', function() {
    const provider = new firebase.auth.GoogleAuthProvider();
    auth.signInWithPopup(provider).then((result) => {
        const user = result.user;
        document.getElementById('user-name').textContent = user.displayName;
        document.getElementById('user-info').style.display = 'block';
        document.getElementById('login-btn').style.display = 'none';
    }).catch((error) => {
        console.error(error.message);
    });
});

// Logout
document.getElementById('logout-btn').addEventListener('click', function() {
    auth.signOut().then(() => {
        document.getElementById('user-info').style.display = 'none';
        document.getElementById('login-btn').style.display = 'block';
    });
});

// Kirim pesan ke Firebase
document.getElementById('send-btn').addEventListener('click', function() {
    const userInput = document.getElementById('user-input').value;
    if (userInput.trim() === '') return;

    // Tampilkan pesan user di UI
    addMessage('user', userInput);

    // Kirim pesan ke Firebase
    messagesRef.push().set({
        sender: 'user',
        message: userInput
    });

    // Clear input setelah mengirim
    document.getElementById('user-input').value = '';
});

// Mendengarkan pesan baru dari Firebase
messagesRef.on('child_added', function(snapshot) {
    const messageData = snapshot.val();
    addMessage(messageData.sender, messageData.message);
});

// Fungsi untuk menambahkan pesan ke UI
function addMessage(sender, message) {
    const chatBox = document.getElementById('chat-box');
    const messageDiv = document.createElement('div');
    messageDiv.classList.add('chat-message', sender === 'user' ? 'user-message' : 'bot-message');

    const avatar = document.createElement('img');
    avatar.src = sender === 'user' ? 'https://i.pravatar.cc/150?img=1' : 'https://i.pravatar.cc/150?img=2';
    messageDiv.appendChild(avatar);

    const text = document.createElement('span');
    text.textContent = message;
    messageDiv.appendChild(text);

    chatBox.appendChild(messageDiv);
    chatBox.scrollTop = chatBox.scrollHeight;
}
