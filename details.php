<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <?php
  require 'conn.php';
  $prod = $conn->query("SELECT * FROM products");
  ?>
  <h1>Details</h1>
  <table border="1" class="display">
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Created At</th>
        <th>Updated At</th>
      </tr>
    </thead>
    <tbody>
      <form method="post" action="PHP_SELF">
        <?php while ($row = $prod->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>". $row['name']. "</td>";
        echo "<td>". $row['description']. "</td>";
        echo "<td>". $row['price']. "</td>";
        echo "<td>". $row['quantity']. "</td>";
        echo "<td>". $row['create_at']. "</td>";
        echo "<td>". $row['update_at']. "</td>";
        echo "<td><a href='updatePage.php?id=". $row['ID']. "'>Update</a></td>";
        echo "<td><a href='delete.php?id=". $row['ID']. "'>Delete</a></td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
  <a href="index.php">Add Product</a>
</body>

</html>