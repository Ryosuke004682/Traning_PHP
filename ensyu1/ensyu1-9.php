<?php
    //配列 data をユニークにしたものを取得し、その全要素を出力するプログラム
    $data = array('America','Japan','China','Japan','Japan',
    'America','England','England','Japan','China','England');

    $uniqueDate = array_unique($data);

    foreach ($uniqueDate as $value) {
        echo $value . '<br>';
    }

?>