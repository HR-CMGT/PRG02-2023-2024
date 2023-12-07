<?php require_once 'includes/initialize.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection Delete</title>
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
        <h1 class="title mt-4">Are you sure you want to delete <?= $album->artist . ' - ' . $album->name; ?>?</h1>
        <a class="button is-danger mt-4" href="delete.php?id=<?= $album->id; ?>&continue">Yes, delete!</a>
        <a class="button mt-4" href="index.php">Go back to the list</a>
    <?php endif; ?>
</div>
</body>
</html>
