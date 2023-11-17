<?php

// controleer of er op de link geklikt is. Dit doe je door te controleren of de $_GET de juiste info bevat.

    // Als dat waar is, stel je de variabele $code gelijk aan de meegestuurde info


?>
<!doctype html>
<html lang="en">
<head>
    <meta name="description" content="width=device-width, user-scalable=no">
    <meta charset="utf-8">
    <title>Oefening 5 - GET - Postback</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
<section class="section">
    <div class="container">
        <h1 class="title">Oefening 5 - GET - Postback</h1>

        <p>
            In deze opdracht is het de bedoeling dat informatie uit een link
            verstuurd wordt naar <strong>dezelfde</strong> pagina. Dit noemen we een postback.
            PHP moet echter controleren of deze postback heeft plaatsgevonden.
            <br>
            Vul de PHP code hierboven aan, zodat de postback goed afgehandeld wordt
            en er geen foutmeldingen meer optreden.
        </p>

        <?php if ($code) { ?>
            <p class="mt-2 is-size-4">
                De code is: <?= $code ?>
            </p>
        <?php } else { ?>

            <a href="?info=42">Deze link stuurt je naar dezelfde pagina</a>

        <?php } ?>
        <footer class="footer mt-4">
            <a href="index.php">Terug naar het overzicht van de lesopdrachten</a>
        </footer>
    </div>
</section>

</body>
</html>