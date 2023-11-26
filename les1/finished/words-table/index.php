<?php

// Create an array and fill it with 7 words (strings)
$words = [
    'one',
    'two',
    'three',
    'four',
    'five',
    'six',
    'seven'
];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Words Table | Programmeren 2</title>
</head>
<body>
<section class="section">
    <div class="content">
        <h2 class="title is-2">
            Words Table
        </h2>

        <!-- Create a table with 2 columns-->
        <table>
            <thead>
                <tr>
                    <th>Numbers</th>
                    <th>Words</th>
                </tr>
            </thead>
            <tbody>
            <!-- Create a loop that fills the table with the words from the array. -->
            <?php for($i = 0 ; $i < count($words); $i++) { ?>
                <tr>
                    <!-- Fill the first column of the table with numbers (1 - 7)-->
                    <td><?= $i + 1 ?></td>
                    <!-- Fill the second column with the words from the array. -->
                    <td><?= $words[$i] ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <footer class="footer mt-4">
            <a href="../index.html">Terug naar het overzicht van de lesopdrachten</a>
        </footer>
    </div>
</section>
</body>
</html>
