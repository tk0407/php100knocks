<?php

$total = 0;
for($i=0; $i<=4; $i++){
    echo "input number: ";
    $num = (int)trim(fgets(STDIN));  
    $total = $total + $num;
}

echo "sum = " . $total;