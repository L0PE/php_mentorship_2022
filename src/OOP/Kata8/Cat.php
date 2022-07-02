<?php

namespace OOP\Kata8;

class Cat implements CanClimb
{
    public function climb(): string
    {
        return 'Look, I\'m climbing a tree';
    }

    public function meow(): string
    {
        return 'Meow meow';
    }

    public function play(string $name): string
    {
        return sprintf('Hey %s, let\'s play!', $name);
    }
}
