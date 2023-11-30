<?php
require_once 'settings.php';
require_once 'classes/StudentsList/Databases/Database.php';
require_once 'classes/StudentsList/SchoolClasses/HRClass.php';
require_once 'classes/StudentsList/SchoolClasses/CMGTClass.php';
require_once 'classes/StudentsList/Persons/Person.php';
require_once 'classes/StudentsList/Persons/Student.php';

try {
    //New DB connection
    $db = new \StudentsList\Databases\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $connection = $db->getConnection();

    //Get students from DB
    $query = 'SELECT * FROM students';
    $studentsFromDB = $connection->query($query)->fetchAll(PDO::FETCH_CLASS, '\\StudentsList\\Persons\\Student');

    //Create new instance for class & add students
    $cmgtClass = new \StudentsList\SchoolClasses\CMGTClass();
    $cmgtClass->setStudents($studentsFromDB);

    //Get variables for template
    $students = $cmgtClass->getStudents();
    $totalStudents = $cmgtClass->getTotalStudents();
} catch (Exception $e) {
    //Set error variable for template
    $error = 'Oops, try to fix your error please: ' .
        $e->getMessage() . ' on line ' . $e->getLine() . ' of ' .
        $e->getFile();
}

