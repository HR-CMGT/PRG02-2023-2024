<?php
// db connenction
require_once 'includes/db-connection.php';
/* @var mysqli $db */

if(isset($_POST['submit'])) {
    $name           = mysqli_escape_string($db, $_POST['name']);
    $description    = mysqli_escape_string($db, $_POST['description']);
    $id             = mysqli_escape_string($db, $_POST['id']);

    // validation
    $errors = [];
    if($name === '') {
        $errors['name'] = 'Naam mag niet leeg zijn';
    }
    if($description === '') {
        $errors['description'] = 'Beschrijving mag niet leeg zijn';
    }

    $product = [
        'id' => $id,
        'name' => $name,
        'description' => $description
    ];

    if (empty($errors)) {
        $query = "UPDATE products 
              SET name = '$name', description = '$description' 
              WHERE id = $id";
        echo $query;
        $result = mysqli_query($db, $query) or die ('Error: ' . mysqli_error($db));

        if ($result) {
            header('Location: index.php');
            exit;
        } else {
            echo 'Er is iets misgegaan';
        }
    }
}
else if(isset($_GET['id'])) {


    $id = $_GET['id'];
    $query = "SELECT * 
              FROM products 
              WHERE id = $id";

    $result = mysqli_query($db, $query) or die ('Error: ' . mysqli_error($db));
    if(mysqli_num_rows($result) == 1) {
        $product = mysqli_fetch_assoc($result);
    }
    else {
        header('Location: index.php');
        exit;
    }
} else {
    header('Location: index.php');
    exit;
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
    <title>Document</title>
</head>
<body>
    <h1>Product bewerken</h1>

    <form action="" method="post">
        <label for="name">Naam</label>
        <input type="text" id="name" name="name" value="<?= htmlentities($product['name']) ?>"/>
        <span><?= $errors['name'] ?? '' ?></span>

        <label for="description">Beschrijving</label>
        <textarea id="description" name="description"><?= htmlentities($product['description']) ?></textarea>
        <span><?= $errors['description'] ?? '' ?></span>

        <input type="hidden" name="id" value="<?= $product['id'] ?>"/>

        <input type="submit" name="submit" value="Opslaan"/>
    </form>
    <a href="index.php">Terug naar overzicht</a>
</body>
</html>
