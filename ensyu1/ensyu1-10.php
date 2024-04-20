<?php
    //配列 data から同じ値がいくつあるかカウントし、出力するプログラム
    $data = array(
        'America', 'Japan', 'China', 'Japan', 'Japan',
        'America', 'England', 'England', 'Japan', 'China', 'England'
    );

    /*重複削除 & 出現回数カウント*/
    {
        $uniqueDate = array_unique($data);
        $count      = array_count_values($data);
    }

    //重複要素と重複した回数を表示
    foreach ($uniqueDate as $value) {
        echo $value . ' : ' . $count[$value] . '<br>';
    }
?>
