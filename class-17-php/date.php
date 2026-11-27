<?php
date("Y-m-d");                 // 2025-01-15
date("d/m/Y H:i:s");           // 15/01/2025 14:30:00
time();                        // current Unix timestamp
date("Y", time());             // year from a timestamp
strtotime("next Monday");      // timestamp of next Monday
strtotime("+1 week");          // timestamp one week from now
mktime(0,0,0,1,1,2025);        // timestamp for Jan 1 2025
checkdate(2,29,2024);          // true (leap year)

$d = new DateTime("2025-01-15");
$d->format("l, F j, Y");       // "Wednesday, January 15, 2025"
$d->modify("+1 month");
$d->diff(new DateTime("2025-12-25"))->days; // days difference

?>
<!-- Useful format chars: Y year, m month, d day, H 24-hr, i minutes, s seconds, l weekday name, D short weekday. -->