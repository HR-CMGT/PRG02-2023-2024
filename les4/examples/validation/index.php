<?php
// standaard is er geen error
$emailError = '';

// check op Postback
if(isset($_POST['submit'])) {

    // Als er niks is ingevuld in het inputveld
    if($_POST['email'] == '') {
        // Maak een error message
        $emailError = 'Het e-mailadres moet ingevuld zijn.';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Validation page 1</title>
</head>
<body>

    <form action="" method="post">

        <label for="email">Email</label>
        <input id="email" type="text" name="email" />

        <!--Toon hier de error. Als er geen error is, wordt de span gevuld met een lege string. Deze zie je dan niet-->
        <span><?= $emailError ?></span>

        <input type="submit" name="submit" />

    </form>

</body>
</html>
