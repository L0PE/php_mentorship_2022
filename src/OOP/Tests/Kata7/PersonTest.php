<?php

namespace OOP\Tests\Kata7;

use \PHPUnit\Framework\TestCase;
use OOP\Kata7\Person;

class PersonTest extends TestCase
{
    private const NAME = 'name';
    private const AGE = 20;
    private const OCCUPATION = 'occupation';

    private Person $person;

    protected function setUp(): void
    {
        parent::setUp();

        $this->person = new Person(static::NAME, static::AGE, static::OCCUPATION);
    }

    public function test_greetExtraterrestrials_return_expected_string()
    {
        $this->assertSame('Welcome to Planet Earth kid!', $this->person->greetExtraterrestrials('kid'));
    }

    public function test_introduce_return_expected_string()
    {
        $this->assertSame('Hello, my name is ' . self::NAME, $this->person->introduce());
    }

    public function test_describeJob_return_expected_string()
    {
        $this->assertSame(
            'I am currently working as a(n) '.self::OCCUPATION,
            $this->person->describeJob()
        );
    }
}
