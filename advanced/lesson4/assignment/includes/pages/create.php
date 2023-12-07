<?php
//If not logged in, redirect to login
/** @var System\Utils\Session $session */
if (!$session->keyExists('user')) {
    header('Location: login');
    exit;
}

//Set default empty album & load POST logic
$album = new \System\MusicCollection\Album();
require_once dirname(__FILE__) . '/includes/album-post-data.php';

//Special check for create form only
if (isset($formData) && $_FILES['image']['error'] == 4) {
    $errors[] = 'Image cannot be empty';
}

//Database magic when no errors are found
if (isset($formData) && empty($errors)) {
    //Store image & retrieve name for database saving
    $image = new \System\Utils\Image();
    $album->image = $image->save($_FILES['image']);

    //Set user id in Album
    $album->user_id = $session->get('user')->id;

    //Init the database
    $db = new \System\Databases\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //Save the record to the db
    if (\System\MusicCollection\Album::create($album, $db->getConnection())) {
        $success = 'Your new album has been created in the database!';
        //Override to see a new empty form
        $album = new \System\MusicCollection\Album('', '', '', '', '', '');
    } else {
        $errors[] = 'Database error info: ' . $db->getConnection()->errorInfo()[0];
    }
}

//Default page title
$pageTitle = 'Create album';
