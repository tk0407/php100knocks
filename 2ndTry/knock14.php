<?php
echo "input number:";
$num = (int)trim(fgets(STDIN));  

for($i=$num; $i>=0; $i--){
    echo $i . "\n";
}