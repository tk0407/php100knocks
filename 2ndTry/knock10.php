<?php
echo "input number:";
$num = (int)trim(fgets(STDIN));  
$num = abs($num);

echo "absolute value is " . $num;