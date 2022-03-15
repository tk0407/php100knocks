<?php
// プレイヤは1から99の数字をランダムに選ぶ（正解値と呼ぶ）。
// $player = rand(1,99);
    
// コンピュータは値を推測して表示する（推測値と呼ぶ）
$cp = 50;
$times = 0;
while(true){
    $times++;
    // 推測値が正解値と一致していれば0
    // 推測値よりも正解値が大きければ正の値を入力する
    // 推測値よりも正解値が小さければ負の値を入力する
    echo $cp . "ですか? ";
    $num = (int)trim(fgets(STDIN)); 
    if($num == 1 && $times == 1){
        $cp = $cp + 25;
    }
    if($num == 1 && $times == 2){
        $cp = $cp + 12;
    }
    if($num == 1 && $times == 3){
        $cp = $cp + 6;
    }
    if($num == 1 && $times == 4){
        $cp = $cp + 3;
    }
    if($num == 1 && $times == 5){
        $cp = $cp + 2;
    }
    if($num == 1 && $times == 6){
        $cp = $cp + 1;
    }    
    if($num == -1 && $times == 1){
        $cp = $cp - 25;
    }
    if($num == -1 && $times == 2){
        $cp = $cp - 12;
    }
    if($num == -1 && $times == 3){
        $cp = $cp - 6;
    }
    if($num == -1 && $times == 4){
        $cp = $cp - 3;
    }
    if($num == -1 && $times == 5){
        $cp = $cp - 2;
    }
    if($num == -1 && $times == 6){
        $cp = $cp - 1;
    } 
    // 推測値が正解値と一致すればクリアとなり回数を表示して終了する。
    if($num == 0){
        echo $times . "回で当てました";
        break;
    }
}