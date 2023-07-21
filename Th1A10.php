<?php
function convert_int_array_to_char_array($int_array) {
    return array_map('chr', $int_array);
}


$arrs1 = array('1', 'b', 'c', 'd');
$result1 = convert_int_array_to_char_array(array_map('ord', $arrs1));
echo "Mảng 1:" . "<br>";
var_dump($result1); 

echo "<br>" . "Mảng 2:" . "<br>";
$arrs2 = array('a', 0, null, false);
$result2 = convert_int_array_to_char_array(array_map('ord', $arrs2));
var_dump($result2); 
?>