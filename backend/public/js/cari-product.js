document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.getElementById("search-input");
    const allProducts = document.getElementById("all-products");
    const searchResults = document.getElementById("search-results");
    const products = Array.from(allProducts.getElementsByClassName("product"));

    searchInput.addEventListener("input", () => {
        const query = searchInput.value.toLowerCase().trim();
        searchResults.innerHTML = ""; // Kosongkan hasil pencarian sebelumnya

        if (query) {
            // Filter produk berdasarkan query
            const filteredProducts = products.filter(product => {
                const productName = product.querySelector("h3").textContent.toLowerCase();
                return productName.includes(query);
            });

            if (filteredProducts.length > 0) {
                searchResults.style.display = "flex";
                allProducts.style.display = "none";

                // Tampilkan produk yang sesuai
                filteredProducts.forEach(product => {
                    const clone = product.cloneNode(true); // Salin elemen produk
                    searchResults.appendChild(clone);
                });
            } else {
                searchResults.style.display = "flex";
                allProducts.style.display = "none";
                searchResults.innerHTML = "<p>Produk tidak ditemukan.</p>";
            }
        } else {
            // Reset ke tampilan awal
            searchResults.style.display = "none";
            allProducts.style.display = "flex";
        }
    });
});
