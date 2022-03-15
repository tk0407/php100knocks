<?php
echo "input number: ";
$num = (int)trim(fgets(STDIN));  

if($num%2 == 0){
       echo $num . " is even.";
}
if($num%2 != 0){
       echo $num . " is odd.";
}

