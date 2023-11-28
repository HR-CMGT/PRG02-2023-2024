<?php require_once 'includes/initialize.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection Edit</title>
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
        <h1 class="title mt-4">Edit <em><?= $album->artist . ' - ' . $album->name; ?></em></h1>
        <section class="columns">
            <form class="column is-6" action="" method="post">
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="artist">Artist</label>
                    </div>
                    <div class="field-body">
                        <input class="input" id="artist" type="text" name="artist" value="<?= $album->artist; ?>"/>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="name">Album</label>
                    </div>
                    <div class="field-body">
                        <input class="input" id="name" type="text" name="name" value="<?= $album->name; ?>"/>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="genre">Genre</label>
                    </div>
                    <div class="field-body">
                        <input class="input" id="genre" type="text" name="genre" value="<?= $album->genre; ?>"/>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="year">Year</label>
                    </div>
                    <div class="field-body">
                        <input class="input" id="year" type="text" name="year" value="<?= $album->year; ?>"/>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="tracks">Tracks</label>
                    </div>
                    <div class="field-body">
                        <input class="input" id="tracks" type="number" name="tracks" value="<?= $album->tracks; ?>"/>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal"></div>
                    <div class="field-body">
                        <button class="button is-primary is-fullwidth" type="submit" name="submit">Save</button>
                    </div>
                </div>
            </form>
        </section>
    <?php endif; ?>
    <a class="button" href="index.php">&laquo; Go back to the list</a>
</div>
</body>
</html>
