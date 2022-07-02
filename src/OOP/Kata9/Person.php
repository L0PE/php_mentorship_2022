<?php

namespace OOP\Kata9;

abstract class Person
{
    public function __construct(
        public string $name,
        public int    $age,
        public string $occupation)
    {
    }

    abstract public function introduce();

    public function greet($name): string
    {
        return 'Hello '.$name;
    }
}
