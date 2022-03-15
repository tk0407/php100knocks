<?php
while(true){
    echo "input number: ";
    $num = (int)trim(fgets(STDIN));  
    if($num>=2){
        break;
    }    
}
$ans = 0;
$times = 1;

if($num%2 == 0){
    $ans = ($num/2);
// 計算回数と計算結果を表示
    echo $times . ": " . $ans . "\n";
}

// 奇数ならその値を3倍して1を足す。
if($num%2 != 0){
    $ans = ($num*3+1);
// 計算回数と計算結果を表示
    echo $times . ": " . $ans . "\n";
}

while(true){
    // 計算結果が1になるまで繰り返す
    if($ans == 1){
        break;
    }
    $times++;
    // ある値が偶数ならその値を1/2にする。
    if($ans%2 == 0){
        $ans = ($ans/2);
    // 計算回数と計算結果を表示
        echo $times . ": " . $ans . "\n";
        continue;
    }
    
    // 奇数ならその値を3倍して1を足す。
    if($ans%2 != 0){
        $ans = ($ans*3+1);
    // 計算回数と計算結果を表示
        echo $times . ": " . $ans . "\n";
        continue;
    }
}











