<?php

include "connect.php";
// Fetch data from the product table
$sql = "SELECT * FROM product LIMIT 4";
$result = $conn->query($sql);

// Create an array to store the product information
$products = array();

// Fetch and store the product information
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productName = $row['prodName'];
        $productPrice = $row['price'];
        $productImage = $row['imageURL'];
        $productID = $row['productID'];
        $productDescription = $row['description'];

        // Create an associative array for each product
        $product = array(
            'productName' => $productName,
            'productPrice' => $productPrice,
            'productImage' => $productImage,
            'productID' => $productID,
            'productDescription' => $productDescription
        );

        // Add the product to the products array
        $products[] = $product;
    }
}

// Convert the products array to JSON format
$jsonProducts = json_encode($products);

// Specify the path and filename of the JSON file
$jsonFilePath = 'C:\xampp\htdocs\ForestHill\productsIndex.json';

// Write the JSON data to the file
file_put_contents($jsonFilePath, $jsonProducts);

?>
