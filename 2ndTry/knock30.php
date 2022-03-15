<?php
echo "input number: ";
$num = (int)trim(fgets(STDIN));  
for($i=1; $i<=$num; $i++){
    echo "*";    
}
echo "\n";
