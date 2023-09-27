<?php
include "connect.php";

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
//Fetches the info from the form
    $fName = $_POST ["first_name"];
    $lName = $_POST ["last_name"];
    $email = $_POST ["email"];    
    $pNumber = $_POST ["phone_number"];
    $password = $_POST ["userPassword"];

//Insert into database
    $statement = $conn->prepare ("INSERT INTO customer(firstName, lastName, 
    email, phoneNumber, userPassword)
    VALUES(?,?,?,?,?)");

    $statement->bind_param("sssss",$fName, $lName,$email, $pNumber, $password);
    $statement->execute();
    echo "Registration complete. Welcome to the Forest Hill family";
    echo '<a href="index.php">click here to return to Forest Hill home page</a>';
    $statement->close();
    }
?>
 