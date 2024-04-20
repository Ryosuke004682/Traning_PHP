<?php
    //総和を求めるプログラム
    $num = 10;
    $storage = 0;
    for($i = 1; $i <= $num; $i++) {
        $storage += $i;
    }
    echo "1から10までの合計は" . $storage;
?>