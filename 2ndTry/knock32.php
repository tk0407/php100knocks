<?php
for($i=1; $i<=20; $i++){
    if($i%5==0){
        echo "bar\n";
        continue;
    }
    echo $i . "\n";    
}

