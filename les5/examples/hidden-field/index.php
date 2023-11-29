<?php
/**
 * Op deze pagina wordt een random getal aangemaakt (tussen 1 en 100).
 * Deze waarde wordt als hidden field meegestuurd aan de volgende pagina.
 */

$randomNumber = rand(1, 100);
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
    <form action="hidden_field.php" method="post">

        <input type="hidden" name="randomNumber" value="<?= $randomNumber ?>"/>

        <input type="submit" name="submit" value="verstuur 'geheime' code"/>
    </form>
</body>
</html>
