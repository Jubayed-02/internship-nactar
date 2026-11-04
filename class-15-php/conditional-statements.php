<?php
$num = -11;
if ($num % 2 == 0) {
    echo "Even number <br>";
} else {
    echo "Odd number <br>";
}
$num1 = 9;
$num2 = 90;
$result;
if ($num1 > $num2) {
    $result = $num1 . " is greater";
} elseif ($num2 > $num1) {
    $result = $num2 . " is greater";
} else {
    $result = "both are equal values";
}
echo "$result <br>";


$age = 18;
if ($age < 0 or $age > 150) {
    echo "Man you don't exist";
} elseif ($age < 5) {
    echo "Child";
} elseif ($age < 12) {
    echo "Teenager";
} elseif ($age >= 18 and $age < 40) {
    echo "Adult";
} else {
    echo "You are an old man";
}
?>