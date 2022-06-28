<?php

namespace OOP\Tests\Kata7;

use OOP\Kata7\ComputerProgrammer;
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

    public function test_greetExtraterrestrials_return_expected_string()
    {
        $this->assertSame('Welcome to Planet Earth kid!', $this->person->greetExtraterrestrials('kid'));
    }

    public function test_introduce_return_expected_string()
    {
        $this->assertSame(
            sprintf('Hello, my name is %s and I am %s', self::NAME, self::OCCUPATION),
            $this->person->introduce());
    }

    public function test_describeJob_return_expected_string()
    {
        $this->assertSame(
            'I am currently working as a(n) ' . self::OCCUPATION,
            $this->person->describeJob()
        );
    }
}
