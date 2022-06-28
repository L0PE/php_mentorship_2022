<?php

namespace OOP\Kata9;

class ComputerProgrammer extends Person
{
    public function introduce(): string
    {
        return sprintf('Hello, my name is %s and I am %s', $this->name, $this->occupation);
    }

    public function greet($name): string
    {
        return sprintf('Hello %s, I\'m %s, nice to meet you', $name, $this->name);
    }

    public function advertise(): string
    {
        return 'Don\'t forget to check out my coding projects';
    }
}
