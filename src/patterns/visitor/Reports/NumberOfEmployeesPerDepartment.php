<?php

namespace Patterns\Visitor\Reports;

use Patterns\Visitor\Entities\Company;
use Patterns\Visitor\Entities\Employee;

class NumberOfEmployeesPerDepartment implements VisitorInterface
{
    public function visitCompany(Company $company): array
    {
        $employeesPerDepartment = [];

        /** @var Employee $employee */
        foreach ($company->getEmployees() as $employee) {
            if (array_key_exists($employee->getDepartment(), $employeesPerDepartment)) {
                $employeesPerDepartment[$employee->getDepartment()]++;
                continue;
            }

            $employeesPerDepartment[$employee->getDepartment()] = 1;
        }

        return $employeesPerDepartment;
    }
}
