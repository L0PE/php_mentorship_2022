<?php

namespace OOP\Tests\Kata8;

use OOP\Kata8\Bird;
use \PHPUnit\Framework\TestCase;

class BirdTest extends TestCase
{
    private const NAME = 'bird';

    private Bird $bird;

    protected function setUp(): void
    {
        parent::setUp();

        $this->bird = new Bird(static::NAME);
    }

    public function test_chirp_return_expected_string()
    {
        $this->assertSame('Chirp chirp', $this->bird->chirp());
    }

    public function test_fly_return_expected_string()
    {
        $this->assertSame('I am flying', $this->bird->fly());
    }
}
