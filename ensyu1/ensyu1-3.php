<?php
    $number = 1;
    $check = false;

    for($i = 2; $i < $number; $i++) {
        
        if($number % $i == 0) {
          $check = true;
          break;  
        }
    }

    echo (($check == false || $number == 1 || $number == 2) ?
           $number . "は素数です。" : $number . "は素数じゃないです。");
?>