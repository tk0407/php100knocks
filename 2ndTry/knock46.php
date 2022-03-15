<?php
echo "人数 ";
$num = (int)trim(fgets(STDIN));  

if($num < 5){
       echo "料金 " . ($num*600);
}
if($num >= 5 && $num < 20){
       echo "料金 " . ($num*550);
}
if($num >= 20){
       echo "料金 " . ($num*500);
}
