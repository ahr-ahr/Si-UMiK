<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Layanan</title>
    <link rel="stylesheet" href="{{ asset('css/layanan1.css') }}">
</head>
<body>
    <div class="container">
        <h3 class="layanan">Layanan</h3>
        <div class="icon">
            <a href="#" id="cart-icon"><i class="fa-solid fa-cart-shopping"></i><span id="cart-count">0</span></a>
            <a href="#"><i class="fa-regular fa-clock"></i></a>
            <a href="#" id="profile-icon" class="profile-icon"><i class="fas fa-user-circle"></i></a>
        </div>
    </div>

    <div class="feature-grid">
        <a href="{{ route('legalitas') }}">
            <img src="{{ asset('img/fitur1.png') }}" alt="Perizinan">
            <p>Perizinan</p>
        </a>
        <a href="{{ route('tutor') }}">
            <img src="{{ asset('img/fitur3.png') }}" alt="Cara Membuat Produk">
            <p>Cara Membuat Produk</p>
        </a>
        <a href="{{ route('lokasiawal') }}">
            <img src="{{ asset('img/fitur2.png') }}" alt="Lokasi Usaha">
            <p>Lokasi Usaha</p>
        </a>
        <a href="{{ route('bahan') }}">
            <img src="{{ asset('img/fitur4.png') }}" alt="Bahan">
            <p>Bahan</p>
        </a>
        <a href="{{ route('peralatan') }}">
            <img src="{{ asset('img/fitur5.png') }}" alt="Peralatan">
            <p>marketplace</p>
        </a>
        <a href="{{ route('promosi') }}">
            <img src="{{ asset('img/fitur6.png') }}" alt="Promosi">
            <p>Promosi</p>
        </a>
    </div>

    <div class="next">
        <a href="{{ route('layanan1') }}"><i class="fa-solid fa-arrow-right"></i></a>
    </div>

    <div class="cart-modal">
        <div class="cart-content">
            <h2>Keranjang Saya</h2>
            <ul id="cart-items"></ul>

            <div class="cart-summary">
                <div class="cart-actions">
                    <button class="checkout-btn" onclick="checkout()">Checkout</button>
                    <button class="close-btn">
                        <i class="fa fa-times"></i> <!-- Ikon X -->
                    </button>

                </div>
            </div>
        </div>
    </div>

    <!-- Profile Modal -->
    <div class="profile-modal">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close-btn">&times;</button> <!-- Tombol close -->
            </div>
            <div class="profile-photo">
                <img src="profile.jpg" alt="Profile Photo"> <!-- Gambar profil -->
            </div>
            <h2>Nama Pengguna</h2> <!-- Nama pengguna -->
            <div class="modal-body">
                <div class="modal-item">
                    <i class="fas fa-cog"></i> Setting
                </div>
                <div class="modal-item">
                    <i class="fas fa-wallet"></i> Saldo
                </div>
                <div class="modal-item">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </div>
            </div>
        </div>
    </div>

    <!--script-->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
    // Modal Profile
    const profileIcon = document.querySelector('.profile-icon');
    const profileModal = document.querySelector('.profile-modal');
    const profileCloseButton = document.querySelector('.profile-modal .close-btn');
    const cartIcon = document.querySelector('#cart-icon');
    const cartModal = document.querySelector('.cart-modal');
    const closeButton = document.querySelector('.cart-modal .close-btn');
    const addToCartButtons = document.querySelectorAll('.add-to-cart');

    // Ensure the profile modal is hidden on page load
    profileModal.style.display = 'none';

    // Show Profile Modal
    profileIcon.addEventListener('click', () => {
        profileModal.style.display = 'block';
    });

    // Close Profile Modal
    profileCloseButton.addEventListener('click', () => {
        profileModal.style.display = 'none';
    });

    // Show Cart Modal
    cartIcon.addEventListener('click', showCart);

    // Close Cart Modal
    closeButton.addEventListener('click', () => {
        cartModal.style.display = 'none';
    });

    // Add to Cart Button Events
    addToCartButtons.forEach(button => {
        button.addEventListener('click', addToCart);
    });

    // Update Cart Count
    updateCartCount();
});


// Modal Profile Functions
function editProfile() {
    const newName = prompt("Enter your new name:", document.getElementById('profile-name').textContent);
    if (newName) {
        document.getElementById('profile-name').textContent = newName;
    }

    const newPhotoURL = prompt("Enter the URL for your new profile photo:", document.getElementById('profile-photo').src);
    if (newPhotoURL) {
        document.getElementById('profile-photo').src = newPhotoURL;
    }
}

        // Update jumlah keranjang
