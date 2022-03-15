<?php
echo "input a: ";
$a = (int)trim(fgets(STDIN));  
echo "input b: ";
$b = (int)trim(fgets(STDIN));  

$temp = $a;
$a = $b;
$b = $temp;

echo "a = " . $a . ", ";
echo "b = " . $b;

// list関数の場合
// echo "input a: ";
// $a = (int)trim(fgets(STDIN));  
// echo "input b: ";
// $b = (int)trim(fgets(STDIN));  

// list($a, $b) = array($b, $a);

// echo "a = " . $a . ", ";
// echo "b = " . $b;
