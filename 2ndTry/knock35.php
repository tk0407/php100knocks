<?php
echo "input number: ";
$num = (int)trim(fgets(STDIN));  

(int)$array = [3, 7, 0, 8, 4, 1, 9, 6, 5, 2];

foreach($array as $key => $value){
       if($num == $key){
           echo "array[" . $key . "] = " . $value;
       } 
}