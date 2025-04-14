
renderCart();
function renderCart() {
    const cartContainer = document.getElementById('cart-container');
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    if (cart.length === 0) {
        cartContainer.innerHTML = '<p>Keranjang kosong.</p>';
        return;
    }

    cartContainer.innerHTML = cart.map(item => `
        <div class="cart-item">
            <h4>${item.name}</h4>
            <p>Harga: Rp ${item.price.toLocaleString()}</p>
            <p>Jumlah: ${item.quantity}</p>
            <p>Total: Rp ${(item.price * item.quantity).toLocaleString()}</p>
        </div>
    `).join('');
}

renderCart();
