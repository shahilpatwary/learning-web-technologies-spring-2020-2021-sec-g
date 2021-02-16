<?php
    function vat($a) {
    $v=$a*.15;
    echo ""."$a" ."tk vat is " ."$v"."tk";
  }

  $amount = readline('Enter amount : '); 
  vat($amount)
?>