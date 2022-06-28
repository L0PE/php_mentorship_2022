<?php

namespace OOP\Tests\Kata8;

use OOP\Kata8\Cat;
use \PHPUnit\Framework\TestCase;

class CatTest extends TestCase
{
    private Cat $cat;

    protected function setUp(): void
    {
        parent::setUp();

        $this->cat = new Cat();
    }

    public function test_climb_return_expected_string()
    {
        $this->assertSame('Look, I\'m climbing a tree', $this->cat->climb());
    }

    public function test_meow_return_expected_string()
    {
        $this->assertSame('Meow meow', $this->cat->meow());
    }

    public function test_play_return_expected_string()
    {
        $this->assertSame('Hey kid, let\'s play!', $this->cat->play('kid'));
    }
}
