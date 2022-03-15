<?php
echo "2つの値をスペースで区切って入力: ";
$input = explode(' ',trim(fgets(STDIN)));
$a = intval($input[0]);
$b = intval($input[1]);
$notSoA = false;
$notSoB = false;

// ２，３，５，７で割れたら素数ではない
if($a%2 == 0 || $a%3 == 0 || $a%5 == 0 || $a%7 == 0){
    $notSoA = true;
}
if($b%2 == 0 || $b%3 == 0 || $b%5 == 0 || $b%7 == 0){
    $notSoB = true;
}
// ２，３，５，７は素数
if($a == 2 || $a == 3 || $a == 5 || $a == 7){
    $notSoA = false;
}
if($b == 2 || $b == 3 || $b == 5 || $b == 7){
    $notSoB = false;
}


if($notSoA == false && $notSoB == false){
    echo "互いに素";
}
if($notSoA == true || $notSoB == true){
    echo "互いに素でない";
}