<?php
include "connect.php";

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

  $email = $_POST['email'];
  $password = $_POST['userPassword'];

  $sql = "SELECT * FROM customer WHERE email='$email' AND userPassword='$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['email'] = true;

    header("Location: index.php");
    exit;
  } else {
    $error = "Invalid email or password";
    echo "Invalid password or email, please try again";
    echo '<a href="index.php">click here to return to Forest Hill home page</a>';
  }
  mysqli_close($conn);
}
?>
