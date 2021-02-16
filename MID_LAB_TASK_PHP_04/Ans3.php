<?php
    function check($num) {
    if($num%2=='0')
    echo "Even";
    else
    echo "Odd";
  }
  $num = readline("Enter num: "); 
  check($num)
?>