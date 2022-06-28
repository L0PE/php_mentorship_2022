<?php

namespace OOP\Tests\Kata6;

use \PHPUnit\Framework\TestCase;
use OOP\Kata6\Person;

class PersonTest extends TestCase
{
    private const NAME = 'name';
    private const AGE = 20;
    private const OCCUPATION = 'occupation';

    private Person $person;

    protected function setUp(): void
    {
        parent::setUp();

        $this->person = new Person(self::NAME, self::AGE, self::OCCUPATION);
    }

    public function test_create_person()
    {
        $this->assertSame(self::NAME, $this->person->getName());
        $this->assertSame(self::AGE, $this->person->getAge());
        $this->assertSame(self::OCCUPATION, $this->person->getOccupation());
    }

    /** @dataProvider names_and_occupation_data_provider  */
    public function test_set_name_with_invalid_argument_trow_error($name)
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Name must be a string!');

        $this->person->setName($name);
    }

    /** @dataProvider age_data_provider*/
    public function test_set_age_with_invalid_argument_trow_error($age)
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Age must be a non-negative integer!');

        $this->person->setAge($age);
    }

    /** @dataProvider names_and_occupation_data_provider*/
    public function test_set_occupation_with_invalid_argument_trow_error($occupation)
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Occupation must be a string!');

        $this->person->setOccupation($occupation);
    }

    public function names_and_occupation_data_provider(): array
    {
        return [
            [[]],
            [false],
            [10],
        ];
    }

    public function age_data_provider(): array
    {
        return [
            [[]],
            [false],
            [-10],
            ['10'],
            ['string']
        ];
    }
}