<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$colors = ['Anh', 'Sơn', 'Thắng', 'tôi'];
$result = '';
for ($i = 0; $i < count($arrs); $i++){
    if($i == count($arrs) - 1){
        $result .= "còn màu yêu thích của tôi là màu ". $arrs[$i];
    } else {
        $result .= "Màu " . $arrs[$i] . "là màu yêu thích của ". $color[$i] . ".";
    }
}
echo $result;
?>