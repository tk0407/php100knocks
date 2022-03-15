<?php

for($i=1; $i<=100; $i++){
  if($i%3==0 && $i%5==0){
      echo "foobar\n";
      continue;
  }
  if($i%3==0){
      echo "foo\n";
      continue;
  }
  if($i%5==0){
      echo "bar\n";
      continue;
  }
  echo $i . "\n";  
}