<?php

namespace Patterns\Visitor\Reports;

use Patterns\Visitor\Entities\Company;

class TotalNumbersOfEmployees implements VisitorInterface
{
    public function visitCompany(Company $company): int
    {
        return count($company->getEmployees());
    }
}
