<?php
$hWinTimes = 0;
$cpWinTimes =0;

// ・5回勝負として、人間とコンピュータの勝った回数を数え、勝敗がつくたびに1回ずつ表示する。あいこは決着がつくまで再勝負。途中でどちらかが3勝しても、5回最後まで勝負を続ける。
for($i=1; $i<=5; $i++){
    $humanWin = 0;
    $cpWin = 0;
    // ・人間は、グー、チョキ、パーをそれぞれ0、1、2の数字で入力する。
    echo "あなたの手を選んでください(グー0、チョキ1、パー2):";
    $human = (int)trim(fgets(STDIN)); 
    
    // ・指定された範囲以外の値を入力したら負けにする
    if($human>2 || $human<0){
        echo "そんな手はありません。あなたの負け" . "\n";
        $cpWinTimes++;
        echo "あなた" . $hWinTimes . "勝、わたし" . $cpWinTimes . "勝". "\n";
        continue;
    }
    
    // ・コンピュータは乱数を使って出す手を選ぶ。乱数の使い方は演習資料の高度なテクニック集を見よ。
    $cp = rand(0,2);
    
    
    // まず1回だけのじゃんけんプログラム
    // 人勝ちのパターン
    if($human==0 && $cp==1 || $human==1 && $cp==2 || $human==2 && $cp==0){
        $humanWin = 1;
    }
    // CP勝ちのパターン
    if($cp==0 && $human==1 || $cp==1 && $human==2 || $cp==2 && $human==0){
        $cpWin = 1;
    }
    
    if($cp == 0){
        $cp = "グー";
    }
    if($cp == 1){
        $cp = "チョキ";
    }
    if($cp == 2){
        $cp = "パー";
    }
    
    echo "コンピュータは" . $cp . "\n";
    
    if($humanWin == 1){
        echo "あなたの勝ち". "\n";
        $hWinTimes++;
    }
    if($cpWin == 1){
        echo "わたしの勝ち". "\n";
        $cpWinTimes++;
    }
    if($humanWin == 0 && $cpWin == 0){
        echo "あいこ". "\n";
        $i = $i-1;
        continue;
    }
    
    echo "あなた" . $hWinTimes . "勝、わたし" . $cpWinTimes . "勝". "\n";
}


if($hWinTimes>$cpWinTimes){
    echo "あなたの総合勝利です。参りました。";
}
if($cpWinTimes>$hWinTimes){
    echo "わたしの総合勝利です。";
}

