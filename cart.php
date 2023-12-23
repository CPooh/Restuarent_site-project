<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function addToDatabase($productName, $price) {
    global $conn;

    $productName = $conn->real_escape_string($productName);
    $price = $conn->real_escape_string($price);

    $sql = "INSERT INTO products (name, price) VALUES ('$productName', '$price')";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

function getProducts() {
    global $conn;

    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    $products = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }

    return $products;
}
