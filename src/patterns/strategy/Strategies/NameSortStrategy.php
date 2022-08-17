<?php

namespace Patterns\Strategy\Strategies;

class NameSortStrategy implements SortStrategyInterface
{
    public function sort(array $employees, bool $ascending): array
    {
        $names = array_column($employees, 'name');
        $sort_order = $ascending ? SORT_ASC : SORT_DESC;

        array_multisort($names, $sort_order, $employees);

        return $employees;
    }
}
