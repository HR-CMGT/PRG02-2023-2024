<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Date Time | Programmeren 2</title>
</head>
<body>
<h1>Opdracht Datum en tijd</h1>
<hr/>

<h2>“het is vandaag 1 november 2023”</h2>
<p>
    <!--Get the current date from the PHP function Date-->
    <?= 'Het is vandaag ' . date('d F Y'); ?>
</p>

<h2>“het is vandaag 1/11/2023”</h2>
<p>
    <?= 'Het is vandaag ' . date('j/n/Y'); ?>
</p>

<h2>“het is nu 2 uur en 30 minuten” (of: “het is nu 6 uur en 1 minuut”)</h2>
<p>
    <?php
        echo 'Het is nu '.date('G').' uur en '.date('i');
        if (date('i') == 1) {
            echo ' minuut.';
        }
        else {
            echo ' minuten.';
        }
    ?>
</p>
</body>
</html>
