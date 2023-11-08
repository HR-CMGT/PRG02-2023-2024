<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Opdracht 1 - validatie</title>
</head>
<body>
<section class="section">
    <div class="container">

        <form action="" method="post">

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label for="name" class="label">Name</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control is-expanded has-icons-left">
                            <input id="name" class="input" type="text" placeholder="Name">
                            <span class="icon is-small is-left"><i class="fas fa-user"></i></span>
                        </p>
                        <p class="help is-danger">
                            Hier komt de eventuele foutmelding te staan.
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal"></div>
                <div class="field-body">
                    <button class="button is-link is-fullwidth" type="submit" name="submit">Send</button>
                </div>
            </div>

        </form>

        <a class="button mt-4" href="index.php">&laquo; Terug naar het overzicht van de lesopdrachten</a>
    </div>
</section>
</body>
</html>

