<?php

namespace OOP\Kata7;

class ComputerProgrammer extends Person
{
    public function introduce(): string
    {
        return sprintf('Hello, my name is %s and I am %s', $this->name, $this->occupation);
    }
}
