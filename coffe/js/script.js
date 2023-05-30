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
var selectProduct = document.querySelector('select[name="selection"]');
var productNameElement = document.querySelector('td.product-name');
var price = document.querySelector('td.price');
var input = document.getElementById('inputField');

var products = {
  Espresso: 20000,
  Cappuccino: 18000,
  'Coffee Latte': 20000,
  Americano: 16000,
  Mocha: 15000,
  Frappe: 12000,
};

var formatter = new Intl.NumberFormat('id-ID', {
  style: 'currency',
  currency: 'IDR',
  minimumFractionDigits: 0,
  maximumFractionDigits: 0,
});

selectProduct.addEventListener('change', function () {
  var selectedOption = selectProduct.value;
  productNameElement.textContent = selectedOption;
  price.textContent = formatter.format(products[selectedOption]);
  updateSubtotal();
});

function increment() {
  var value = parseInt(input.value) || 0;
  input.value = value + 1;
  updateSubtotal();
}

function decrement() {
  var value = parseInt(input.value) || 0;
  if (value > 1) {
    input.value = value - 1;
  }
  updateSubtotal();
}

function updateSubtotal() {
  var value = parseInt(input.value) || 0;
  var subtotal = value * getProductPrice();
  var formattedSubtotal = formatter.format(subtotal);
  document.getElementById('subtotal').textContent = formattedSubtotal;
}

function getProductPrice() {
  var selectedOption = selectProduct.value;
  return products[selectedOption] || 0;
}
