// Toogle class active for Hamburger Menu

const navbarNav = document.querySelector(".navbar-nav");
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// Close navbar hamburger diluar sidebar
const hamburger = document.querySelector("#hamburger-menu");
document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

// select product
const selectProduct = document.querySelector('select[name="menu"]');
const productNameElement = document.querySelector("td.product-name");
const price = document.querySelector("td.price");
const input = document.getElementById("inputField");
let products = {}; // Variable untuk menyimpan data produk

// Ambil data Menggunakan fetch API
fetch("http://localhost:9000/getData.php")
  .then((response) => response.json())
  .then((data) => {
    // menyimpan data ke variable products
    products = data;

    // eksekusi data
    selectProduct.addEventListener("change", function () {
      let selectedOption = selectProduct.value;
      productNameElement.textContent = selectedOption;
      price.textContent = formatter.format(products[selectedOption]);
      updateSubtotal();
    });
  })
  .catch((error) => console.log(error));

const formatter = new Intl.NumberFormat("id-ID", {
  style: "currency",
  currency: "IDR",
  minimumFractionDigits: 0,
  maximumFractionDigits: 0,
});

function updateSubtotal() {
  let value = parseInt(input.value) || 0;
  let subtotal = value * getProductPrice();
  let formattedSubtotal = formatter.format(subtotal);
  document.getElementById("subtotal").textContent = formattedSubtotal;
}

function getProductPrice() {
  let selectedOption = selectProduct.value;
  return products[selectedOption] || 0;
}

function increment() {
  let value = parseInt(input.value) || 0;
  input.value = value + 1;
  updateSubtotal();
}

function decrement() {
  let value = parseInt(input.value) || 0;
  if (value > 0) {
    input.value = value - 1;
    updateSubtotal();
  }
}
