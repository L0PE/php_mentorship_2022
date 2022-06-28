<?php

namespace OOP\Kata7;

class Person
{
    public function __construct(
        protected string $name,
        protected int    $age,
        protected string $occupation)
    {
    }

    final public static function greetExtraterrestrials(string $species): string
    {
        return sprintf('Welcome to Planet Earth %s!', $species);
    }

    public function introduce(): string
    {
        return 'Hello, my name is '.$this->name;
    }

    final public function describeJob(): string
    {
        return 'I am currently working as a(n) '.$this->occupation;
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

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setAge(int $age): void
    {
        if ($age < 0) {
            throw new \InvalidArgumentException('Age must be a non-negative integer!');
        }

        $this->age = $age;
    }

    public function setOccupation(string $occupation): void
    {
        $this->occupation = $occupation;
    }
}
