<?php

//Require needed files
require_once "settings.php";
require_once "classes/MusicCollection/Collection.php";
require_once "classes/MusicCollection/Album.php";

//Set variable for errors
$errors = [];

try {
    //Get current filename to load a specific piece of code
    $pathParts = explode('/', $_SERVER['SCRIPT_NAME']);
    $currentFile = dirname(__FILE__) . '/pages/' . ucfirst($pathParts[count($pathParts) - 1]);
    require_once $currentFile;
} catch (Exception $e) {
    //Set error
    $errors[] = 'Oops, try to fix your error please: ' . $e->getMessage() . ' on line ' . $e->getLine() . ' of ' . $e->getFile();
}
