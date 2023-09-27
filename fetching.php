<?php
include "connect.php";
$sql = "SELECT * FROM product";
$result = $conn->query($sql);

$products = array();
// Fetch and store the product information
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productName = $row['prodName'];
        $productPrice = $row['price'];
        $productImage = $row['imageURL'];
        $productID = $row['productID'];
        $productDescription = $row['description'];
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
$jsonFilePath = 'C:\xampp\htdocs\ForestHill\products.json';

file_put_contents($jsonFilePath, $jsonProducts);

?>
