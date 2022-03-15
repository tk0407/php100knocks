<?php
// 最初に石の個数を入力し（10個以上とする）
echo "石の数を入力してください（10以上）: ";
$totalStone = (int)trim(fgets(STDIN)); 
// 入力した石の数表示
echo "石の数: " . $totalStone . "\n";
$first = 0;
$player = 0;

// 順番を決める処理
// 石の総数が 4n,4n+2,4n+3 のとき，「先手必勝」
if($totalStone%4 == 0 || $totalStone%4 == 2 || $totalStone%4 == 3){
    $first = 1;
    echo "ではわたしから\n";
}
// 4n なら先手は3個， 4n+2 なら1個， 4n+3 なら2個，を最初に取れば，
if($totalStone%4 == 0){
    $pc = 3;
}
if($totalStone%4 == 2){
    $pc = 1;
}
if($totalStone%4 == 3){
    $pc = 2;
}
// 石の総数が 4n+1 のときは「後手必勝」
if($totalStone%4 == 1){
    echo "あなたからどうぞ\n";
}

while(true){
    if($first == 1){
        // 先手が1個なら後手は3個，先手が2個なら後手は2個，先手が3個なら後手は1
        if($player == 1){
            $pc = 3;
        }
        if($player == 2){
            $pc = 2;
        }
        if($player == 3){
            $pc = 1;
        }        
        // PCの番です。石の数入力
        // 1〜3以外の数字が入力された場合は再度入力
        echo $pc . "個取ります " . "\n";
        // 残りの石の数表示
        $totalStone = $totalStone - $pc;
        echo "石の数: " . $totalStone . "\n";
        // 最後の1個を取った方が負け判定
        if($totalStone == 1){
            echo "わたしの勝ち";
            exit;
        }
        if($totalStone < 1){
            echo "わたしの反則負け";
            exit;
        }
    }
    // プレイヤーの番です。石の数入力
    // 1〜3以外の数字が入力された場合は再度入力
    echo "何個取る（1〜3個）? ";
    $player = (int)trim(fgets(STDIN)); 
    if($player < 1 || $player > 3){
        $first = 0;
        continue;
    }
    // 残りの石の数表示
    $totalStone = $totalStone - $player;
    echo "石の数: " . $totalStone . "\n";
    $first = 1;
    // 最後の1個を取った方が負け判定
    if($totalStone == 1){
        echo "プレイヤーの勝ち";
        exit;
    }
    if($totalStone < 1){
        echo "プレイヤーの反則負け";
        exit;
    }
}

