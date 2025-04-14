document.getElementById('registerBtn').addEventListener('click', function() {
    document.getElementById('registerForm').classList.remove('hidden');
    document.getElementById('loginForm').classList.add('hidden');
});

document.getElementById('loginBtn').addEventListener('click', function() {
    document.getElementById('loginForm').classList.remove('hidden');
    document.getElementById('registerForm').classList.add('hidden');
});

document.getElementById('registerForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const username = document.getElementById('regUsername').value;
    const email = document.getElementById('regEmail').value;
    const password = document.getElementById('regPassword').value;

    alert(`Registered!\nUsername: ${username}\nEmail: ${email}`);
    // Di sini Anda bisa menambahkan logika untuk menyimpan data registrasi.
});

document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const username = document.getElementById('loginUsername').value;
    const password = document.getElementById('loginPassword').value;

    alert(`Logged in!\nUsername: ${username}`);
    // Di sini Anda bisa menambahkan logika untuk memverifikasi kredensial.
});
