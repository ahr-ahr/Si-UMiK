let cart = [];

// Muat keranjang dari localStorage
function loadCart() {
  const storedCart = localStorage.getItem("cart");
  if (storedCart) {
    cart = JSON.parse(storedCart);
  }
}

// Simpan keranjang ke localStorage
function saveCart() {
  localStorage.setItem("cart", JSON.stringify(cart));
}

// Render item keranjang
function renderCart() {
  const cartItems = document.getElementById("cart-items");
  const cartTotal = document.getElementById("cart-total");

  cartItems.innerHTML = "";
  let total = 0;

  cart.forEach((item, index) => {
    const itemTotal = item.price * item.quantity;
    total += itemTotal;

    const itemDiv = document.createElement("div");
    itemDiv.className = "cart-item";
    itemDiv.innerHTML = `
      <p>${item.name}</p>
      <p>Harga: Rp ${item.price}</p>
      <div class="quantity">
        <button class="decrease" data-index="${index}">-</button>
        <input type="number" value="${item.quantity}" min="1" data-index="${index}">
        <button class="increase" data-index="${index}">+</button>
      </div>
      <p>Total: Rp ${itemTotal}</p>
      <button class="remove" data-index="${index}">Hapus</button>
    `;
    cartItems.appendChild(itemDiv);
  });

  cartTotal.textContent = total;
}

// Tambah atau kurangi jumlah item
function updateQuantity(index, newQuantity) {
  if (newQuantity > 0) {
    cart[index].quantity = newQuantity;
    saveCart();
    renderCart();
  }
}

// Hapus item dari keranjang
function removeItem(index) {
  cart.splice(index, 1);
  saveCart();
  renderCart();
}

// Tambahkan event listener
document.getElementById("cart-items").addEventListener("click", (e) => {
  const index = e.target.dataset.index;
  if (e.target.classList.contains("increase")) {
    updateQuantity(index, cart[index].quantity + 1);
  } else if (e.target.classList.contains("decrease")) {
    updateQuantity(index, cart[index].quantity - 1);
  } else if (e.target.classList.contains("remove")) {
    if (confirm("Hapus item dari keranjang?")) {
      removeItem(index);
    }
  }
});

document.getElementById("cart-items").addEventListener("input", (e) => {
  if (e.target.type === "number") {
    const index = e.target.dataset.index;
    const newQuantity = parseInt(e.target.value, 10);
    updateQuantity(index, newQuantity);
  }
});

// Checkout
document.getElementById("checkout-button").addEventListener("click", () => {
  if (cart.length > 0) {
    window.location.href = "checkout.html";
  } else {
    alert("Keranjang Anda kosong!");
  }
});

// Inisialisasi halaman keranjang
loadCart();
renderCart();
