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

var formatter = new Intl.NumberFormat('id-ID', {
  style: 'currency',
  currency: 'IDR',
  minimumFractionDigits: 0,
  maximumFractionDigits: 0,
});

selectProduct.addEventListener('change', function () {
  var selectedOption = selectProduct.value;
  productNameElement.textContent = selectedOption;

  if (selectProduct.value === 'Espresso') {
    price.textContent = formatter.format(20000);
  } else if (selectProduct.value === 'Cappuccino') {
    price.textContent = formatter.format(18000);
  } else if (selectProduct.value === 'Coffee Latte') {
    price.textContent = formatter.format(20000);
  } else if (selectProduct.value === 'Americano') {
    price.textContent = formatter.format(16000);
  } else if (selectProduct.value === 'Mocha') {
    price.textContent = formatter.format(15000);
  } else if (selectProduct.value === 'Frappe') {
    price.textContent = formatter.format(12000);
  }
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
  if (selectProduct.value === 'Espresso') {
    return 20000;
  } else if (selectProduct.value === 'Cappuccino') {
    return 18000;
  } else if (selectProduct.value === 'Coffee Latte') {
    return 20000;
  } else if (selectProduct.value === 'Americano') {
    return 16000;
  } else if (selectProduct.value === 'Mocha') {
    return 15000;
  } else if (selectProduct.value === 'Frappe') {
    return 12000;
  } else {
    return 0;
  }
}
