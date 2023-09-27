<!DOCTYPE html>
<html>
<?php
 include "head.php";
?>

    <title>Registration form</title>
    <?php
 include "nav.php";
?>
<!-- INSERT BELOW INTO url
 http://localhost/foresthill/register.php -->

  <body>
    <div class ="registerForm">
    <h1>Forset Hill registration page </h1>
    <form action="insertUser.php" method="POST">
      <h2>Registration Form</h2>

      <h3>First Name:</h3>
      <input type="text" name="first_name" required>
      
      <h3>Last Name:</h3>
      <input type="text"  name="last_name" required>
          
      <h3>Email address:</h3>
      <input type="text" name="email" required>

      <h3>Phone Number:</h3>
      <input type="text"  name="phone_number" required>

     <h3>Password:</h3>
      <input type="password"  name="userPassword" required>
      <br><br><br>
      
      <button> SIGN UP</button>
      <br><br><br>
</form>
</div>

    <?php

    include "footer.php";
    ?>
    
  </body>
</html>
