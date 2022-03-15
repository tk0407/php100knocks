<?php
echo "input number:";
$num = (int)trim(fgets(STDIN));  

for($i=0; $i<=$num; $i++){
    echo $i . "\n";
}