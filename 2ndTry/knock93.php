<?php
// 開始値と終了値をそれぞれ入力させる。
echo "start: ";
$start = (int)trim(fgets(STDIN)); 
echo "end: ";
$end = (int)trim(fgets(STDIN)); 

// 開始値から終了値まで順に、3の倍数と3のつく数字のときは頭に"aho"と付けて表示するプログラム
// startからendまで順に表示
for($i=$start; $i<=$end; $i++){
// 3の倍数と3のつく数字のときは頭に"aho"と付けて表示する
    $result=preg_match("/3/", (string)$i);
    if($i%3 == 0 || $result==true){
        echo "aho " . $i . "\n";
        continue;
    }
    echo $i . "\n";
}


