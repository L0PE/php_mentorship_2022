<?php

namespace OOP\Tests\Kata9;

use OOP\Kata9\ComputerProgrammer;
use \PHPUnit\Framework\TestCase;

class ComputerProgrammerTest extends TestCase
{
    private const NAME = 'name';
    private const AGE = 20;
    private const OCCUPATION = 'Programmer';

    private ComputerProgrammer $person;

    protected function setUp(): void
    {
        parent::setUp();

        $this->person = new ComputerProgrammer(static::NAME, static::AGE, static::OCCUPATION);
    }

    public function test_greet_return_expected_string()
    {
        $this->assertSame(
            sprintf('Hello %s, I\'m %s, nice to meet you', 'kid', self::NAME),
            $this->person->greet('kid'));
    }

    public function test_introduce_return_expected_string()
    {
        $this->assertSame(
            sprintf('Hello, my name is %s and I am %s', self::NAME, self::OCCUPATION),
            $this->person->introduce());
    }

    public function test_advertise_return_expected_string()
    {
        $this->assertSame(
            'Don\'t forget to check out my coding projects',
            $this->person->advertise()
        );
    }
}
