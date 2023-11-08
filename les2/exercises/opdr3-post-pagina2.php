<?php

$result = $_POST['firstName'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Oefening 3 - POST - Het formulier</title>
</head>
<body>
<section class="section">
    <div class="container">
        <h2 class="title">Oefening 3 - POST - Het formulier</h2>
        <p>
            Goed gedaan! Jouw naam is: <b><?= $result ?></b>
        </p>

        <footer class="footer mt-4">
            <a href="index.php">Terug naar het overzicht van de lesopdrachten</a>
        </footer>
    </div>
</section>
</body>
</html>
