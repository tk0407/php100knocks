<?php
echo "input index1: ";
$num1 = (int)trim(fgets(STDIN));  
echo "input index2: ";
$num2 = (int)trim(fgets(STDIN));  
$index1 = 0;
$index2 = 0;
(int)$array = [3, 7, 0, 8, 4, 1, 9, 6, 5, 2];

foreach($array as $key => $value){
       if($num1 == $key){
           $index1 = $value;
       } 
       if($num2 == $key){
           $index2 = $value;
       } 
}
$ans = $index1 * $index2;
echo $index1 . " * " . $index2 . " = " . $ans;