<?php
function convert_int_arr_to_char_arr($int_arr) {
    $char_arr = array();
    foreach ($int_arr as $int) {
      if (is_int($int)) {
        $char_arr[] = chr($int);
      } else {
        
        $char_arr[] = '';
      }
    }
    return $char_arr;
  }

  echo "Mảng 1:" . "<br>";
  $arrs = array('1', 'b', 'c', 'd');
  $char_arrs = convert_int_arr_to_char_arr($arrs);
  print_r($char_arrs); 
  
  echo "<br>" . "Mảng 2:" . "<br>";
  $arrs = array('a', 0, null, false);
  $char_arrs = convert_int_arr_to_char_arr($arrs);
  print_r($char_arrs); 
?>