<?php

use Patterns\Visitor\Entities\Company;
use Patterns\Visitor\Entities\Employee;
use Patterns\Visitor\Reports\TotalNumbersOfEmployees;
use Patterns\Visitor\Reports\TotalsSalary;
use Patterns\Visitor\Reports\AverageSalary;
use Patterns\Visitor\Reports\NumberOfEmployeesPerDepartment;

require '../../vendor/autoload.php';

$employees = [
    new Employee('Lew Yashaev', 1569, 'Training'),
    new Employee('Melony Burgh', 3337, 'Training'),
    new Employee('Prinz Lapenna', 1461, 'Product Management'),
    new Employee('Matthiew Limeburn', 3986, 'Business Development'),
    new Employee('Molli Cowins', 658, 'Marketing'),
    new Employee('Glory Coumbe', 3986, 'Sales'),
    new Employee('Mirabel Prine', 1585, 'Business Development'),
    new Employee('Rakel Eberlein', 1591, 'Services'),
    new Employee('Jareb Scholard', 2986, 'Engineering'),
    new Employee('Rebeca Leming', 930, 'Marketing'),
];

$company = new Company('Price, Gerlach and Koepp', $employees);

$totalSalaryReport = new TotalsSalary();
$totalNumberOfEmployeesReport = new TotalNumbersOfEmployees();
$averageSalaryReport = new AverageSalary();
$numberOfEmployeesPerDepartmentReport = new NumberOfEmployeesPerDepartment();

echo 'Totals Salary: ' . $totalSalaryReport->visitCompany($company);
echo '<br>';

echo 'Total Numbers Of Employees: ' . $totalNumberOfEmployeesReport->visitCompany($company);
echo '<br>';

echo 'Average Salary: ' . $averageSalaryReport->visitCompany($company);
echo '<br>';

echo 'Number Of Employees Per Department:<br><pre>';
print_r($numberOfEmployeesPerDepartmentReport->visitCompany($company));
