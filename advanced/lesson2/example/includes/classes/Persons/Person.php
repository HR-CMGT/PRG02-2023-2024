<?php namespace Demo\Persons;

class Person
{
    public string $name;
    private string $bsn;
    protected string $birthDate = '1986-05-10';

    public function getBirthDateString()
    {
        return date('l d F Y', strtotime($this->birthDate));
    }
}
