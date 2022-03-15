<?php
echo "3つの値を入力: ";
$input = explode(' ',trim(fgets(STDIN)));
rsort($input);

echo $input[1];

