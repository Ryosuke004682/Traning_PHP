<?php
    function totalnumber () {
        $total = 0;
        
        for($i = 1; $i <= 10; $i++) {
            $total += $i;
            echo $i . ': ' . $total . '　';
        }
    }
    totalnumber();
?>