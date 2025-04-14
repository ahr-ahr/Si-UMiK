let cart = [];

// Ambil keranjang dari localStorage
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

// Render isi keranjang
function renderCart() {
  const cartTableBody = document.querySelector("#cart-table tbody");
  const totalPriceElement = document.getElementById("total-price");

  // Kosongkan tabel sebelum render
  cartTableBody.innerHTML = "";

  let totalPrice = 0;

  cart.forEach((item, index) => {
    const itemTotal = item.price * item.quantity;
    totalPrice += itemTotal;

    // Buat baris tabel untuk produk
    const row = document.createElement("tr");
    row.innerHTML = `
      <td>${item.name}</td>
      <td>Rp ${item.price}</td>
      <td>
        <button class="decrease-qty" data-index="${index}">-</button>
        ${item.quantity}
        <button class="increase-qty" data-index="${index}">+</button>
      </td>
      <td>Rp ${itemTotal}</td>
      <td><button class="remove-item" data-index="${index}">Hapus</button></td>
    `;
    cartTableBody.appendChild(row);
  });

  // Perbarui total harga
  totalPriceElement.textContent = totalPrice;

  // Tambahkan event listener untuk tombol aksi
  addEventListeners();
}

// Tambahkan event listener ke tombol di tabel
function addEventListeners() {
  document.querySelectorAll(".decrease-qty").forEach(button => {
    button.addEventListener("click", (e) => {
      const index = e.target.getAttribute("data-index");
      if (cart[index].quantity > 1) {
        cart[index].quantity--;
      } else {
        alert("Minimal jumlah 1.");
      }
      saveCart();
      renderCart();
    });
  });

  document.querySelectorAll(".increase-qty").forEach(button => {
    button.addEventListener("click", (e) => {
      const index = e.target.getAttribute("data-index");
      if (cart[index].quantity < cart[index].stock) {
        cart[index].quantity++;
      } else {
        alert("Stok habis!");
      }
      saveCart();
      renderCart();
    });
  });

  document.querySelectorAll(".remove-item").forEach(button => {
    button.addEventListener("click", (e) => {
      const index = e.target.getAttribute("data-index");
      cart.splice(index, 1);
      saveCart();
      renderCart();
    });
  });
}

// Inisialisasi halaman
loadCart();
renderCart();

// Event listener untuk tombol checkout
document.getElementById("checkout-btn").addEventListener("click", () => {
  if (cart.length === 0) {
    alert("Keranjang Anda kosong!");
  } else {
    alert("Terima kasih telah berbelanja!");
    cart = [];
    saveCart();
    renderCart();
  }
});
