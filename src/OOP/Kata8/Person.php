<?php

namespace OOP\Kata8;

class Person implements CanGreet, CanIntroduce
{
    public function __construct(
        public string $name,
        public int    $age,
        public string $occupation)
    {
    }

    public function greet($name): string
    {
        return sprintf('Hello %s, how are you?', $name);
    }

    public function speak(): string
    {
        return 'What am I supposed to say again?';
    }

    public function introduce(): string
    {
        return sprintf('Hello, my name is %s, I am %d years old and I am currently working as a(n) %s',
            $this->name,
            $this->age,
            $this->occupation
        );
    }
}
