<?php
if(isset($_POST['submit'])) {
    $randomNumber = $_POST['randomNumber'];
}
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
    <p>Het geheime getal is: <?= $randomNumber ?></p>

    <p><a href="index.php">Terug naar de index</a></p>
</body>
</html>
