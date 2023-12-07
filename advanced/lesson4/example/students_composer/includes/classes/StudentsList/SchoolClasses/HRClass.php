<?php namespace StudentsList\SchoolClasses;

use StudentsList\Persons\Student;

/**
 * Interface HRCLass
 */
interface HRClass
{
    /**
     * @param Student[] $students
     */
    public function setStudents(array $students): void;

    /**
     * @return array
     */
    public function getStudents(): array;
}
