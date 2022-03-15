<?php
echo "input number: ";
$num = (int)trim(fgets(STDIN));  

for($i=1; $i<=9; $i++){
    if($i==$num){
        continue;
    }
    echo $i . "\n";    
}

