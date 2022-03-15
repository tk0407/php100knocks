<?php
echo "input number: ";
$num = (int)trim(fgets(STDIN));  
$sum = 0;

for($i=0; $i<=$num; $i++){
    $sum += $i;
}
if($sum <= 0){
    echo "sum = 0";
}else{
    echo "sum = " . $sum;
}