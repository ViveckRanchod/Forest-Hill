<html lang="en">
  
<?php 
session_start(); 
include "head.php" ?>
<body>
<?php include "nav.php";

?>

    <h1>Gift vouchers</h1>
    <p class="subtitle"></p>  

    <section id="featured">
 
    <?php
// Fetch data from the product table
$sql = "SELECT * FROM product WHERE prodCategory = 'voucher'";
$result = $conn->query($sql);

// Display the fetched data on the shop page
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productName = $row['prodName'];
        $productPrice = $row['price'];
        $productImage = $row['imageURL'];
        $productID = $row['productID'];
        $productDescription = $row['description'];

        // Display the product information dynamically
        echo '<div class="single-product">';
        echo '<div class="part-1">';
        echo '<img src="images/' . $productImage . '" class="prodcuctImage" id"productImage">';
        echo '<ul class="prodIcons">';
        echo '<li><a class="add-to-cart" data-product-id="' . $productID . '"><i class="fa-solid fa-cart-plus"></i></a></li>';
        echo '<li><a href="#"><i class="fa-solid fa-heart-circle-plus"></i></a></li>';
        echo '<li><a href="#" class="expand-icon" data-product-description="' . $productDescription . '" data-product-image="images/' . $productImage . 
        '" data-product-price="' . $productPrice . '"><i class="fas fa-expand"></i></a></li>';
        echo '<li><a href="#"><i class="fa-solid fa-share-nodes"></i></a></li>';
        echo '</ul>';
        echo '</div>';
        echo '<div class="product-info">';
        echo '<h3 class="product-title">' . $productName . '</h3>';
        echo '<span class="product-price"> R' . $productPrice . '</span>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No products found.";
}

// Close the database connection
?>

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

<script>
  function sortProducts() {
    var sortOption = document.getElementById("sort").value;
    window.location.href = "shop.php?sort=" + sortOption;
  }
</script>
</html>