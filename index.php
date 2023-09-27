<html lang="en">
  
<?php 

include "head.php" ?>
<body>
<?php include "nav.php";
include "connect.php" ;
include "fetching.php";?>>


    <section id="banner">
        <h2>NEW STOCK ARRIVAL</h2>
        <h4>Browse our latest stock now </h4>
        <button>SHOP NOW!</button>
    </section>

    <h1>FEATURED PRODUCTS</h1>
    <p class="subtitle">Some of our popular picks of the week</p>  
  <div id="root" class="container"></div>

  <!-- Cart Popup -->
  <div class="cart-popup" id="cartPopup">
    <div class="cart-items" id="cartItem">Your cart is empty</div>
    <div class="cart-footer">
      <h3>Total</h3>
      <h2 id="total">R 0.00</h2>
    </div>
  </div>

  <script src="addcartIndex.js"></script>


<?php
include "productPopUp.php"
?>
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
    <section id="gift">
        <h1>GIVE THE GIFT OF GREEN</h1>
        <p>Unsure of what to send? Our vouchers allow your loved one to make their own choice!</p>
        <a href="giftVouchers.php"><button>View vouchers</button></a>

  
    </section>

    <h1>SHOP BY CATEGORY</h1>
    <p class="subtitle">Browse our range of plants and accessories</p>

    <section id="category">
        <!-- CATEGORY 1 -->
        <div class="category">
            <img src="images/Indoors.jpg" class="categoryImage">
               <a href="catIndoor.php"> <button>View all</button></a>
            <div class="categoryName">
              <h3 class="categoryName">Indoor plants</h3>
          </div>
        </div>  
        <!-- CATEGORY 1 -->
        <div class="category">
            <img src="images/Hanging plants.jpg" class="categoryImage">
            <a href="catHanging.php"> <button>View all</button></a>
            <div class="categoryName">
              <h3 class="categoryName">Hanging plants</h3>
          </div>
        </div> 
        <!-- CATEGORY 1 -->
        <div class="category">
            <img src="images/accessories.jpg" class="categoryImage">
            <a href="catAccessories.php"> <button>View all</button></a>
            <div class="categoryName">
              <h3 class="categoryName">Accessories</h3>
          </div>
        </div> 
      </section>

      
    <section id="latestblogs">

      <h1>LATEST BLOGS</h1>
      <?php
// Fetch data from the blogs table
$sql = "SELECT * FROM blogs ORDER BY blogNumber DESC LIMIT 3";
$result = $conn->query($sql);

// Display the fetched data on the blog page
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
      $blogID = $row['blogNumber'];
      $blogTitle = $row['title'];
      $blogImage = $row['blogThumbnail'];
      $subtitle = $row['subtitle'];
      $content = $row['content'];

      // Display the blogs dynamically
      echo '<div id="blog-' . $blogID . '" class="blogs">';
      echo '<div class="part-1">';
      echo '<img src="images/' . $blogImage . '" class="blogImage">';
      echo '</div>';
      echo '<div class="blogInfo">';
      echo '<h3 class="blogTitle">' . $blogTitle . '</h3>';
      echo '<p>' . $subtitle . ' <a href="fullBlog.php?blogID=' . $blogID . '">Read more...</a></p>';
      echo '</div>';
      echo '</div>';
  }
} else {
  echo "No blogs found.";
}

// Close the database connection
?>
        </section>
<section id="shipping">
<h1>OUR SHIPPING INFORMATION:</h1>
<div class="container">
  <div class="column">
    <h2>Delivery and Packaging</h2>
    <p>Our team has partnered with reliable courier services to ensure your plants arrive safely and promptly. Each plant is meticulously packed using specialized plant boxes, providing optimal protection during transit. We understand the delicate nature of plants, and our packaging methods are designed to maintain their health and vitality throughout the shipping journey. Additionally, we prioritize using eco-friendly packaging materials whenever possible to minimize our environmental impact.</p>
  </div>
  <div class="column">
    <h2>Healthy Plants Guarantee</h2>
    <p>We take great pride in delivering healthy plants to our customers. Before shipping, our team of experts carefully selects and inspects each plant to ensure its quality. We also include detailed care instructions with every order, equipping you with the knowledge needed to nurture your plants and help them thrive in their new environment. Should you encounter any issues, we are here to assist you and find a satisfactory solution.</p>
  </div>
  <div class="column">
    <h2>Order Processing and Tracking</h2>
    <p>Once your order is placed, our dedicated team swiftly prepares it for shipping. In most cases, your plants will be dispatched within 1-2 business days. The delivery timeframe will depend on your location within South Africa and may range from 2 to 7 business days. To keep you informed, we provide order tracking information. You will receive a tracking number via email, allowing you to easily monitor the progress of your shipment and anticipate its arrival.</p>
  </div>
</div>


</section>



<?php
include "footer.php"?>

</body>
</html>