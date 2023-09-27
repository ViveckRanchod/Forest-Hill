<?php
include "connect.php";

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
//Fetches the info from the form
    $Name = $_POST ["name"];
    $email = $_POST ["email"];
    $pNumber = $_POST ["phone"];   
    $message = $_POST ["message"]; 
  
//Insert into database
    $statement = $conn->prepare ("INSERT INTO messages(customerName, email, 
    phoneNumber, customerMessage)
    VALUES(?,?,?,?)");

    $statement->bind_param("ssss",$Name,$email, $pNumber, $message);
    $statement->execute();
    echo "Thannk you for contacting us, we will be in contact soon! ";
    echo '<a href="index.php">click here to return to Forest Hill home page</a>';
    $statement->close();
    }
?>
 