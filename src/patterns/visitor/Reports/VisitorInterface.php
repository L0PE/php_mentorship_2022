<?php

namespace Patterns\Visitor\Reports;

use Patterns\Visitor\Entities\Company;

interface VisitorInterface
{
    public function visitCompany(Company $company);
}
