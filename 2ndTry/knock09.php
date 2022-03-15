<?php
echo "input number:";
$num = (int)trim(fgets(STDIN));  

if($num > 0){
    echo "positive";
}
if($num < 0){
    echo "negative";
}
if($num === 0){
    echo "zero";
}