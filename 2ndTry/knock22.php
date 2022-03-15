<?php
echo "input number: ";
$num = (int)trim(fgets(STDIN));  

if($num <= -10 || $num >= 10){
    echo "OK" . "\n";
}