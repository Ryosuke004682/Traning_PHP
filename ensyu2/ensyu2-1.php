<?php
    function showArray($arr) {
        foreach($arr as $data) {
            echo $data . " ";
        }
        echo '<br>';
    }

    $arr = array('one' , 'two' , 'three');
    echo "初期状態 : ";
    showArray($arr);

    echo "\n".'array_push後:';
    array_push($arr,'four');
    showArray($arr);

    echo "\n".'array_pop後:';
    array_pop($arr);
    showArray($arr);
?>