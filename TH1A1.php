<?php
function array_math($arr) {
  $sum = array_sum($arr);
  $diff = $arr[0];
  $prod = 1;
  $quot = $arr[0];

  for ($i = 1; $i < count($arr); $i++) {
    $diff -= $arr[$i];
    $prod *= $arr[$i];
    $quot /= $arr[$i];
  }

  return array($sum, $diff, $prod, $quot);
}

$array = array(2, 5, 6, 9, 2, 5, 6, 12, 5);
list($sum, $diff, $prod, $quot) = array_math($array);
?>

<!DOCTYPE html>
<html>
<head>
  <title>TÍNH TOÁN MẢNG SỐ NGUYÊN</title>
</head>
<body>
  <h1>Tính toán mảng số nguyên</h1>
  <table>
    <tr>
      <th>Phép tính</th>
      <th>Kết quả</th>
    </tr>
    <tr>
      <td>Tổng</td>
      <td><?php echo $sum; ?></td>
    </tr>
    <tr>
      <td>Hiệu</td>
      <td><?php echo $diff; ?></td>
    </tr>
    <tr>
      <td>Tích</td>
      <td><?php echo $prod; ?></td>
    </tr>
    <tr>
      <td>Thương</td>
      <td><?php echo $quot; ?></td>
    </tr>
  </table>
</body>
</html>