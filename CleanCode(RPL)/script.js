// Data produk (tidak hardcode di HTML)
const products = [
  {
    name: "Mayhem T-Shirt",
    size: "S-XXL • Gildan",
    price: "Rp666.000",
    image: "asset/item1.jpg",
    badge: "Hot Item"
  },
  {
    name: "Cannibal Corpse Hoodie",
    size: "Fleece • All Black",
    price: "Rp240.000",
    image: "asset/item2.jpg",
    badge: "New Arrival"
  },
  {
    name: "Burzum T-Shirt",
    size: "S-XXL",
    price: "Rp666.000",
    image: "asset/item4.jpg",
    badge: "Limited"
  }
];

// Ambil container
const productContainer = document.getElementById("product-list");

// Function reusable untuk membuat card
function createProductCard(product) {
  return `
    <article class="product">
      <div class="product-media">
        <img src="${product.image}" alt="${product.name}">
        <span class="badge">${product.badge}</span>
      </div>
      <div class="product-body">
        <h3 class="product-title">${product.name}</h3>
        <div class="meta">${product.size}</div>
        <div class="price">${product.price}</div>
      </div>
      <button class="btn">Tanya Stok</button>
    </article>
  `;
}

// Render semua produk (DRY)
function renderProducts() {
  productContainer.innerHTML = products
    .map(product => createProductCard(product))
    .join("");
}

// Jalankan saat halaman dibuka
renderProducts();