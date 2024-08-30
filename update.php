<?php
require 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  $id = $_POST['id'];
  $name = $_POST['name'];
  $des = $_POST['des'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];

  $prodUp = "UPDATE products SET name = ?, description = ?, price = ?, quantity = ?, update_at = NOW() WHERE ID = ?";
  $stmt = $conn->prepare($prodUp);
  $stmt->execute([$name, $des, $price, $quantity, $id]);

  header("Location: details.php");
}

?>