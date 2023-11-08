<?php

/** @var mysqli $db */
require_once "includes/database.php";

//Count the total records in the music database
$query = "SELECT COUNT(*) FROM albums";
$result = mysqli_query($db, $query) or die ('Error: ' . $query);
$total = mysqli_fetch_column($result);

//Define offset from URL
$limit = 5;
$offset = 0;
if (isset($_GET['offset'])) {
    $offset = $_GET['offset'];
}

//Get the result set from the database with a SQL query
$query = "SELECT * FROM albums LIMIT $limit OFFSET $offset";
$result = mysqli_query($db, $query) or die ('Error: ' . $query);

//Loop through the result to create a custom array
$musicAlbums = [];
while ($row = mysqli_fetch_assoc($result)) {
    $musicAlbums[] = $row;
}

//Close connection
mysqli_close($db);
?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
<div class="container px-4">
    <h1 class="title mt-4">Music Collection</h1>
    <hr>
    <table class="table is-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Artist</th>
            <th>Album</th>
            <th>Genre</th>
            <th>Year</th>
            <th>Tracks</th>
            <th></th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <td colspan="6" class="has-text-centered">&copy; My Collection</td>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($musicAlbums as $album) { ?>
            <tr>
                <td><?= $album['id'] ?></td>
                <td><?= $album['artist'] ?></td>
                <td><?= $album['name'] ?></td>
                <td><?= $album['genre'] ?></td>
                <td><?= $album['year'] ?></td>
                <td><?= $album['tracks'] ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div class="buttons">
        <?php if ($offset > 0) { ?>
            <a class="button" href="?offset=<?= $offset - $limit ?>">Previous</a>
        <?php } ?>
        <?php if ($offset + $limit < $total) { ?>
            <a class="button" href="?offset=<?= $offset + $limit ?>">Next</a>
        <?php } ?>
    </div>
</div>
</body>
</html>
