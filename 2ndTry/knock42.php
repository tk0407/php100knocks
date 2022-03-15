<?php
echo "input number 1: ";
$num1 = (int)trim(fgets(STDIN));  
echo "input number 2: ";
$num2 = (int)trim(fgets(STDIN));  
echo "input number 3: ";
$num3 = (int)trim(fgets(STDIN));  

if($num1 <= $num2 && $num2 <= $num3){
       echo "OK";
}else{
       echo "NG";
}

