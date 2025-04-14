document.getElementById('checkout-button').addEventListener('click', function() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    if (cart.length === 0) {
        alert('Keranjang kosong, tidak ada yang bisa di-checkout.');
        return;
    }

    let totalAmount = 0;
    cart.forEach(item => {
        totalAmount += item.price * item.quantity;
    });

    document.getElementById('total-amount').innerHTML = `<p>Total yang harus dibayar: Rp ${totalAmount.toLocaleString()}</p>`;
    
    // Simulasi pengosongan keranjang setelah checkout
    localStorage.removeItem('cart');
    alert('Checkout berhasil! Terima kasih telah berbelanja.');
    renderCart();  // Refresh tampilan keranjang
});
