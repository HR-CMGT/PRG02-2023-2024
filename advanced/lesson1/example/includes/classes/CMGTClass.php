<?php

class CMGTClass
{
    public string $name = 'Advanced group, yeah!';
    private array $students = [];

    /**
     * @return Student[]
     */
    public function getStudents(): array
    {
        return $this->students;
    }

    /**
     * @param array $value (contains name, number, classNumber)
     * @return void
     */
    public function addStudent(array $value): void
    {
        $this->students[] = new Student($value['name'], $value['number'], $value['classNumber']);
    }

    /**
     * @return int
     */
    public function getTotalStudents(): int
    {
        return count($this->students);
    }
}
