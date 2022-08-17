<?php

namespace Patterns\Visitor\Entities;

use Patterns\Visitor\Reports\VisitorInterface;

class Company implements EntityInterface
{
    public function __construct(
        private string $name,
        private array $employees = [],
    )
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmployees(): array
    {
        return $this->employees;
    }

    public function addEmployee(Employee $employee): void
    {
        $this->employees[] = $employee;
    }


    public function visit(VisitorInterface $visitor)
    {
        return $visitor->visitCompany($this);
    }
}
