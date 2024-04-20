<?php
    //配列要素の追加、配列要素の削除
    //implode : 配列要素を文字列により連結する。
    $arr = array('one', 'two', 'three');
    echo "初期状態 : " . implode(' ' , $arr) . "<br>";

    array_push($arr, 'four');
    echo "array_push後 : " . implode(' ', $arr) . "<br>";

    array_pop($arr);
    echo "array_pop後 : " . implode(' ', $arr) . "<br>";
?>