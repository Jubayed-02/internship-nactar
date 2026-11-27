<?php
$str = "Hello World";

strlen($str);              // 11 - string length
strtoupper($str);          // "HELLO WORLD"
strtolower($str);          // "hello world"
ucfirst($str);             // "Hello world"
ucwords($str);             // "Hello World"
trim("  hi  ");            // "hi" - removes whitespace
ltrim("  hi");             // "hi" - left trim
rtrim("hi  ");             // "hi" - right trim
str_replace("World","PHP",$str); // "Hello PHP"
strpos($str, "World");     // 6 - position of substring
str_contains($str, "World"); // true (PHP 8+)
substr($str, 0, 5);        // "Hello"
substr($str, -5);          // "World"
str_repeat("ab", 3);       // "ababab"
str_split($str, 3);        // ["Hel","lo ","Wor","ld"]
implode(",", ["a","b","c"]); // "a,b,c"
explode(" ", $str);        // ["Hello","World"]
sprintf("%s is %d", "Age", 25); // "Age is 25"
number_format(1234567.891, 2); // "1,234,567.89"
?>