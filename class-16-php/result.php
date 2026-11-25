<?php

$bangla = 0;
$english = 9;
$math = 10;
$grade;
$avg = ($bangla + $english + $math) / 3;
switch (true) {
    case $avg < 0 or $avg > 100:
        $grade = "Invalid average mark";
        break;
    case $avg >= 80:
        $grade = "A+";
        break;
    case $avg >= 70:
        $grade = "A";
        break;
    case $avg >= 60:
        $grade = "A-";
        break;
    case $avg >= 50:
        $grade = "B";
        break;
    case $avg >= 33:
        $grade = "C";
        break;
    default:
        $grade = "F";
}
echo "Your letter grade: $grade <br> Your average marks: $avg";
?>