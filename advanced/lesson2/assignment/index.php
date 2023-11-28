<?php require_once 'includes/initialize.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
<div class="container">
    <h1 class="title mt-4">Music Collection</h1>
    <?php if (!empty($errors)): ?>
        <section class="content">
            <ul class="notification is-danger">
                <?php foreach ($errors as $error): ?>
                    <li><?= $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
    <?php endif; ?>

    <?php if (isset($albums) && isset($totalAlbums)): ?>
        <a class="button" href="create.php">Add new album</a>
        <table class="table is-striped mt-4">
            <thead>
            <tr>
                <th>#</th>
                <th>Artist</th>
                <th>Album</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Tracks</th>
                <th colspan="2"></th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td colspan="8" class="has-text-centered">&copy; My Collection with <?= $totalAlbums; ?> albums</td>
            </tr>
            </tfoot>
            <tbody>
            <?php foreach ($albums as $index => $album): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= $album->artist; ?></td>
                    <td><?= $album->name; ?></td>
                    <td><?= $album->genre; ?></td>
                    <td><?= $album->year; ?></td>
                    <td><?= $album->tracks; ?></td>
                    <td><a href="detail.php?album-number=<?= $index; ?>">Details</a></td>
                    <td><a href="edit.php?album-number=<?= $index; ?>">Edit</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
</body>
</html>
