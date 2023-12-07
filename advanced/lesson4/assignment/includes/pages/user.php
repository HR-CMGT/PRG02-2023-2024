<?php
//TEMP script just to create a user.
$db = new \System\Databases\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$user = new \System\Users\User();
$user->email = 'moora@hr.nl';
$user->password = password_hash('test', PASSWORD_DEFAULT);
$user->name = 'Antwan';
\System\Users\User::create($user, $db->getConnection());
exit;
