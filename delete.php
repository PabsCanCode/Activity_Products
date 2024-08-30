<?php
require 'conn.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
  $id = $_GET["id"];
  $delProd = "DELETE FROM products WHERE id = '$id'";
  $conn->exec($delProd);
  header("Location: details.php");
}
?>