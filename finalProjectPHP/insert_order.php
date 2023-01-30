<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO orders (id, product_id, dateTime, total_price, tax, quantity, sub_total) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("iissddd", $id, $product_id, $dateTime, $total_price, $tax, $quantity, $sub_total);

// set parameters and execute
$id = $_POST['id'];
$product_id = $_POST['product_id'];
$dateTime = date('Y-m-d H:i:s', time());
$total_price = $_POST['total'];
$tax =  $_POST['tax'];
$quantity =  $_POST['quantity'];
$sub_total =  $_POST['sub_total'];
$stmt->execute();

printf("New record created successfully. Last inserted ID is: %d\n", $stmt->insert_id);

$stmt->close();
$conn->close();
