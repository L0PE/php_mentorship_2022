<?php

namespace Patterns\Visitor\Entities;

class Employee
{
    public function __construct(
        private string $name,
        private string $salary,
        private string $department
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

    public function getSalary(): string
    {
        return $this->salary;
    }

    public function setSalary(string $salary): void
    {
        $this->salary = $salary;
    }

    public function getDepartment(): string
    {
        return $this->department;
    }

    public function setDepartment(string $department): void
    {
        $this->department = $department;
    }
}
