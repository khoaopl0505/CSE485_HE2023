<?php
$array1 = [[77, 87], [23, 45]];
$array2 = ['value 1', 'value 2'];

$result = [];

foreach ($array1 as $key => $value) {
    $merged = array_merge([$array2[$key]], $value);
    $result[] = $merged;
}

print_r($result);