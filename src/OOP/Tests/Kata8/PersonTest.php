<?php

namespace OOP\Tests\Kata8;

use \PHPUnit\Framework\TestCase;
use OOP\Kata8\Person;

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

    public function test_greet_return_expected_string()
    {
        $this->assertSame('Hello kid, how are you?', $this->person->greet('kid'));
    }

    public function test_introduce_return_expected_string()
    {
        $this->assertSame(
            sprintf('Hello, my name is %s, I am %d years old and I am currently working as a(n) %s',
                static::NAME,
                static::AGE,
                static::OCCUPATION
            ),
            $this->person->introduce());
    }

    public function test_speak_return_expected_string()
    {
        $this->assertSame(
            'What am I supposed to say again?',
            $this->person->speak()
        );
    }
}
