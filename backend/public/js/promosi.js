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

// Fitur Pencarian Produk
function searchProduct() {
    const searchInput = document.getElementById("search-input").value.toLowerCase();
    const products = document.querySelectorAll(".product");

    products.forEach((product) => {
        const productName = product.getAttribute("data-name").toLowerCase();
        product.style.display = productName.includes(searchInput) ? "block" : "none";
    });
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
    const productPrice = parseInt(productElement.getAttribute('data-price'), 10);
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
