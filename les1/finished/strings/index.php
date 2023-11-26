<?php
// complete the following statements
$lastName = "Pikaar";

// URI to use in the link
$url = 'https://forebears.io/nl/surnames/';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strings | Programmeren 2</title>
</head>
<body>
<section>
    <h1>My last name</h1>
    <div><?= $lastName ?></div>
    <div>
        <!--Add the variables $myName and $url to the link-->
        <a href="<?= $url.$lastName ?>">Link to <?= $url.$lastName ?></a>
    </div>
</section>
</body>
</html>
