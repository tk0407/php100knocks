<?php
echo "input year: ";
$year = (int)trim(fgets(STDIN)); 


if($year%4 == 0 && $year%100 != 0 || $year%400 == 0){
    echo $year . "年は閏年である";
}else{
    echo $year . "年は閏年でない";
}
