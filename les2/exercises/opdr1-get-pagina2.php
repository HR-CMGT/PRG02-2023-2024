<?php
$message = '';

// Get information from GET array
$result = $_GET['query'];
// Match send information
if ($result == 'techniek')
{
    $message = "Geweldig, het is gelukt om de tag 'techniek' door te sturen.";
} else
{
    // Debug info
    if (empty($_GET))
    {
        $message = 'Het gaat nog niet helemaal goed. Je hebt geen extra info doorgestuurd.';
    }
    foreach ($_GET as $key => $value)
    {
        $message = 'Het is nog niet helemaal gelukt. Je stuurde iets door met KEY: ' . $key . ' en VALUE: ' . $value;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht 1 - GET - Het antwoord</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
<section class="section">
    <div class="container">
        <p><?= $message ?></p>

        <footer class="footer mt-4">
            <a href="index.php">Terug naar het overzicht van de lesopdrachten</a>
        </footer>
    </div>
</section>
</body>
</html>
