<?php
for($i=0; $i<=4; $i++){
    echo "input number:";
    $num[] = (int)trim(fgets(STDIN));  
}

foreach($num as $val){
    echo $val . "\n";
}