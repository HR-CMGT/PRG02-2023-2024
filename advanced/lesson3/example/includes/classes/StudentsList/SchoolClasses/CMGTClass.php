<?php namespace StudentsList\SchoolClasses;

use StudentsList\Persons\Student;

/**
 * Class CMGTClass
 */
class CMGTClass implements HRClass
{
    public string $name = 'Advanced Group';
    public string $slogan = 'We rock!';
    private array $students = [];
    private const MAX_STUDENTS = 16;

    /**
     * @return array
     */
    public function getStudents(): array
    {
        return $this->students;
    }

    /**
     * Add students to the class
     *
     * @param Student[] $students
     * @throws \Exception
     */
    public function setStudents(array $students): void
    {
        $this->students = $students;

        if ($this->getTotalStudents() > self::MAX_STUDENTS) {
            throw new \Exception('Too many students!');
        }
    }

    /**
     * @return int
     */
    public function getTotalStudents(): int
    {
        return count($this->students);
    }
}
