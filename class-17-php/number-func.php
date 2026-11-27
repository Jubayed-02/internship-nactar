<?php
abs(-5);             // 5
ceil(4.1);           // 5
floor(4.9);          // 4
round(4.567, 2);     // 4.57
number_format(1234.5, 2); // "1,234.50"
max(1,5,3);          // 5
min(1,5,3);          // 1
pow(2,3);            // 8
sqrt(16);            // 4
rand(1,10);          // random int
mt_rand(1,10);       // faster random int
intdiv(10,3);        // 3 (integer division)
is_numeric("123");   // true
is_int(5);           // true
is_float(3.14);      // true
intval("42");        // 42
floatval("3.14");    // 3.14
?>