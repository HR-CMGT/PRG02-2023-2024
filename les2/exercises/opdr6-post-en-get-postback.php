<?php
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
		<title>POST en GET - Postback</title>
	</head>
	<body>
    <section class="section">
        <div class="container">
            <h2 class="title">POST en GET - Postback</h2>

            <p class="mb-4">
                Probeer de opdracht zo te maken dat je vanaf deze pagina zowel met een GET (link)
                als met een POST (formulier) een 'postback' kunt doen.
                De info zal je zelf moeten opvangen in PHP en de benodigde checks zal je zelf moeten
                toevoegen.
            </p>

            <form action="" method="">

                <label for="firstname">Voornaam</label>

                <input type="text" id="firstname" name="" />


                <input type="submit" name="submit" value="Versturen"/>

            </form>

            <p>
                <a href="">Link naar dezelfde pagina</a>
            </p>

            <footer class="footer mt-4">
                <a href="index.php">Terug naar het overzicht van de lesopdrachten</a>
            </footer>
        </div>
    </section>
	</body>
</html>