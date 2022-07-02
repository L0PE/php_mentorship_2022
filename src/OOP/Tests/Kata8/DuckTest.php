<?php

namespace OOP\Tests\Kata8;

use OOP\Kata8\Duck;
use \PHPUnit\Framework\TestCase;

class DuckTest extends TestCase
{
    private const NAME = 'duck';

    private Duck $duck;

    protected function setUp(): void
    {
        parent::setUp();

        $this->duck = new Duck(static::NAME);
    }

    public function test_chirp_return_expected_string()
    {
        $this->assertSame('Quack quack', $this->duck->chirp());
    }

    public function test_swim_return_expected_string()
    {
        $this->assertSame('Splash! I\'m swimming', $this->duck->swim());
    }

    public function test_fly_return_expected_string()
    {
        $this->assertSame('I am flying', $this->duck->fly());
    }
}
