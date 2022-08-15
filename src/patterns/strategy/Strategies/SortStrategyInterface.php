<?php

namespace Patterns\Strategy\Strategies;

interface SortStrategyInterface
{
    public function sort(array $employees, bool $ascending): array;
}
