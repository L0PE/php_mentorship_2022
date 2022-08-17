<?php

namespace Patterns\Strategy\Strategies;

class SalarySortStrategy implements SortStrategyInterface
{
    public function sort(array $employees, bool $ascending): array
    {
        $salary = array_column($employees, 'salary');
        $sort_order = $ascending ? SORT_ASC : SORT_DESC;

        array_multisort($salary, $sort_order, $employees);

        return $employees;
    }
}
