<?php

namespace OOP\Kata6;

class Person
{
    protected string $name;
    protected int $age;
    protected string $occupation;

    public function __construct($name, $age, $occupation)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setOccupation($occupation);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getOccupation(): string
    {
        return $this->occupation;
    }

    public function setName($name): void
    {
        if (!is_string($name)) {
            throw new \InvalidArgumentException('Name must be a string!');
        }

       $this->name = $name;
    }

    public function setAge($age): void
    {
        if (!is_int($age) || $age < 0) {
            throw new \InvalidArgumentException('Age must be a non-negative integer!');
        }

        $this->age = $age;
    }

    public function setOccupation($occupation): void
    {
        if (!is_string($occupation)) {
            throw new \InvalidArgumentException('Occupation must be a string!');
        }

        $this->occupation = $occupation;
    }
}
