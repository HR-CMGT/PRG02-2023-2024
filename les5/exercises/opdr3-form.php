<?php
// Lees het hidden field uit en sla deze op.
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Muziekalbums - Create</title>
</head>
<body>
<div class="container px-4">
    <h1 class="title mt-4">Update album</h1>

    <section class="columns">

        <!--Toon de inhoud van het hidden field-->

        <form class="column is-6" action="" method="post">

            <!--Voeg een hidden field toe-->

            <div class="field is-horizontal">
                <div class="field-label is-normal"></div>
                <div class="field-body">
                    <button class="button is-link is-fullwidth" type="submit" name="submit">Save</button>
                </div>
            </div>
        </form>
    </section>
    <a class="button mt-4" href="index.html">&laquo; Terug naar het overzicht van de lesopdrachten</a>
</div>
</body>
</html>
