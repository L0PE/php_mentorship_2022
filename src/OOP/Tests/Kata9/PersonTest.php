<?php

namespace OOP\Tests\Kata9;

use \PHPUnit\Framework\TestCase;
use OOP\Kata9\Person;

class PersonTest extends TestCase
{
    private const NAME = 'name';
    private const AGE = 20;
    private const OCCUPATION = 'occupation';

    public function test_greed_method()
    {
        $person = new class (static::NAME, static::AGE, static::OCCUPATION) extends Person {
            public function introduce()
            {
               return;
            }
        };

        $this->assertSame('Hello kid', $person->greet('kid'));
    }
}