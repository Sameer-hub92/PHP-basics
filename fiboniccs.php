<?php
$n = 10; 
$first = 0;
$second = 1;

echo "Fibonacci Series: ";
for ($i = 0; $i < $n; $i++) {
    echo $first . ", "."";
    $next = $first + $second;
    $first = $second;
    $second = $next;
}
?>
