<?php

//Multidimensional array with the music collection data
$musicAlbums = [
    [
        'artist' => 'Adele',
        'album' => '30',
        'genre' => 'Pop',
        'year' => '2021',
        'tracks' => '12'
    ],
    [
        'artist' => 'Muse',
        'album' => 'Live At Rome Olympic Stadium',
        'genre' => 'Rock',
        'year' => '2013',
        'tracks' => '13'
    ],
    [
        'artist' => 'Dream Theater',
        'album' => 'Systematic Chaos',
        'genre' => 'Progressive Rock',
        'year' => '2007',
        'tracks' => '8'
    ],
    [
        'artist' => 'Hardwell',
        'album' => 'United We Are',
        'genre' => 'House',
        'year' => '2015',
        'tracks' => '14'
    ],
    [
        'artist' => 'Robbie Williams',
        'album' => 'Greatest Hits',
        'genre' => 'Pop',
        'year' => '2010',
        'tracks' => '57'
    ],
    [
        'artist' => 'Limp Bizkit',
        'album' => 'Gold Cobra',
        'genre' => 'Rock / Rap',
        'year' => '2011',
        'tracks' => '16'
    ],
    [
        'artist' => 'Angels & Airwaves',
        'album' => 'Love Part 1',
        'genre' => 'Rock',
        'year' => '2011',
        'tracks' => '11'
    ],
    [
        'artist' => 'Ed Sheeran',
        'album' => '=',
        'genre' => 'Pop',
        'year' => '2021',
        'tracks' => '14'
    ],
    [
        'artist' => 'Kygo',
        'album' => 'Cut Your Teeth',
        'genre' => 'Chillstep',
        'year' => '2014',
        'tracks' => '3'
    ],
    [
        'artist' => '30 Seconds To Mars',
        'album' => 'This Is War',
        'genre' => 'Rock',
        'year' => '2009',
        'tracks' => '15'
    ]
]
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music Collection</title>
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
        </tr>
        </thead>
        <tfoot>
        <tr>
            <td colspan="6" class="has-text-centered">&copy; My Collection</td>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($musicAlbums as $index => $album) { ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $album['artist'] ?></td>
                <td><?= $album['album'] ?></td>
                <td><?= $album['genre'] ?></td>
                <td><?= $album['year'] ?></td>
                <td><?= $album['tracks'] ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>