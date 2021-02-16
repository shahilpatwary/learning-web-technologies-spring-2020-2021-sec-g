<?php
  $elements =[1,2,3,'shahil','lam','mim'];
  $num1 = readline("Enter the element you want to find "); 

  foreach ($elements as $value) {
    if($value==$num1) {
        echo "Matched";
        break;
    }
  }
?>