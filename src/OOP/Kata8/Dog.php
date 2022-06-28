<?php

namespace OOP\Kata8;

class Dog implements CanSwim, CanGreet
{

    public function swim(): string
    {
        return 'I\'m swimming, woof woof';
    }

    public function greet($name): string
    {
        return sprintf('Hello %s, welcome to my home', $name);
    }

    public function bark(): string
    {
        return 'Woof woof';
    }
}
