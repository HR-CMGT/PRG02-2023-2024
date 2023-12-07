<?php
//Define DB credentials
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'music_collection_users';

//Paths
const BASE_PATH = '/PRG02-2023-2024/advanced/lesson4/assignment/';
const INCLUDES_PATH = __DIR__ . '/';

//Custom error handler, so every error will throw a custom ErrorException
set_error_handler(function ($severity, $message, $file, $line) {
    throw new ErrorException($message, $severity, $severity, $file, $line);
});
