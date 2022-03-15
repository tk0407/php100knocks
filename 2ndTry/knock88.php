<?php
// コンピュータは1から99の数字をランダムに選ぶ（正解値と呼ぶ
$cp = rand(1,99);
$times = 0;
while(true){
    $times++;
    // プレイヤは値を入力
    echo "数を入力: ";
    $num = (int)trim(fgets(STDIN)); 
    
    // 一致しなければ正解値が入力値より大きいか小さいかを表示する
    if($cp > $num){
        echo "それより大きいです" . "\n";
    }
    if($cp < $num){
        echo "それより小さいです" . "\n";
    }
    
    // 正解値と一致すればクリアとなり値を入力した回数を表示する
    if($cp == $num){
        echo "正解!! " . $times . "回でクリア";
        break;
    }
}