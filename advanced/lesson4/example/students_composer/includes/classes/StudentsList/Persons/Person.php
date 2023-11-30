<?php namespace StudentsList\Persons;

/**
 * Class Person
 */
class Person
{
    public string $name;
    protected string $birthDate = '1986-05-10';

    /**
     * @return string
     */
    public function getBirthDateString(): string
    {
        return date('l d F Y', strtotime($this->birthDate));
    }
}
