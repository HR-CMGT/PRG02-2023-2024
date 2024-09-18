<?php
require_once 'includes/db-connection.php';

$query = "SELECT * FROM products";

$result = mysqli_query($db, $query) or die ('Error: ' . mysqli_error($db));

$products = [];
while ($row = mysqli_fetch_assoc($result)) {
    $products[] = $row;
}

mysqli_close($db);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productenoverzicht</title>
</head>
<body>
    <h1>Productenoverzicht</h1>
    <?php foreach ($products as $product) { ?>
        <section style="border: 1px solid red">
            <h2><?= $product['name'] ?></h2>
            <p><?= $product['description'] ?></p>
            <a href="edit.php?id=<?= $product['id'] ?>">Edit product</a>
        </section>
    <?php } ?>
</body>
</html>
