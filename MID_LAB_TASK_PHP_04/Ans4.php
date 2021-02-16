<?php
    function check($num1,$num2,$num3) {
        echo "Largest Num:";
        if($num1>$num2 )
        {
            if($num1>$num3)
            {
                echo" $num1";
            }
            else
            {
                echo" $num3";
            }
        }
        else
        {
            if($num2>$num3)
            {
                echo" $num2";
            }
            else
            {
                echo" $num3";
            }
        }
  }

  $num1 = readline("Enter num1 "); 
  $num2 = readline("Enter num2 "); 
  $num3 = readline("Enter num3 "); 

  check($num1,$num2,$num3);
?>