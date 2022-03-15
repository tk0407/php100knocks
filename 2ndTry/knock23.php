<?php
echo "input number: ";
$num = (int)trim(fgets(STDIN));  

if($num >= -5 && $num < 10){
    echo "OK" . "\n";
}else{
    echo "NG" . "\n";
}