<?php
require_once 'settings.php';
require_once 'classes/CMGTClass.php';
require_once 'classes/Student.php';

try {
    //Load data from JSON & convert to PHP array
    $studentsRawData = file_get_contents(DATA_PATH . 'students.json');
    $studentsRawList = json_decode($studentsRawData, true);

    //Create new instance for CMGTClass & add students
    $cmgtClass = new CMGTClass();
    foreach ($studentsRawList as $studentRaw) {
        $cmgtClass->addStudent($studentRaw);
    }

    //Get variables for my HTML template
    $students = $cmgtClass->getStudents();
    $totalStudents = $cmgtClass->getTotalStudents();
} catch (Exception $e) {
    //Set error for end user
    $error = 'Oops, try to fix your code: ' . $e->getMessage() .
    ' on line ' . $e->getLine() . ' in file ' . $e->getFile();
}
