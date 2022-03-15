<?php
echo "input number: ";
$num = (int)trim(fgets(STDIN));  

switch ($num) {
    case 1:
        echo "one";
        break;
    case 2:
        echo "two";
        break;
    case 3:
        echo "three";
        break;
    default:
        echo "others";
}