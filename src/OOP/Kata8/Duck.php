<?php

namespace OOP\Kata8;

class Duck extends Bird implements CanFly, CanSwim
{
    public function chirp(): string
    {
        return 'Quack quack';
    }

    public function swim(): string
    {
        return 'Splash! I\'m swimming';
    }
}
