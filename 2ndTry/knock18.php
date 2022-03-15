<?php
echo "input number:";
$input = (int)trim(fgets(STDIN));  

$num = [0,1,2,3,4,5,6,7,8,9];

foreach($num as $val){
    echo $input . "\n";
}