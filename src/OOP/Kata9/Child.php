<?php

namespace OOP\Kata9;

class Child extends Person
{

    public function __construct(
        $name,
        $age,
        $occupation,
        public array $aspirations
    )
    {
        parent::__construct($name, $age, $occupation);
    }

    public function introduce(): string
    {
        return sprintf('Hi, I\'m %s and I am %d years old', $this->name, $this->age);
    }

    public function greet($name): string
    {
        return sprintf('Hi %s, let\'s play!', $name);
    }

    public function sayDreams(): string
    {
        return sprintf('I would like to be a(n) %s when I grow up.', $this->sayList());
    }

    private function sayList(): string
    {
        $aspirations = $this->aspirations;
        $lastProfession = array_pop($aspirations);

        return sprintf('%s or %s', implode(', ' ,$aspirations), $lastProfession);
    }
}
