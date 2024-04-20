<?php
    $arr = [78,87,65,98,41,79,60];
    $sumStorage = 0;

    foreach ($arr as $value) {
       $sumStorage += $value;
    }

    $result =  $sumStorage / count($arr);
    echo "平均値は、" . (int)$result . "です。";
?>