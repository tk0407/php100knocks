<?php
echo "input number:";
$num = (int)trim(fgets(STDIN));  

if($num === 0){
    echo "zero";
}

if($num !== 0){
    echo "not zero";
}
