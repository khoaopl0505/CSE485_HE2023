<?php

$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];


$first_element = reset($numbers);
$last_element = end($numbers);

echo "Phần tử đầu tiên: $first_element" . "<br>";
echo "Phần tử cuối cùng: $last_element" . "<br>";


$largest_number = max($numbers);
$smallest_number = min($numbers);
$total = array_sum($numbers);

echo "Số lớn nhất: $largest_number" . "<br>";
echo "Số nhỏ nhất: $smallest_number" . "<br>";
echo "Tổng các giá trị: $total" . "<br>";

echo "<br>" . "Sắp xếp mảng theo chiều tăng các giá trị:" . "<br>";
asort($numbers);
print_r($numbers);

echo "<br>" . "Sắp xếp mảng theo chiều giảm các giá trị:" . "<br>";
arsort($numbers);
print_r($numbers);

echo "<br>" . "Sắp xếp mảng theo chiều tăng các key:" . "<br>";
ksort($numbers);
print_r($numbers);

echo "<br>" . "Sắp xếp mảng theo chiều tăng các key:" . "<br>";
krsort($numbers);
print_r($numbers);