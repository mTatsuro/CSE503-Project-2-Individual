<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$operation = $_GET['operation'];
$sum = $num1 + $num2;

echo "Hello";
echo "<br>";
switch ($operation) {
  case 'add':
    $sum = $num1 + $num2;
    echo "$num1 + $num2 = $sum";
    break;
  case 'subtract':
    $dif = $num1 - $num2;
    echo "$num1 - $num2 = $dif";
    break;
  case 'multiply':
    $prd = $num1 * $num2;
    echo "$num1 * $num2 = $prd";
    break;
  case 'divide';
    $div = $num1 / $num2;
    echo "$num1 / $num2 = $div";
    break;
  default:
    echo "You must choose an operation type";
    break;
}
?>
