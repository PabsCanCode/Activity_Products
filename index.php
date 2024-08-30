<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <title>Document</title>
</head>

<body>
  <h1>Create New Product</h1>
  <form action="insert.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" />
    <label for="description">Description:</label>
    <input type="text" id="description" name="des" />
    <label for="price">Price:</label>
    <input id="price" name="price" />
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" />
    <input type="submit" value="Submit" />
  </form>
  <a href="details.php">View</a>
</body>

</html>