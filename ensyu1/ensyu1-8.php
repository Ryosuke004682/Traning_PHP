<?php
    //連想配列 data を定義し、その中から値だけを取り出し出力するプログラム
    $date = array('a' => 10 , 'b' => 100 , 'c' => 1000);

    foreach ($date as $key => $value) {
        echo $value . '<br>';
    }
?>