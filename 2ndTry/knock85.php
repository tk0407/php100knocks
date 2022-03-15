<?php
// 最初に石の個数を入力し（10個以上とする）
echo "石の数を入力してください（10以上）: ";
$totalStone = (int)trim(fgets(STDIN)); 
// 入力した石の数表示
echo "石の数: " . $totalStone . "\n";

while(true){
    // プレイヤー1の番です。石の数入力
    // 何個取る（1〜3個）
    // 1〜3以外の数字が入力された場合は再度入力
    echo "プレイヤー1の番です\n" . "何個取る（1〜3個）? ";
    $player1 = (int)trim(fgets(STDIN)); 
    if($player1 < 1 || $player1 > 3){
        continue;
    }
    // 残りの石の数表示
    $totalStone = $totalStone - $player1;
    echo "石の数: " . $totalStone . "\n";
    // 最後の1個を取った方が負け判定
    if($totalStone == 1){
        echo "プレイヤー1の勝ち";
        exit;
    }
    if($totalStone < 1){
        echo "プレイヤー1の反則負け";
        exit;
    }
    // プレイヤー2の番です。石の数入力
    // 何個取る（1〜3個）
    // 1〜3以外の数字が入力された場合は再度入力
    echo "プレイヤー2の番です\n" . "何個取る（1〜3個）? ";
    $player2 = (int)trim(fgets(STDIN)); 
    if($player2 < 1 || $player2 > 3){
        continue;
    }
    // 残りの石の数表示
    $totalStone = $totalStone - $player2;
    echo "石の数: " . $totalStone . "\n";
    // 最後の1個を取った方が負け判定
    if($totalStone == 1){
        echo "プレイヤー2の勝ち";
        exit;
    }
    if($totalStone < 1){
        echo "プレイヤー2の反則負け";
        exit;
    }
}

