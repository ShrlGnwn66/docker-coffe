// Toogle class active for Hamburger Menu

const navbarNav = document.querySelector('.navbar-nav');
document.querySelector('#hamburger-menu').onclick = () => {
  navbarNav.classList.toggle('active');
};

// Close navbar hamburger diluar sidebar
const hamburger = document.querySelector('#hamburger-menu');
document.addEventListener('click', function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove('active');
  }
});

// select product
const selectProduct = document.querySelector('select[name="selection"]');
const productNameElement = document.querySelector('td.product-name');
const price = document.querySelector('td.price');
const input = document.getElementById('inputField');

const products = {
  Espresso: 20000,
  Cappuccino: 18000,
  'Coffee Latte': 20000,
  Americano: 16000,
  Mocha: 15000,
  Frappe: 12000,
};

const formatter = new Intl.NumberFormat('id-ID', {
  style: 'currency',
  currency: 'IDR',
  minimumFractionDigits: 0,
  maximumFractionDigits: 0,
});

selectProduct.addEventListener('change', function () {
  let selectedOption = selectProduct.value;
  productNameElement.textContent = selectedOption;
  price.textContent = formatter.format(products[selectedOption]);
  updateSubtotal();
});

function increment() {
  let value = parseInt(input.value) || 0;
  input.value = value + 1;
  updateSubtotal();
}

function decrement() {
  let value = parseInt(input.value) || 0;
  if (value > 1) {
    input.value = value - 1;
  }
  updateSubtotal();
}

function updateSubtotal() {
  let value = parseInt(input.value) || 0;
  let subtotal = value * getProductPrice();
  let formattedSubtotal = formatter.format(subtotal);
  document.getElementById('subtotal').textContent = formattedSubtotal;
}

function getProductPrice() {
  let selectedOption = selectProduct.value;
  return products[selectedOption] || 0;
}
