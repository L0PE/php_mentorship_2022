<?php

namespace Patterns\Visitor\Reports;

use Patterns\Visitor\Entities\Company;
use Patterns\Visitor\Entities\Employee;

class AverageSalary implements VisitorInterface
{
    public function visitCompany(Company $company): float
    {
        $totalsSalary = 0;

        /** @var Employee $employee */
        foreach ($company->getEmployees() as $employee) {
            $totalsSalary += $employee->getSalary();
        }

        return $totalsSalary / count($company->getEmployees());
    }
}
