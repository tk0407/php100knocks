<?php
echo "input 1st value: ";
$num1 = (int)trim(fgets(STDIN));  
echo "input 2nd value: ";
$num2 = (int)trim(fgets(STDIN));  

$div = floor($num1/$num2); 
echo "result " . $div . "\n";
echo "result " . $div*$num2 . "\n";




