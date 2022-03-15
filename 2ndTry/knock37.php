<?php
echo "input index: ";
$index = (int)trim(fgets(STDIN));  


(int)$array = [3, 7, 0, 8, 4, 1, 9, 6, 5, 2];

foreach($array as $key => $value){
       if($index == $key){
           $index2 = $value;
       } 
}
foreach($array as $key => $value){
       if($index2 == $key){
           echo "value = " . $value;
       } 
}