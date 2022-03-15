<?php
echo "input number: ";
$num = (int)trim(fgets(STDIN));  

if($num > 0 && $num <= 9){
       echo $num . " is a single figure.";
}else{
       echo $num . " is not a single figure.";
}

