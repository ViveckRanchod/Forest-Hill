<html lang="en">
  
<?php 

include "head.php" ?>
<body>
<?php include "nav.php";
include "fetching.php";
?>
    <h1>ALL PRODUCTS</h1>
    <p class="subtitle">Shop our wide range of products</p>  
  
  <div id="root" class="container"></div>

  <!-- Cart Popup -->
  <div class="cart-popup" id="cartPopup">
    <div class="cart-items" id="cartItem">Your cart is empty</div>
    <div class="cart-footer">
      <h3>Total</h3>
      <h2 id="total">$ 0.00</h2>
    </div>
  </div>

  <script src="addcart.js"></script>



<?php
include "productPopUp.php"
?>
<!-- JavaScript code to handle pop-up window display -->
<script>
  // Get references to relevant elements
// Get references to relevant elements
const expandIcons = document.querySelectorAll('.expand-icon');
const popup = document.getElementById('popup');
const popupTitle = document.getElementById('popup-title');
const popupDescription = document.getElementById('popup-description');
const popupImage = document.getElementById('popUpImage');
const popupPrice = document.getElementById('popup-price');
const closePopupButton = document.getElementById('close-popup');

// Add click event listeners to expand icons
expandIcons.forEach(icon => {
  icon.addEventListener('click', function(e) {
    e.preventDefault();
    const description = this.getAttribute('data-product-description');
    const image = this.getAttribute('data-product-image');
    const price = this.getAttribute('data-product-price');
    popupTitle.textContent = this.closest('.single-product').querySelector('.product-title').textContent;
    popupDescription.textContent = description;
    popupImage.src = image;
    popupPrice.textContent = 'Price: R' + price;
    popup.style.display = 'block';
  });
});

  // Close pop-up window when close button is clicked
  closePopupButton.addEventListener('click', function() {
    popup.style.display = 'none';
  });  
  
</script>


</section>


<?php 
include "footer.php"
?>
</body>
</html>