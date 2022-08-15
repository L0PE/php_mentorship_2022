<?php

namespace Patterns\Strategy\Collection;

use Patterns\Strategy\Strategies\SortStrategyInterface;

class EmployeeCollection
{
    public function __construct(private array $employees)
    {
    }

    public function getEmployees(): array
    {
        return $this->employees;
    }

    public function setEmployees(array $employees): void
    {
        $this->employees = $employees;
    }

    public function sort(SortStrategyInterface $sortStrategy, bool $ascending): void
    {
        $this->employees = $sortStrategy->sort($this->employees, $ascending);
    }
}
