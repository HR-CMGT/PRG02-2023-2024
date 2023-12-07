<?php require_once 'includes/initialize.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection Details</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
<div class="container px-4">
    <?php if (!empty($errors)): ?>
        <section class="content">
            <ul class="notification is-danger">
                <?php foreach ($errors as $error): ?>
                    <li><?= $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
    <?php endif; ?>

    <?php if (isset($album)): ?>
        <h1 class="title mt-4"><?= $album->artist . ' - ' . $album->name; ?></h1>
        <img class="image is-128x128" src="images/<?= $album->image; ?>" alt="<?= $album->name; ?>"/>
        <section class="content">
            <ul>
                <li>Genre: <?= $album->genre; ?></li>
                <li>Year: <?= $album->year; ?></li>
                <li>Tracks: <?= $album->tracks; ?></li>
            </ul>
        </section>
        <a class="button mt-4" href="index.php">Go back to the list</a>
    <?php endif; ?>
</div>
</body>
</html>
