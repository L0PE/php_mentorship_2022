<?php

use Patterns\Strategy\Collection\EmployeeCollection;
use Patterns\Strategy\Strategies\DepartmentSortStrategy;
use Patterns\Strategy\Strategies\NameSortStrategy;
use Patterns\Strategy\Strategies\SalarySortStrategy;

require '../../vendor/autoload.php';

$employees = [
    ['name' => 'Lew Yashaev', 'salary' => 1569, 'department' => 'Training'],
    ['name' => 'Melony Burgh', 'salary' => 3337, 'department' => 'Training'],
    ['name' => 'Prinz Lapenna', 'salary' => 1461, 'department' => 'Product Management'],
    ['name' => 'Matthiew Limeburn', 'salary' => 3986, 'department' => 'Business Development'],
    ['name' => 'Molli Cowins', 'salary' => 658, 'department' => 'Marketing'],
    ['name' => 'Glory Coumbe', 'salary' => 3986, 'department' => 'Sales'],
    ['name' => 'Mirabel Prine', 'salary' => 1585, 'department' => 'Business Development'],
    ['name' => 'Rakel Eberlein', 'salary' => 1591, 'department' => 'Services'],
    ['name' => 'Jareb Scholard', 'salary' => 2986, 'department' => 'Engineering'],
    ['name' => 'Rebeca Leming', 'salary' => 930, 'department' => 'Marketing'],
];

$employeeCollection = new EmployeeCollection($employees);

$nameSortStrategy = new NameSortStrategy();
$salarySortStrategy = new SalarySortStrategy();
$departmentSortStrategy = new DepartmentSortStrategy();

echo '<pre>';

$employeeCollection->sort($nameSortStrategy, true);
print_r($employeeCollection->getEmployees());

echo '<br><hr><br>';

$employeeCollection->sort($salarySortStrategy, false);
print_r($employeeCollection->getEmployees());

echo '<br><hr><br>';

$employeeCollection->sort($departmentSortStrategy, true);
print_r($employeeCollection->getEmployees());
