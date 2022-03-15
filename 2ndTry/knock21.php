<?php
echo "input number: ";
$num = (int)trim(fgets(STDIN));  

if($num > 5 && $num < 20){
    echo "OK" . "\n";
}