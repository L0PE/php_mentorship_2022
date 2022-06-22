<?php

function rotateLeft(int $d, array $arr): array
{
    return array_merge(array_slice($arr, $d), array_slice($arr, 0, $d));
}

$arr = [1, 2, 3, 4, 5];
$d = 4;

echo 'Array:' . PHP_EOL;
echo implode(' ', $arr) . PHP_EOL;
echo 'Array after rotation:' . PHP_EOL;
echo implode(' ', rotateLeft($d, $arr));
