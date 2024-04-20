<?php
    //二次元配列の中身を表示するプログラム
    $arr = array(
                    $date1 = array(1 , 10 , 100) , 
                    $date2 = array('いち'  , 'じゅう' , 'ひゃく')
                );

    for($i = 0; $i <= count($arr); $i++) {
        echo $i . ":" . $arr[0][$i] . ',' . $arr[1][$i] .  "<br>";
    }
?>