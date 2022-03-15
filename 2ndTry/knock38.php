<?php
$index = 0; 
(int)$array = [3, 7, 0, 8, 4, 1, 9, 6, 5, 2];

for($i=0; $i<=9; $i++){
       if($i == 0){
       echo $array[0] . "\n";
       $index = $array[0];
       continue;
       } 
       echo $array[$index] . "\n";
       $index = $array[$index];
}