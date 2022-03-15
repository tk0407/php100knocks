<?php
// トランプは4つのスート（マーク）、1〜13までの数字の52枚である。
$cards = [
    "A","2","3","4","5","6","7","8","9","10","J","Q","K",
    "A","2","3","4","5","6","7","8","9","10","J","Q","K",
    "A","2","3","4","5","6","7","8","9","10","J","Q","K",
    "A","2","3","4","5","6","7","8","9","10","J","Q","K",
    ];


// 最初にトランプをシャッフル
shuffle($cards);


// 何枚目まで引いたか覚えておく変数
$times = 1;

// 手持ちのカードを覚えておく配列を別に作って
$hands = [$cards[0],$cards[1]];

// 2枚を先頭から順番に引き
$first = $cards[0];
$secound = $cards[1];

// JとQとKは10、Aは1か11
// Aはとりあえず11として合計値を計算し、21を超える場合は1として数える（合計値から10を引く）
if($first == "J" || $first == "Q" || $first == "K"){
    $first = 10;
}
if($first == "A"){
    $first = 11;
}
if($secound == "J" || $secound == "Q" || $secound == "K"){
    $secound = 10;
}
if($secound == "A"){
    $secound = 11;
}

$total = $first + $secound; 

if($total > 21){
    $total = $total - 10;
}


// それらのカードの数字（マークは無視してよい）と合計値を表示する
echo $cards[0] . " " . $cards[1] .  " : 合計" . $total . "\n";

while(true){
    // 何枚目まで引いたか覚えておく変数に追加
    $times++;
    
    // 合計が16以下の場合はもう一枚カードを引き、17以上になったら止める
    if($total<=16){
        $hands[] = $cards[$times];
        echo "もう一枚引きます" . "\n";

        if($cards[$times] == "J" || $cards[$times] == "Q" || $cards[$times] == "K"){
        $cards[$times] = 10;
        }
        if($cards[$times] == "A" && $total <=10){
            $cards[$times] = 11;
        }
        if($cards[$times] == "A" && $total > 10){
            $cards[$times] = 1;
        }
        $total = $total + $cards[$times];
        
        // 表示
        foreach($hands as $value){
            echo $value . " ";
        }
        echo  ": 合計" . $total . "\n";
    }

    
    
    if($total>=17 && $total<=21){
        echo "これでOKです";
        break;
    }
    if($total > 21){
        echo "バストです";
        break;
    }
}







