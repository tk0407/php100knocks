<?php
echo "input number: ";
$num = (int)trim(fgets(STDIN));  

if($num <= 0){
    echo "factorial = 1"; 
}else{
    echo "factorial = " . factorial_of($num);
}

function factorial_of($num){

    $num2 = $num-1;

    while($num2>0){
        $num *= $num2;

        if($num2>=1){
            $num2--;
        }
    }

    return $num;
}
