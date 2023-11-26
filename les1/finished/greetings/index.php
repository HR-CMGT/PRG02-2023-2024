<?php
//Get the number for the current hour (24 clock)
$hours = date('G');

// The default value for the period. If it's not evening, the value will be overwritten.
$period = 'navond';
//Decide the text depending on current time.
// 00, 01, 02, 03, 04, 05
if ($hours < 6) {
    $period = 'nacht';
}
// 06, 07, 08, 09, 10 ,11
elseif ($hours < 12)  {
    $period = 'morgen';
}
elseif ($hours < 18) {
    $period = 'middag';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Greetings | Programmeren 2</title>
</head>
<body>
<h1>Greetings</h1>
<hr/>

<h2>Begroeting op basis van het moment van de dag</h2>
<p>
    <?= 'Goede' . $period; ?>
</p>
</body>
</html>
