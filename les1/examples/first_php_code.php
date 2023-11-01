<?php
$name = '';
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $name = strtolower($name);
    $name = str_replace(' ', '', $name);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My first PHP code</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">
            Name:
            <input type="text" id="name" name="name">
        </label>
        <input type="submit" name="submit">
    </form>
    <p><?php echo $name ?></p>
</body>
</html>
