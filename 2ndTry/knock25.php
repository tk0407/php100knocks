<?php
echo "input number: ";
$num = (int)trim(fgets(STDIN));  

if($num < -10){
    echo "range 1" . "\n";
}
if($num >= -10 && $num < 0){
    echo "range 2" . "\n";
}
if($num >= 0){
    echo "range 3" . "\n";
}