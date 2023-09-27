const categoriesUrl = 'productsIndex.json';
let categories = [];

// Load the JSON data
fetch(categoriesUrl)
  .then(response => response.json())
  .then(data => {
    categories = data;
    renderCategories();
  })
  .catch(error => console.error('Error loading JSON:', error));

let cart = [];

function renderCategories() {
  let i = 0;
  document.getElementById('root').innerHTML = categories.map(item => {
    const { productImage, productName, productPrice } = item;
    return `
<section id="products">
      <div class='productCard'>
      <div class="imageAndIcons">
          <img class="productImage" src='images/${productImage}'>
 
          </div>
        <div class="productDetails">
          <h3 class="productName">${productName}</h3>
          <span class="productPrice">R ${productPrice}.00 </span>
          <button onclick='addtocart(${i++})'>Add to cart</button>
          <button>More info</button>
        </div>
      </div>
  </section>
    `;
  }).join('');
}

function addtocart(a) {
  cart.push({ ...categories[a] });
  updateCart();
}

function delElement(a) {
  cart.splice(a, 1);
  updateCart();
}

function updateCart() {
  displaycart();
  updateCartCounter();
}

function updateCartCounter() {
  const cartCounter = document.getElementById('cartCounter');
  cartCounter.textContent = cart.length;
}


function displaycart() {
  let total = 0;
  const cartItemElement = document.getElementById("cartItem");
  const totalElement = document.getElementById("total");

  if (cart.length === 0) {
    cartItemElement.innerHTML = "Your cart is empty";
    totalElement.innerHTML = "R 0.00";
  } else {
    const cartItemsHTML = cart.map((item) => {
      const { productImage, productName, productPrice } = item;
      total += parseInt(productPrice);

      return `
        <div class='cart-item'>
          <div class='row-img'>
            <img class='rowimg' src='images/${productImage}'>
          </div>
          <p style='font-size:12px;'>${productName}<p>
          <h2 style='font-size: 15px;'>R ${productPrice}.00</h2>
          <i class='fa-solid fa-trash' onclick='delElement(${cart.indexOf(item)})'></i>
        </div>
      `;
    }).join('');

    const checkoutButtonHTML = `<a href="checkout.php"><button>Checkout</button></a>`;
    const cartHTML = cartItemsHTML + checkoutButtonHTML;

    cartItemElement.innerHTML = cartHTML;
    totalElement.innerHTML = "R " + total.toFixed(2);
  }
}


// Show/hide cart popup
// Show/hide cart popup
function showCartPopup() {
  const cartPopup = document.getElementById('cartPopup');
  cartPopup.classList.toggle('show');
  displaycart(); // Call displaycart() to update the cart items when the popup is shown
}


// Toggle cart popup on cart icon click
document.querySelector('.cart').addEventListener('click', showCartPopup);
