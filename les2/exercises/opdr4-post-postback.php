<?php

// controleer of het formulier verstuurd is. Dit doe je door te checken of de submit aanwezig is in de $_POST

    // Als dat waar is, stel je de variabele $name gelijk aan de meegestuurde info

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Oefening 4 - POST - Postback</title>
</head>
<body>
<section class="section">
    <div class="container">
        <h2 class="title">Oefening 4 - POST - Postback</h2>

        <p class="mb-4">
            In deze opdracht wordt het formulier door middel van een 'postback'
            teruggestuurd naar dezelfde pagina. Vang bovenaan de pagina de ingevoerde
            info op, maar alleen als het formulier verzonden is.
            <br>
            Maak het formulier verder kloppend en zorg dat er geen foutmeldingen meer zijn.
        </p>

        <?php if (!isset($name)) { ?>

            <form action="" method="">

                <label for="firstName">Voornaam</label>

                <input type="text" id="firstName" name="">


                <input type="submit" name="submit" value="Versturen">

            </form>

        <?php } else { ?>
            <p>
                Geweldig! Je hebt de naam <b><?= $name ?></b> doorgestuurd.
            </p>
        <?php } ?>

        <footer class="footer mt-4">
            <a href="index.php">Terug naar het overzicht van de lesopdrachten</a>
        </footer>
    </div>
</section>
</body>
</html>