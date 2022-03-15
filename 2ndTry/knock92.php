<?php

// 1から50まで順に表示
for($i=1; $i<=50; $i++){
// 3の倍数と3のつく数字のときは頭に"aho"と付けて表示する
    $result=preg_match("/3/", (string)$i);
    if($i%3 == 0 || $result==true){
        echo "aho " . $i . "\n";
        continue;
    }
    echo $i . "\n";
}


