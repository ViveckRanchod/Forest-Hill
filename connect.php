<?php
// Database credentials
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "foresthill";

// Create a mysqli object
    $conn = new mysqli($host, $username, $password, $dbname);

// Check for connection errors
    if ($conn->connect_error) {
          die("Connection failed: " .$conn->connect_error);

    } 
    else{

    }
    ?>