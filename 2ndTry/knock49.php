<?php
// 九九の1行を9回表示する繰り返し
for($a=1; $a<=9; $a++){
        for($i=1; $i<=9; $i++){
        $num = $i * $a;
        echo $num . "\t";
        if($i == 9){
            echo "\n";
        }
    }
}