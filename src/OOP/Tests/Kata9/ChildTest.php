<?php

namespace OOP\Tests\Kata7;

use OOP\Kata9\Child;
use \PHPUnit\Framework\TestCase;


class ChildTest extends TestCase
{
    private const NAME = 'name';
    private const AGE = 20;
    private const OCCUPATION = 'occupation';
    private const ASPIRATIONS = ['teacher', 'lawyer', 'doctor', 'police officer'];

    private Child $child;

    protected function setUp(): void
    {
        parent::setUp();

        $this->child = new Child(self::NAME, self::AGE, self::OCCUPATION, self::ASPIRATIONS);
    }

    public function test_introduce_return_expected_string()
    {
        $this->assertSame(
            sprintf('Hi, I\'m %s and I am %d years old',  self::NAME, self::AGE), $this->child->introduce());
    }

    public function test_greet_return_expected_string()
    {
        $this->assertSame('Hi kid, let\'s play!', $this->child->greet('kid'));
    }

    public function test_sayDreams_return_expected_string()
    {
        $this->assertSame(
            'I would like to be a(n) teacher, lawyer, doctor or police officer when I grow up.',
            $this->child->sayDreams()
        );
    }
}