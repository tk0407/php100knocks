<?php
echo "input 1st number:";
$first = trim(fgets(STDIN));  
echo "input 2nd number:";
$second = trim(fgets(STDIN));  

echo "和: " . ($first + $second) . "\n";
echo "差: " . ($first - $second) . "\n";
echo "積: " . ($first * $second) . "\n";
echo "商: " . floor($first / $second) . ", 余り: " . ($first % $second);
