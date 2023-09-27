<html lang="en">
<?php include "head.php"; ?>

<body>
  <?php include "nav.php"; ?>

  <h1>Checkout</h1>

  <section id="checkout" style ="margin = 20%;">
  <form  method="POST"class="form-group">   

<div class="payment">
    <h2>Contact Information</h2>

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="surname">Surname:</label>
      <input type="text" id="surname" name="surname" required>
   
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" required>
   

    <h2>Billing Address</h2>

      <label for="province">Province:</label>
      <select id="province" name="province" required>
        <option value="">Select Province</option>
        <option value="Eastern Cape">Eastern Cape</option>
        <option value="Free State">Free State</option>
        <option value="Gauteng">Gauteng</option>
        <option value="KwaZulu-Natal">KwaZulu-Natal</option>
        <option value="Limpopo">Limpopo</option>
        <option value="Mpumalanga">Mpumalanga</option>
        <option value="Northern Cape">Northern Cape</option>
        <option value="North West">North West</option>
        <option value="Western Cape">Western Cape</option>
      </select>

      <label for="city">City:</label>
      <input type="text" id="city" name="city" required>

      <label for="address">Street Address:</label>
      <input type="text" id="address" name="address" required>
    <h2>Payment Method</h2>
      <label>
        <input type="radio" name="payment" value="card" required>
        Pay with Card
      </label>
      <label>
        <input type="radio" name="payment" value="cash">
        Cash on Delivery
      </label>
    <h3>Card Information</h3>

      <label for="cardNumber">Card Number:</label>
      <input type="text" id="cardNumber" name="cardNumber">

      <label for="expiry">Expiry Date:</label>
      <input type="text" id="expiry" name="expiry">
  
      <label for="cvv">CVV:</label>
      <input type="text" id="cvv" name="cvv">
    <button type="submit">Place Order</button>
  </form>
</div>
</section>

</body> 

<?php include "footer.php"; ?>
</html>
