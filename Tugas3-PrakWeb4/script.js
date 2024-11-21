document.querySelectorAll(".faq-question").forEach((faqButton) => {
  faqButton.addEventListener("click", () => {
    const answer = faqButton.nextElementSibling;
    answer.style.display = answer.style.display === "block" ? "none" : "block";
  });
});

const cartButton = document.getElementById("cart-button");
const cart = document.getElementById("cart");
const cartItems = document.getElementById("cart-items");
const clearCartButton = document.getElementById("clear-cart");
const submitCartButton = document.getElementById("submit-cart");

let cartData = []; // Data untuk shopping cart

// Tampilkan atau sembunyikan cart saat tombol diklik
cartButton.addEventListener("click", () => {
  cart.classList.toggle("visible");
});

// Clear cart saat tombol "Clear Cart" diklik
clearCartButton.addEventListener("click", () => {
  cartData = [];
  renderCart();
});

submitCartButton.addEventListener("click", () => {
  // Contoh penggunaan
  alert("Cart submitted!");
  cart.classList.remove("visible");
});

// Fungsi untuk render isi cart
function renderCart() {
  cartItems.innerHTML = "";
  cartData.forEach((item, index) => {
    const li = document.createElement("li");
    li.innerHTML = `
        <span>${item.name} - ${item.price}</span>
      `;
    cartItems.appendChild(li);
  });
}

// Simulasi menambahkan produk ke cart
document.querySelectorAll(".product-item").forEach((product) => {
  product.addEventListener("click", () => {
    const name = product.querySelector("h3").innerText;
    const price = product.querySelector(".price").innerText;

    cartData.push({ name, price });
    renderCart();
  });
});
