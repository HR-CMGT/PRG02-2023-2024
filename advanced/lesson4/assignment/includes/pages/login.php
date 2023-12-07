<?php
//If already logged in, no need to be here
/** @var System\Utils\Session $session */
if ($session->keyExists('user')) {
    header('Location: create');
    exit;
}

//Validation
require_once dirname(__FILE__) . '/includes/login-post-data.php';

//When no error, set session variable, redirect & exit script
/** @var System\Users\User $user */
if (isset($formData) && empty($errors)) {
    $session->set('user', $user);
    header('Location: create');
    exit;
}

//Default page title
$pageTitle = 'Login';
