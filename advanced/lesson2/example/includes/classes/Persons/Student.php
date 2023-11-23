<?php namespace Demo\Persons;

/**
 * Class Student
 */
class Student extends Person
{
    /**
     * Student constructor.
     *
     * @param string $name
     * @param string $number
     * @param string $classNumber
     */
    public function __construct(
        string $name,
        public string $number,
        public string $classNumber
    ) {
        $this->name = $name;
    }
}
