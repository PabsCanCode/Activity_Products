<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <title>Document</title>
</head>

<body>
  <h1>Update</h1>
  <a href="details.php">Details</a>
</body>

</html>

<?php
require "conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
  $id = $_GET["id"];

  $prod = $conn->query("SELECT * FROM products WHERE ID = '$id'");
  $row = $prod->fetch(PDO::FETCH_ASSOC);

  echo "<form action='update.php' method='POST'>";
  echo "<input type='hidden' name='id' value='". $row['ID']. "'>";
  echo "<label>Name</label>";
  echo "<input type='text' name='name' value='". $row['name']. "'>";
  echo "<label>Description</label>";
  echo "<input type='text' name='des' value='". $row['description']. "'>";
  echo "<label>Price</label>";
  echo "<input name='price' value='". $row['price']. "'>";
  echo "<label>Quantity</label>";
  echo "<input type='number' name='quantity' value='". $row['quantity']. "'>";
  echo "<input type='submit' value='Update'>";
  echo "</form>";

}
?>