function updateCartCount() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let totalCount = cart.reduce((sum, product) => sum + product.quantity, 0);
    document.getElementById('cart-count').innerText = totalCount;
}

// Function to remove product from cart
function removeFromCart(productId) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart = cart.filter(product => product.id !== productId);
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCount();
    showCart();
}

// Function to increase quantity
function increaseQuantity(productId) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const product = cart.find(item => item.id == productId);

    if (product) {
        product.quantity += 1;
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartCount();
        showCart();
    }
}

// Function to decrease quantity
function decreaseQuantity(productId) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const product = cart.find(item => item.id == productId);

    if (product && product.quantity > 1) {
        product.quantity -= 1;
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartCount();
        showCart();
    }
}

// Function to show cart
function showCart() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let cartItems = document.getElementById('cart-items');
    cartItems.innerHTML = '';

    if (cart.length === 0) {
        cartItems.innerHTML = "<li>Keranjang Anda kosong.</li>";
    } else {
        cart.forEach(product => {
            let li = document.createElement('li');

            // Create product image element
            let productImage = document.createElement('img');
            productImage.src = product.image;
            productImage.alt = product.name;

            // Create product info container
            let productInfo = document.createElement('span');
            productInfo.innerHTML = `${product.name} - Rp ${product.price} x ${product.quantity}`;

            // Create buttons to increase and decrease quantity
            let increaseButton = document.createElement('button');
            increaseButton.classList.add('increase');
            increaseButton.innerText = '+';
            increaseButton.onclick = function() {
                increaseQuantity(product.id);
            };

            let decreaseButton = document.createElement('button');
            decreaseButton.classList.add('decrease');
            decreaseButton.innerText = '-';
            decreaseButton.onclick = function() {
                decreaseQuantity(product.id);
            };

            // Create remove button
            let removeButton = document.createElement('button');
            removeButton.classList.add('remove');
            removeButton.innerText = 'Hapus';
            removeButton.onclick = function() {
                removeFromCart(product.id);
            };

            // Append the elements to the list item
            li.appendChild(productImage);
            li.appendChild(productInfo);
            li.appendChild(increaseButton);
            li.appendChild(decreaseButton);
            li.appendChild(removeButton);
            cartItems.appendChild(li);
        });

        // Create and display total price element
        let totalPriceElement = document.createElement('li');
        totalPriceElement.classList.add('total-price');
        totalPriceElement.innerHTML = `<strong>Total: </strong>${calculateTotalPrice()}`;
        cartItems.appendChild(totalPriceElement);
    }

    document.querySelector('.cart-modal').style.display = 'flex';
}

// Function to add product to cart
function addToCart(event) {
    const button = event.target;
    const productElement = button.closest('.product');

    const productId = productElement.getAttribute('data-id');
    const productName = productElement.getAttribute('data-name');
    const productPrice = productElement.getAttribute('data-price');
    const productStock = parseInt(productElement.getAttribute('data-stock'), 10);
    const productImage = productElement.querySelector('img').src;

    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const existingProduct = cart.find(product => product.id == productId);

    if (existingProduct) {
        if (existingProduct.quantity < productStock) {
            existingProduct.quantity += 1;
        } else {
            alert('Stok produk sudah habis.');
        }
    } else {
        cart.push({
            id: productId,
            name: productName,
            price: productPrice,
            quantity: 1,
            image: productImage
        });
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCount();
}

// Function to close cart
function closeCartModal() {
    document.querySelector('.cart-modal').style.display = 'none';
}

// Event listeners
document.addEventListener('DOMContentLoaded', () => {
    // Add event listener for cart icon
    document.getElementById('cart-icon').addEventListener('click', showCart);

    // Add event listener for each "Beli" button
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', addToCart);
    });

    // Update cart count when page loads
    updateCartCount();
});

// Function to calculate total price of items in the cart
function calculateTotalPrice() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let totalPrice = cart.reduce((sum, product) => sum + (product.price * product.quantity), 0);

    // Format the total price as currency
    return `Rp ${totalPrice.toLocaleString('id-ID')}`;
}

// Mendapatkan elemen modal dan tombol close
const cartModal = document.querySelector('.cart-modal');
const closeButton = document.querySelector('.close-btn');

// Menutup modal saat tombol close diklik
closeButton.addEventListener('click', () => {
    cartModal.style.display = 'none';
});

// Menampilkan modal (misalnya, saat ikon keranjang diklik)
const cartIcon = document.querySelector('#cart-icon');
cartIcon.addEventListener('click', () => {
    cartModal.style.display = 'flex';
});
    </script>
</body>
</html>
