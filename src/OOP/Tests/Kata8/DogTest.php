<?php

namespace OOP\Tests\Kata8;

use OOP\Kata8\Dog;
use \PHPUnit\Framework\TestCase;

class DogTest extends TestCase
{
    private Dog $dog;

    protected function setUp(): void
    {
        parent::setUp();

        $this->dog = new Dog();
    }

    public function test_swim_return_expected_string()
    {
        $this->assertSame('I\'m swimming, woof woof', $this->dog->swim());
    }

    public function test_greet_return_expected_string()
    {
        $this->assertSame('Hello kid, welcome to my home', $this->dog->greet('kid'));
    }

    public function test_bark_return_expected_string()
    {
        $this->assertSame('Woof woof', $this->dog->bark());
    }
}
