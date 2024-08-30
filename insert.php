<?php

require "conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = $_POST['name'];
  $des = $_POST['des'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];

  try {
  $sql = "INSERT INTO products (name, description, price, quantity) VALUES ('$name', '$des', '$price', '$quantity')";
  header("Location: index.php");
  $conn->exec($sql);
  } catch(PDOException $e) {
    echo $sql . "<br>". $e->getMessage();
  }
}

?>