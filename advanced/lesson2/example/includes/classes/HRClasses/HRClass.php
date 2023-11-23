<?php namespace Demo\HRClasses;

interface HRClass
{
    /**
     * @return array
     */
    public function getStudents(): array;

    /**
     * @param array $studentRaw
     * @return void
     */
    public function addStudent(array $studentRaw): void;
}