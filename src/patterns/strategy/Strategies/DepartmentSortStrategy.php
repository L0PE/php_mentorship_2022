<?php

namespace Patterns\Strategy\Strategies;

class DepartmentSortStrategy implements SortStrategyInterface
{
    public function sort(array $employees, bool $ascending): array
    {
        $departments = array_column($employees, 'department');
        $sort_order = $ascending ? SORT_ASC : SORT_DESC;

        array_multisort($departments, $sort_order, $employees);

        return $employees;
    }
}
